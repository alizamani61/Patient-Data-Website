<?php

MImport("core.IView");
MImport("core.IProcess");

class reviewView extends IView {

    public function display() {
        $db = new reviewDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"] = md5(hash('sha256', uniqid(rand(), true))) . md5(hash('sha256', uniqid(rand(), true)));
        $message = $this->message();

        if (isset($_GET["cardiopulmonary"])) {
            require("htm/cardiopulmonary.inc.php");
        }else if(isset($_GET["gitract"])) {
            require("htm/gitract.inc.php");
        }else if(isset($_GET["musculoskeletal"])) {
            require("htm/musculoskeletal.inc.php");
        }else if(isset($_GET["neuropsychiatry"])) {
            require("htm/neuropsychiatry.inc.php");
        }else if(isset($_GET["skin"])) {
            require("htm/skin.inc.php");
        }else if(isset($_GET["endocrinology"])) {
            require("htm/endocrinology.inc.php");
        }
    }

    public function getToken() {
        return $_SESSION["token"];
    }

}
?>

