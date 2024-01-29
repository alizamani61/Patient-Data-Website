<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class preoperativeProcess extends IProcess {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_db = new preoperativeDatabase();
        $this->_view = new preoperativeView();
        //$this->startSession();
        if(isset($_POST["com_preoperative_save"]) && $_SESSION["token"] == $_POST["token"])
        {
//            $key_arrays=array("liver","liverfatty","liversol","gb","gbdistended","spleen","spleensol","uterine","myoma","ovaries","ovariesneck","cyst","scystsep","rkidney","rkidneystone","rkidneysludge","rkidneycyst","lkidney","lkidneystone","lkidneysludge","lkidneycyst","bladder","bladderstone","bladdermass","endoscopyes","endoscopyesweb","endoscopyesstr","endoscopyesloc","endoscopyesna","endoscopyesmu","endoscopyst","endoscopystga","endoscopystpr","endoscopystul","endoscopydu","endoscopyduulcer","endoscopybiopsy");
//                 for($t=0;$t<count($key_arrays);$t++)
//                if (!array_key_exists($key_arrays[$t],$_POST))
//                {
//                    $_POST[$key_arrays[$t]]=0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view,TBL_PREOPERATIVE);
        }
        if(isset($_GET["com_preoperative"]) && isset($_GET["func"]))
        {
            if(isset($_GET["id"]))
            {
                if(strtolower($_GET["func"])=="select"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->getItemById($this->_view,TBL_PREOPERATIVE);
                }
                
                if(strtolower($_GET["func"])=="preoperativedel"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->delete($this->_view,TBL_PREOPERATIVE);
                    //echo $_GET["id"];
                }
                
                if(strtolower($_GET["func"])=="print"){
                    echo "Print";
                }
            }

            if(strtolower($_GET["func"])=="preoperativenew")
            {

                            }
        }
            }
    
    private function session_Handler()
    {
        session_start();   //Tell PHP to start the session
            }
    
    private function startSession(){
        $this->session_Handler();
    }
    
    /**
    * display
    */
    public function display()
    {
        $this->_view->display();
    }
    
    }

/* Initialize process */
$preoperativeproc = new preoperativeProcess();
?>
