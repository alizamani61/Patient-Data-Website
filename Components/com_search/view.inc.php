<?php
MImport("core.IView");
MImport("core.IProcess");
//include _SITE_ROOT . COMPONENTS . "com_login/com_login.inc.php";

class SearchView extends IView{

    public function display()
    { 
        $form = $this->allValue();
        $error = $this->allErrors();
        //$_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        require("htm/default.inc.php"); 
    }
    
    public function users_display()
    { 
        $form = $this->allValue();
        $error = $this->allErrors();
        
        //$_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        require("htm/users.inc.php"); 
    }
    
    public function identical_display()
    { 
        global $loginprocess;
        $db=new SearchDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        //$_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        
        $fields = $db->getAllFields();
        
        require("htm/identical.inc.php"); 
    }
    

    public function showIdenticalSearchTable()
    {
        $form = $this->allValue();
        require("htm/identical_table.inc.php");
    }
    
    public function showUsers_SearchTable()
    {
        $form = $this->allValue();
        require("htm/users_table.inc.php");
    }
    
    public function getToken()
    {
        //return $_SESSION["token"];
    }
    
    public function getUsers($username)
    {
        $db=new SearchDatabase();
        return $db->getUsers($username);
    }
    
    public function getAllUsers()
    {
        $db=new SearchDatabase();
        return $db->getAllUsers();
    }
}

?>
