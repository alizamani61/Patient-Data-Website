<?php

MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_" . LANG . ".inc.php");

class identicalProcess extends IProcess {

    private $_view;
    private $_db;

    public function __construct() {
        global $loginprocess;
        $this->_db = new identicalDatabase();
        $this->_view = new identicalView();
        //$this->startSession();
        if (isset($_POST["com_identical_save"]) && $_SESSION["token"] == $_POST["token"]) {
//            $key_arrays = array("isoperated", "prevundiets", "inabilityexer", "arthritis", "asthma", "heartpalp", "infertility", "internaldis", "beautypersonal");
//            for ($t = 0; $t < count($key_arrays); $t++)
//                if (!array_key_exists($key_arrays[$t], $_POST)) {
//                    $_POST[$key_arrays[$t]] = 0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view, TBL_IDENTICAL);
        }
        if (isset($_GET["com_identical"]) && isset($_GET["func"])) {
            if (isset($_GET["id"])) {
                if (strtolower($_GET["func"]) == "select") {
                    $this->_view->setValue("identical_dataid", $_GET["id"]);
                    $this->_db->getItemById($this->_view, TBL_IDENTICAL, $loginprocess->isAdministrator());
                }

                if (strtolower($_GET["func"]) == "identicaldel") {
                    $this->_view->setValue("identical_dataid", $_GET["id"]);
                    if ($loginprocess->isAdministrator()) {
                        $this->_db->delete($this->_view, TBL_IDENTICAL, $loginprocess->isAdministrator());
                    }
                    //echo $_GET["id"];
                }

                if (strtolower($_GET["func"]) == "print") {
                    echo "Print";
                }
            }

            if (strtolower($_GET["func"]) == "identicalnew") {
                unset($_SESSION["identical_dataid"]);
                unset($_SESSION["name"]);
                unset($_SESSION["lname"]);
                unset($_SESSION["age"]);
            }
        }
    }

    public function getPmhxAlarm() {
        if (isset($_SESSION["identical_dataid"]))
            return $this->_db->getPmhxAlarm($_SESSION["identical_dataid"]);
        else
            return 0;
    }

    public function getPatientsReferralByID() {
        if (isset($_SESSION["identical_dataid"]))
            return $this->_db->getPatientsReferralByID($_SESSION["identical_dataid"]);
        else
            return null;
    }

    public function getRedoAlarm() {
        if (isset($_SESSION["identical_dataid"]))
            return $this->_db->getRedoAlarm($_SESSION["identical_dataid"]);
        else
            return 0;
    }

    private function session_Handler() {
        session_start();   //Tell PHP to start the session
    }

    private function startSession() {
        $this->session_Handler();
    }

    /**
     * display
     */
    public function display() {
        $this->_view->display($this->getPmhxAlarm(), $this->getRedoAlarm());
    }

}

/* Initialize process */
$identicalproc = new identicalProcess();
?>