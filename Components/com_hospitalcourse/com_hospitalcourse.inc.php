<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class hospitalcourseProcess extends IProcess {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_db = new hospitalcourseDatabase();
        $this->_view = new hospitalcourseView();
        //$this->startSession();
        if(isset($_POST["com_hospitalcourse_save"]) && $_SESSION["token"] == $_POST["token"])
        {
//            $key_arrays=array("preweightreduc","contolap","lealageblue","sleevegas","regaby","gaband","duswitch","verbandga","jejby","cholecyst","repairhernia","other","trocar","splenic","vascular","bowel","ischemia","misconstruction","meleakage","otherkind","earcompan","earcompbl","earcompst","earcompob","earcompin","earcompdv","earcompdvemb","earcompcard","earcompcardacs","earcompcardchf","earcompcardarr","earcompres","earcompother","nutedu");
//                 for($t=0;$t<count($key_arrays);$t++)
//                if (!array_key_exists($key_arrays[$t],$_POST))
//                {
//                    $_POST[$key_arrays[$t]]=0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view,TBL_HOSPITALCOURSE);
        }
        if(isset($_GET["com_hospitalcourse"]) && isset($_GET["func"]))
        {
            if(isset($_GET["id"]))
            {
                if(strtolower($_GET["func"])=="select"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->getItemById($this->_view,TBL_HOSPITALCOURSE);
                }
                
                if(strtolower($_GET["func"])=="hospitalcoursedel"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->delete($this->_view,TBL_HOSPITALCOURSE);
                    //echo $_GET["id"];
                }
                
                if(strtolower($_GET["func"])=="print"){
                    echo "Print";
                }
            }

            if(strtolower($_GET["func"])=="hospitalcoursenew")
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
$hospitalcourseproc = new hospitalcourseProcess();
?>
