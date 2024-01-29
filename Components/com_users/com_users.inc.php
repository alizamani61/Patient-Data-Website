<?php

MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_" . LANG . ".inc.php");

class UsersProcess extends IProcess {

    private $_view;
    private $_db;

    public function __construct() {
        $this->_db = new usersDatabase();
        $this->_view = new usersView();
        //$this->startSession();
        if (isset($_POST["com_users_save"]) && $_SESSION["token"] == $_POST["token"]) {
            $key_arrays = array();
            for ($t = 0; $t < count($key_arrays); $t++)
                if (!array_key_exists($key_arrays[$t], $_POST)) {
                    $_POST[$key_arrays[$t]] = 0;
                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view, TBL_USERS);
        }
        if (isset($_GET["com_users"]) && isset($_GET["func"])) {
            if (isset($_GET["username"])) {
                if (strtolower($_GET["func"]) == "select") {
                    $this->_view->setValue("username", $_GET["username"]);
                    $this->_db->getItemById($this->_view, TBL_USERS);
                }

                if (strtolower($_GET["func"]) == "usersdel") {
                    $this->_view->setValue("username", $_GET["username"]);
                    $this->_db->delete($this->_view, TBL_USERS);
                    //echo $_GET["id"];
                }

                if (strtolower($_GET["func"]) == "print") {
                    echo "Print";
                }
            }

            if (strtolower($_GET["func"]) == "usersnew") {
                $this->_view->setValue("id", "");
                $this->_view->setValue("mod1", "");
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
$usersprocess = new UsersProcess();
?>
