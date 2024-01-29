<?php
MImport("core.IDatabase");
require_once("view.inc.php");


class LoginDatabase extends IDatabase
{
    var $num_active_users;   //Number of active users viewing site
    var $num_active_guests;  //Number of active guests viewing site
    var $num_members;        //Number of signed-up users
    /* Note: call getNumMembers() to access $num_members! */
    
    /**
    * confirmUserPass - Checks whether or not the given
    * username is in the database, if so it checks if the
    * given password is the same password in the database
    * for that user. If the user doesn't exist or if the
    * passwords don't match up, it returns an error code
    * (1 or 2). On success it returns 0.
    */

    function confirmUserPass($username, $password,$security_code=null){
        /* Add slashes if necessary (for query) */
        if(!get_magic_quotes_gpc()) {
            $username = addslashes($username);
        }       
        /* Verify that user is in database */
        /* Retrieve password from result, strip slashes */
        $dbpassword = stripslashes($this->queryUniqueValue("password",TBL_USERS,"username='$username'"));
      
        if(!$dbpassword){
            return 1; //Indicates username failure
        }
        
        $password = stripslashes($password);

        if(SECURITY_CODE)
        {;
            /* Validate that password is correct */
            if($password == $dbpassword){
                if($_SESSION["security_code"] == $security_code)
                    return 0; //Success! Username and password confirmed
                else 
                    return 5;
                
            }else{
                return 2; //Indicates password failure
            }
        }else{
             /* Validate that password is correct */
            if($password == $dbpassword){
                return 0; //Success! Username and password confirmed
            }else{
                return 2; //Indicates password failure
            }
        }
    }

    /**
    * confirmUserID - Checks whether or not the given
    * username is in the database, if so it checks if the
    * given userid is the same userid in the database
    * for that user. If the user doesn't exist or if the
    * userids don't match up, it returns an error code
    * (1 or 2). On success it returns 0.
    */

    function confirmUserID($username, $userid){
        /* Add slashes if necessary (for query) */
        if(!get_magic_quotes_gpc()) {
            $username = addslashes($username);
        }

        /* Verify that user is in database */
        /* Retrieve userid from result, strip slashes */
        $dbuserid = stripslashes($this->queryUniqueValue("userid",TBL_USERS,"username='$username'"));
        
        if(!$dbuserid){
            return 1; //Indicates username failure
        }

        $userid = stripslashes($userid);
        /* Validate that userid is correct */
        if($userid == $dbuserid){
            return 0; //Success! Username and userid confirmed
        }else{
            return 2; //Indicates userid invalid
        }
    }
    
    /**
    * usernameTaken - Returns true if the username has
    * been taken by another user, false otherwise.
    */
    function usernameTaken($username, $hid){
        if(!get_magic_quotes_gpc()){
            $username = addslashes($username);
        }
        return ($this->queryNumRows("username", TBL_USERS, "username='$username'")> 0);
    }

    /**
    * usernameBanned - Returns true if the username has
    * been banned by the administrator.
    */
    function usernameBanned($username){
        if(!get_magic_quotes_gpc()){
            $username = addslashes($username);
        }
        return ($this->queryNumRows("username", TBL_BANNED_USERS, "username='$username'")> 0);
    }
   
    /**
    * getUserInfo - Returns the result array from a mysql
    * query asking for all information stored regarding
    * the given username. If query fails, NULL is returned.
    */

    function getUserInfo($username){
        /* Return result array */
        return $this->queryfetchRow("*", TBL_USERS, "username='$username'");
    }
    
    /**
    * getNumMembers - Returns the number of signed-up users
    * of the website, banned members not included. The first
    * time the function is called on page load, the database
    * is queried, on subsequent calls, the stored result
    * is returned. This is to improve efficiency, effectively
    * not querying the database when no call is made.
    */
    function getNumMembers(){
        if($this->num_members < 0)
            $this->num_members = $this->queryNumRows("*", TBL_USERS);
        
        return $this->num_members;
    }  
    
    function getNumActiveUsers()
    {
    	$this->calcNumActiveUsers();
    	return $this->num_active_users;
    }
    /**
    * calcNumActiveUsers - Finds out how many active users
    * are viewing site and sets class variable accordingly.
    */
    function calcNumActiveUsers(){
        /* Calculate number of users at site */
        $this->num_active_users = $this->queryNumRows("*", TBL_ACTIVE_USERS);
    }

    
    /**
    * calcNumActiveGuests - Finds out how many active guests
    * are viewing site and sets class variable accordingly.
    */
    function calcNumActiveGuests(){
        /* Calculate number of guests at site */
        $this->num_active_guests = $this->queryNumRows("*", TBL_ACTIVE_GUESTS);
    }
    
    /**
    * updateUserField - Updates a field, specified by the field
    * parameter, in the user's row of the database.
    */

    function updateUserField($username, $field, $value){
        return  $this->setUpdate(TBL_USERS, $field."="."'$value'", "username = '$username'");
    }
    /**
    * addActiveUser - Updates username's last active timestamp
    * in the database, and also adds him to the table of
    * active users, or updates timestamp if already there.
    */
    function addActiveUser($username, $time){
        $this->setUpdate(TBL_USERS, "timestamp = '$time'", "username = '$username'");
 
        if(!TRACK_VISITORS) return;
        
        $this->setReplace(TBL_ACTIVE_USERS, "'$username', '$time'");
        $this->calcNumActiveUsers();
    }

    /* addActiveGuest - Adds guest to active guests table */
    function addActiveGuest($ip, $time){
        if(!TRACK_VISITORS) return;
        
        $this->setReplace(TBL_ACTIVE_GUESTS, "'$ip', '$time'");
        $this->calcNumActiveGuests();
    }


    /* These functions are self explanatory, no need for comments */
    /* removeActiveUser */
    function removeActiveUser($username){
        if(!TRACK_VISITORS) return;
       
        $this->setDelete(TBL_ACTIVE_USERS, " username = '$username'");
        $this->calcNumActiveUsers();
    }

    /* removeActiveGuest */
    function removeActiveGuest($ip){
        if(!TRACK_VISITORS) return;
        
        $this->setDelete(TBL_ACTIVE_GUESTS, " ip = '$ip'");
        $this->calcNumActiveGuests();
    }

    /* removeInactiveUsers */
    function removeInactiveUsers(){
        if(!TRACK_VISITORS) return;
        $timeout = time()-USER_TIMEOUT*60;
        
        $this->setDelete(TBL_ACTIVE_USERS, " timestamp < $timeout");
        $this->calcNumActiveUsers();
    }

    /* removeInactiveGuests */
    function removeInactiveGuests(){
        if(!TRACK_VISITORS) return;
        $timeout = time()-GUEST_TIMEOUT*60;
        
        $this->setDelete(TBL_ACTIVE_GUESTS, " timestamp < $timeout");
        $this->calcNumActiveGuests();
    }

   
    function test()
    {
        IDatabase::setSelect("*", "events");
        IDatabase::query();
        while ($row= IDatabase::fetchNextObject())
        {
            $arr[]=$row;
        }
        return $arr;
    }
    
    function insert(IView $view)
    {
        
    }
}

?>