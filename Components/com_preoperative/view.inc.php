<?php

MImport("core.IView");
MImport("core.IProcess");

class preoperativeView extends IView {

    public function display() {
        $db = new preoperativeDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"] = md5(hash('sha256', uniqid(rand(), true))) . md5(hash('sha256', uniqid(rand(), true)));
        $message = $this->message();

        if (isset($_GET["primarylaboratoryscreening"])) {
            require("htm/primarylaboratoryscreening.inc.php");
        } else if (isset($_GET["sonography"])) {
            require("htm/sonography.inc.php");
        } else if (isset($_GET["optional"])) {
            require("htm/optional.inc.php");
        } else if (isset($_GET["multidisciplinaryevaluation"])) {
            require("htm/multidisciplinaryevaluation.inc.php");
        } else if (isset($_GET["metabolicsx"])) {
            require("htm/metabolicsx.inc.php");
        }
    }

    public function getToken() {
        return $_SESSION["token"];
    }

}
?>

