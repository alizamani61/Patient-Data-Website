<?php
MImport("core.IView");
MImport("core.IProcess");

class usersView extends IView{

    public function display()
    {
        $db=new usersDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        $users = $db->getAllUsers();
        require("htm/default.inc.php");
    }
    public function getToken()
    {
        return $_SESSION["token"];
    }

  }

?>

