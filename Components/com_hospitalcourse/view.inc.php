<?php

MImport("core.IView");
MImport("core.IProcess");

class hospitalcourseView extends IView {

    public function display() {
        $db = new hospitalcourseDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"] = md5(hash('sha256', uniqid(rand(), true))) . md5(hash('sha256', uniqid(rand(), true)));
        $message = $this->message();

        if (isset($_GET["preopdata"])) {
            require("htm/preopdata.inc.php");
        } else if (isset($_GET["intraopdata"])) {
            require("htm/intraopdata.inc.php");
        }else if (isset($_GET["postopdata"])) {
            require("htm/postopdata.inc.php");
        }else if (isset($_GET["discharge"])) {
            require("htm/discharge.inc.php");
        }
    }

    public function getToken() {
        return $_SESSION["token"];
    }

}
?>

