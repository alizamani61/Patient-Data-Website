<?php
MImport("core.IView");
MImport("core.IProcess");

class dietView extends IView{

    public function display()
    {
        $db=new dietDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        
        if (isset($_GET["dietaryassessment"])) {
            require("htm/dietaryassessment.inc.php");
        }else if(isset($_GET["physicalactivity"])) {
            require("htm/physicalactivity.inc.php");
        }
     }
    public function getToken()
    {
        return $_SESSION["token"];
    }

  }

?>

