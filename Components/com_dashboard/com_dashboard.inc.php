<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class DashboardProcess extends IProcess {
    private $_view;
    
 
    public function __construct() {

        $this->_view = new DashboardView();
        //$this->startSession();
        
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
$dashboardprocess = new DashboardProcess();
?>
