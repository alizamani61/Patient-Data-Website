<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class dietProcess extends IProcess {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_db = new dietDatabase();
        $this->_view = new dietView();
        //$this->startSession();
        if(isset($_POST["com_diet_save"]) && $_SESSION["token"] == $_POST["token"])
        {
//            $key_arrays=array("breakfast","lunch","dinner","othermm","snackbebrlu","snackbeludi","breakfastmore","lunchmore","dinnermore","binge","bingedieting","bingetv","bingestudy","bingehomework","bingenet","bingeplaying","bingeatjob","bingeemotion","bingesad","bingeanger","bingehappiness","bingenervous","bingelosscontrol","bingehunger","rapidlyeating","fulleating","embarrassmenteat","overeating","sweatlover","chocalatelover","icecreamlover","carbonatedbever","purge1","purgevomit","purgeabuse","purgediuretic","purgeoveruse","purgeant","purgeintense","weightdiet","alcoholcons","walking","walkinghome","walkingwork","walkinghabitual","sportactivity","pphysical");
//                 for($t=0;$t<count($key_arrays);$t++)
//                if (!array_key_exists($key_arrays[$t],$_POST))
//                {
//                    $_POST[$key_arrays[$t]]=0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view,TBL_DIET);
        }
        if(isset($_GET["com_diet"]) && isset($_GET["func"]))
        {
            if(isset($_GET["id"]))
            {
                if(strtolower($_GET["func"])=="select"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->getItemById($this->_view,TBL_DIET);
                }
                
                if(strtolower($_GET["func"])=="dietdel"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->delete($this->_view,TBL_DIET);
                    //echo $_GET["id"];
                }
                
                if(strtolower($_GET["func"])=="print"){
                    echo "Print";
                }
            }

            if(strtolower($_GET["func"])=="dietnew")
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
$dietproc = new dietProcess();
?>
