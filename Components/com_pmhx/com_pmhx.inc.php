<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class pmhxProcess extends IProcess {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_db = new pmhxDatabase();
        $this->_view = new pmhxView();
        //$this->startSession();
        if(isset($_POST["com_pmhx_save"]) && $_SESSION["token"] == $_POST["token"])
        {
//            $key_arrays=array("dm","hyperlipidemia","tyroiddy","htn","cad","ckd","chf","cva","dvt","dvtpulmonary","asthma","atopia","atopiarhinitis","atopiaconjunc","atopiaeczema","atopiaanaphylaxis","atopianasal","atopiadrug","atopiafood","atopiabite","atopiaenvironment","sleepapnea","fattyliver","pud","gerd","gibleeding","hepatitis","gallstone","choledolithiasis","gout","infertility","cushing","depression","anxietydis","perdisorders","psydisorders","chd","previoussur","previoussuradhesion","knownpre","knownprelbw","knownpreiugr","knownpregdminmother","knownprepostterm","knownprepreterm","knownprehyper","knownpreasphyxia","antipsychotics","glucoco","lithium","progestin","tca","estrogen","ssri","ocp","otherantidepressant","nsaid","anticonvulsant","warfarin","antidiabetic","lmwh","serotoninhistamine","otherrr","betablockers");
//            for($t=0;$t<count($key_arrays);$t++)
//                if (!array_key_exists($key_arrays[$t],$_POST))
//                {
//                    $_POST[$key_arrays[$t]]=0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view,TBL_PMHX);
        }
        if(isset($_GET["com_pmhx"]) && isset($_GET["func"]))
        {
            if(isset($_GET["id"]))
            {
                if(strtolower($_GET["func"])=="select"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->getItemById($this->_view,TBL_PMHX);
                }
                
                if(strtolower($_GET["func"])=="pmhxdel"){
                    $this->_view->setValue("id", $_GET["id"]);
                    $this->_db->delete($this->_view,TBL_PMHX);
                    //echo $_GET["id"];
                }
                
                if(strtolower($_GET["func"])=="print"){
                    echo "Print";
                }
            }

            if(strtolower($_GET["func"])=="pmhxnew")
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
$pmhxproc = new pmhxProcess();
?>
