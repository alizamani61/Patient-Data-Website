<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class CalProcess extends IProcess {
    private $_view;
    
 
    public function __construct() {
        $this->_view = new CalView();
        //$this->startSession();
        
    }
    
    private function session_Handler()
    {
        session_start();   //Tell PHP to start the session
        
    }
    
    private function startSession(){
        $this->session_Handler();
    }
    
    public function init()
    {   //echo "fdgdf";
        list($gyear, $gmonth, $gday ) = preg_split ('/-/', date("Y-m-d"));
        list( $jyear, $jmonth, $jday ) = IProcess::gregorian_to_jalali($gyear, $gmonth, $gday);
        
        $_SESSION["y"]=isset($_GET["y"])?$_GET["y"]:(isset($_SESSION["y"])?$_SESSION["y"]:$jyear);
        $jmonth = isset ($_GET["m"])?$_GET["m"]:$jmonth;
        
        echo $this->display($_SESSION["y"],$jmonth,0);
            
    }

    /**
    * display
    */
    private function display_person_selector()
    {
        $this->_view->display_person_selector();
    }
    
    private function display($jyear,$jmonth,$docid)
    {
        $this->_view->display($jyear,$jmonth,$docid);
    }
    
    private function display_medical($jyear,$jmonth,$docid)
    {
        $this->_view->display_medical($jyear,$jmonth,$docid);
    }
    
    
}

/* Initialize process */
$calprocess = new CalProcess();
?>
