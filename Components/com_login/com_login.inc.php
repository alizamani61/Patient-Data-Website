<?php
MImport("core.IProcess");
MImport("core.IHtml");

require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");


class LoginProcess extends IProcess {
    private $_view;
    private $_db;
    
    private $username;     //Username given on sign-up
    private $userid;       //Random value generated on current login
    private $userlevel;    //The level to which the user pertains
    private $time;         //Time user was last active (page loaded)
    private $logged_in;    //True if user is logged in, false otherwise
    private $userinfo = array();  //The array holding all user info
    private $url;          //The page url current being viewed
    private $referrer;  
    
    public function __construct() {
        //$this->time = 
        $this->time = time();
        $this->_db = new LoginDatabase();
        $this->_view = new LoginView();
        $this->startSession();
        
    }

    public function calcNumActiveUsers()
    {
    	return $this->_db->getNumActiveUsers();
    }
    
    private function session_Handler()
    {
        session_start();   //Tell PHP to start the session
        // check to see if $_SESSION['timeout'] is set
        if(SESSION_TIMEOUT!=null)
            if(isset($_SESSION['timeout']) ) {
                $session_life = time() - $_SESSION['timeout'];
                if($session_life > SESSION_TIMEOUT)
                   $this->logout();
            }

        $_SESSION["timeout"]=time();
    }
    
    private function startSession(){
        $this->session_Handler();
        /* Determine if user is logged in */
        $this->logged_in = $this->checkLogin();
        /**
        * Set guest value to users not logged in, and update
        * active guests table accordingly.
        */
        
        
        if(!$this->logged_in){
            $this->username = $_SESSION['username'] = GUEST_NAME;
            $this->userlevel = GUEST_LEVEL;
            $this->_db->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);
        }
        /* Update users last active timestamp */
        else{
            $this->_db->addActiveUser($this->username, $this->time);
        }

        /* Remove inactive visitors from database */
        $this->_db->removeInactiveUsers();
        $this->_db->removeInactiveGuests();

        /* Set referrer page */
        if(isset($_SESSION['url'])){
            $this->referrer = $_SESSION['url'];
        }else{
            $this->referrer = "/";
        }

        /* Set current url */
        $this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];
    }
   
    public function xml()
    {
        IHtml::Div();
        IHtml::Text("This is a Test", true,"div");
        
    }
    
    /**
    * displayLogin - disolay the login page
    */
    public function displayLogin()
    {
        
        $this->_view->display();
    }
    
    /**
    * checkLogin - Checks if the user has already previously
    * logged in, and a session with the user has already been
    * established. Also checks to see if user has been remembered.
    * If so, the database is queried to make sure of the user's 
    * authenticity. Returns true if the user has logged in.
    */
	
    public function checkLogin()
    {
        //echo $_SESSION['username'];
        if(isset($_POST["login"]) && isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["token"]))
        {
            return $this->login();
        }else if(isset($_GET["logout"]) || isset($_POST["logout"]))
            $this->logout();
        else{
            
            //echo "sdfasdfsdfsdf";
            
            //$this->_view->setValue("identical_dataid", 4168);
            
            
            /* Check if user has been remembered */
            if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){
                $this->username = $_SESSION['username'] = $_COOKIE['cookname'];
                $this->userid   = $_SESSION['userid']   = $_COOKIE['cookid'];
            }
            
            
            /* Username and userid have been set and not guest */
            if(isset($_SESSION['username']) && isset($_SESSION['userid']) &&
                $_SESSION['username'] != GUEST_NAME){
                /* Confirm that username and userid are valid */
                if($this->_db->confirmUserID($_SESSION['username'], $_SESSION['userid']) != 0){
                    /* Variables are incorrect, user not logged in */
                    unset($_SESSION['username']);
                    unset($_SESSION['userid']);
                    return false;
                }

                /* User is logged in, set class variables */
                $this->userinfo  = $this->_db->getUserInfo($_SESSION['username']);
                $this->username  = $this->userinfo['username'];
                $this->userid    = $this->userinfo['userid'];
                $this->userlevel = $this->userinfo['userlevel'];
                return true;
            }
            /* User not logged in */
            else{
                return false;
            }
        }
    }
    
 	/**
    * login - The user has submitted his username and password
    * through the login form, this function checks the authenticity
    * of that information in the database and creates the session.
    * Effectively logging in the user if all goes well.
    */
    private function login()
    {
        $this->_view->setFormValue($_POST);
        
        
        if($_SESSION["token"]==$_POST["token"]){
            
            
            if(SECURITY_CODE)
                /* Checks that username is in database and password is correct */
                $result = $this->_db->confirmUserPass($this->_view->value("user"), md5($this->_view->value("pass")),$this->_view->value("security_code"));
            else
                $result = $this->_db->confirmUserPass($this->_view->value("user"), md5($this->_view->value("pass")));

            /* Check error codes */
            if($result == 1){
                $field = "user";
                $this->_view->setError($field, USER_INVALID);
            }
            else if($result == 2){
                $field = "pass";
                $this->_view->setError($field, PASS_INVALID);
            }
            else if($result == 5){
                $field = "security_code";
                $this->_view->setError($field, SEC_INVALID);
            }

            
            
            /* Return if form errors exist */
            if($this->_view->num_Errors() > 0){
                return false;
            }

            /* Username and password correct, register session variables */
            $this->userinfo  = $this->_db->getUserInfo($this->_view->value("user"));
            $this->username  = $_SESSION['username'] = $this->userinfo['username'];
            $this->userid    = $_SESSION['userid']   = $this->generateRandID();
            $this->userlevel = $this->userinfo['userlevel'];

            /* Insert userid into database and update active users table */
            $this->_db->updateUserField($this->username, "userid", $this->userid);
            $this->_db->addActiveUser($this->username, $this->time);
            $this->_db->removeActiveGuest($_SERVER['REMOTE_ADDR']);

            /**
            * This is the cool part: the user has requested that we remember that
            * he's logged in, so we set two cookies. One to hold his username,
            * and one to hold his random value userid. It expires by the time
            * specified in constants.php. Now, next time he comes to our site, we will
            * log him in automatically, but only if he didn't log out before he left.
            */
            if($this->_view->value("remember")){
                setcookie("cookname", $this->username, time()+COOKIE_EXPIRE, COOKIE_PATH);
                setcookie("cookid",   $this->userid,   time()+COOKIE_EXPIRE, COOKIE_PATH);
            }

            /* Login completed successfully */
            //IHtml::redirection("../../index.php");
            
            
            
            return true;
        }
        
        return false;
    }
   
   /**
    * logout - Gets called when the user wants to be logged out of the
    * website. It deletes any cookies that were stored on the users
    * computer as a result of him wanting to be remembered, and also
    * unsets session variables and demotes his user level to guest.
    */
    private function logout()
    {
        /**
        * Delete cookies - the time must be in the past,
        * so just negate what you added when creating the
        * cookie.
        */
        if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){
            setcookie("cookname", "", time()-COOKIE_EXPIRE, COOKIE_PATH);
            setcookie("cookid",   "", time()-COOKIE_EXPIRE, COOKIE_PATH);
        }

        /* Unset PHP session variables */
        unset($_SESSION['username']);
        unset($_SESSION['userid']);
        if (isset($_SESSION["token"]))
            unset($_SESSION["token"]);
        if (isset($_SESSION['timeout']))
            unset($_SESSION['timeout']);
        if (isset($_SESSION['y']))
            unset($_SESSION["y"]);
        if (isset($_SESSION["identical_dataid"]))
            unset($_SESSION["identical_dataid"]);
        if (isset($_SESSION["name"]))
               unset($_SESSION["name"]);
        if (isset($_SESSION["lname"]))
                unset($_SESSION["lname"]);
        if (isset($_SESSION["age"]))
                unset($_SESSION["age"]);

    

        /* Reflect fact that user has logged out */
        $this->logged_in = false;

        /**
        * Remove from active users table and add to
        * active guests tables.
        */
        $this->_db->removeActiveUser($this->username);
        $this->_db->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);

        /* Set user level to guest */
        $this->username  = GUEST_NAME;
        $this->userlevel = GUEST_LEVEL;
        
    }

    /**
    * isAdmin - Returns true if currently logged in user is
    * an administrator, false otherwise.
    */
    public function isAdmin(){
        return ($this->userlevel == ADMIN_LEVEL);
    }

    public function isAdministrator(){
        return ($this->userlevel == ADMINISTRATOR_LEVEL);
    }
    
    /**
    * generateRandID - Generates a string made up of randomized
    * letters (lower and upper case) and digits and returns
    * the md5 hash of it to be used as a userid.
    */
    private function generateRandID(){
        return md5($this->generateRandStr(16));
    }

    /**
    * generateRandStr - Generates a string made up of randomized
    * letters (lower and upper case) and digits, the length
    * is a specified parameter.
    */
    private function generateRandStr($length){
        $randstr = "";
        for($i=0; $i<$length; $i++){
            $randnum = mt_rand(0,61);
            if($randnum < 10){
                $randstr .= chr($randnum+48);
            }else if($randnum < 36){
                $randstr .= chr($randnum+55);
            }else{
                $randstr .= chr($randnum+61);
            }
        }
        return $randstr;
    }     
}

/* Initialize process */

$loginprocess = new LoginProcess();
?>