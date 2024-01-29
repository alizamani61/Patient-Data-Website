<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class familyProcess extends IProcess {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_db = new familyDatabase();
        $this->_view = new familyView();
        //$this->startSession();
        if(isset($_POST["com_family_save"]) && $_SESSION["token"] == $_POST["token"])
        {
//            $key_arrays=array("obesity","prostatecancer","dm","othermalignancy","htn","rentalstone","hypothyroidism","gallstone","breastcancer","gout","coloncancer","multiplegestation","endometrialcancer","other","ovariancancer","smoking","smokingciga","smokingcigar","smokingwaterpipe","smokingopium","smokingcannabis","othersubagent","lifestressor");
//                 for($t=0;$t<count($key_arrays);$t++)
//                if (!array_key_exists($key_arrays[$t],$_POST))
//                {
//                    $_POST[$key_arrays[$t]]=0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view,TBL_FAMILY);
        }
        if(isset($_GET["com_family"]) && isset($_GET["func"]))
        {
            if(isset($_GET["id"]))
            {
                if(strtolower($_GET["func"])=="select"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->getItemById($this->_view,TBL_FAMILY);
                }
                
                if(strtolower($_GET["func"])=="familydel"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->delete($this->_view,TBL_FAMILY);
                    //echo $_GET["id"];
                }
                
                if(strtolower($_GET["func"])=="print"){
                    echo "Print";
                }
            }

            if(strtolower($_GET["func"])=="familynew")
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
$familyproc = new familyProcess();
?>
