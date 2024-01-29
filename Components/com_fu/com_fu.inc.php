<?php

MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_" . LANG . ".inc.php");

class fuProcess extends IProcess {

    private $_view;
    private $_db;

    public function __construct() {
        $this->_db = new fuDatabase();
        $this->_view = new fuView();
//$this->startSession();
        if (isset($_POST["com_fu_save"]) && $_SESSION["token"] == $_POST["token"]) {
//            $key_arrays = array("gastritis", "ulceration", "absttoglra", "disofgl", "metaplasia", "abblood", "mictoor", "neoplasia", "menetrier", "hemorrhage", "granuloma", "erosions", "epithelial", "anatomicga", "anatomicst", "anatomicob", "anatomicba", "anatomicdis", "anatomilinec", "anatomicer", "anatomicve", "anatomicher", "anatomicpor", "anatomicport", "biomechanicga", "biomechanicdi", "biomechanicdila", "biomechaniesoc", "biomechanicref", "biomechanicrec", "physiologicma", "physiologicdu", "physiologicpos", "physiologicnep", "physiologicrenal", "physiologiccho", "physiologicchol", "physiologicc", "physiologicci", "malnmi", "malnvit", "malnele", "malnsh", "malncha", "malnhem", "malnfis", "failurein", "failurewe", "failuredec");
//            for ($t = 0; $t < count($key_arrays); $t++)
//                if (!array_key_exists($key_arrays[$t], $_POST)) {
//                    $_POST[$key_arrays[$t]] = 0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view, TBL_FU);
        }
        if (isset($_POST["com_fu_detail_save"]) && $_SESSION["token"] == $_POST["token"]) {
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view, TBL_FUDETAIL);
        }
        if (isset($_POST["com_fu_detail_add"]) && $_SESSION["token"] == $_POST["token"]) {
            if(trim($_POST["fudate"])!="" && trim($_POST["pageType"])!="")
            {
                $this->_view->setFormValue($_POST);
                $this->_db->addNew($this->_view, TBL_FUDETAIL);
            }
        }
        
        if (isset($_GET["com_fu"]) && isset($_GET["func"])) {
            if (isset($_GET["id"])) {
                if (strtolower($_GET["func"]) == "select") {
                    if (isset($_GET["anthropometricmonitoring"])) {
                        $this->_view->setValue("ident_id", $_SESSION["identical_dataid"]);
                        if(isset($_GET["fudate"]))
                            $this->_view->setValue("fudate", $_GET["fudate"]);
                        $this->_db->getAnthropometricMonitoring($this->_view, TBL_FUDETAIL);
                    }else if (isset($_GET["laboratorymonitoring"])) {
                        $this->_view->setValue("ident_id", $_SESSION["identical_dataid"]);
                        if(isset($_GET["fudate"]))
                            $this->_view->setValue("fudate", $_GET["fudate"]);
                        $this->_db->getLaboratoryMonitoring($this->_view, TBL_FUDETAIL);
                    } else {
                        $this->_view->setValue("ident_id", $_SESSION["identical_dataid"]);
                        $this->_db->getItemById($this->_view, TBL_FU);
                    }
                }

                if (strtolower($_GET["func"]) == "fudel") {
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->delete($this->_view, TBL_FU);
//echo $_GET["id"];
                }

                if (strtolower($_GET["func"]) == "print") {
                    echo "Print";
                }
            }

            if (strtolower($_GET["func"]) == "funew") {
                
            }
        }
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
        $this->_view->display();
    }

}

/* Initialize process */
$fuproc = new fuProcess();
?>
