<?php
MImport("core.IView");

class LoginView extends IView{

    public function display()
    {
        $error = $this->allErrors();
        $form = $this->allValue();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        require("htm/default.inc.php"); 
        
    }
    public function getToken()
    {
        return $_SESSION["token"];
    }
}

?>
