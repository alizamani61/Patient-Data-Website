<?php
MImport("core.IView");
MImport("core.IProcess");

class peView extends IView{

    public function display()
    {
        $db=new peDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        
        if (isset($_GET["generalappearance"])) {
            require("htm/generalappearance.inc.php");
        }else if(isset($_GET["vsanthropometry"])) {
            require("htm/vsanthropometry.inc.php");
        }else if(isset($_GET["heent"])) {
            require("htm/heent.inc.php");
        }else if(isset($_GET["chestabdomen"])) {
            require("htm/chestabdomen.inc.php");
        }else if(isset($_GET["extremity"])) {
            require("htm/extremity.inc.php");
        }else if(isset($_GET["skin"])) {
            require("htm/skin.inc.php");
        }
     }
    public function getToken()
    {
        return $_SESSION["token"];
    }

  }

?>

