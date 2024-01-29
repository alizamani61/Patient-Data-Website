<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class peProcess extends IProcess {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_db = new peDatabase();
        $this->_view = new peView();
        //$this->startSession();
        if(isset($_POST["com_pe_save"]) && $_SESSION["token"] == $_POST["token"])
        {
//            $key_arrays=array("resdistress","cyanosis","pallor","cripple","cripplecane","cripplewalker","cripplewheel","cripplebedridden","wellbeing","wellbeinghealth","wellbeingmildly","wellbeingill","pickappear","moonfaced","acromegalic","myxedematous","suptafat","retrocervical","paleconjunc","ictericsclera","exophtha","corneal","xanthel","xanthelmili","xanthelpatchy","xanthelupper","xanthellower","xanthelmed","lobear","lobeardar","lobearcrease","lobeartag","angular","glossitis","glossitisatr","glossitisfis","glossitisgeo","gloss","glosspro","glossen","glossonly","micrognathia","thyromegaly","shortneck","heartse","heartsenorm","heartsemuff","heartsemurmur","heartsess","heartsesss","heartsefric","lungau","lungaurales","lungauwheez","lungauegop","lungautactile","chestin","chestinasy","chestinsco","chestinkyp","brexam","brexammass","brexamtend","brexampeau","brexamskin","brexamaxi","scarof","caputme","palpmass","palpmassepig","palpmassumb","palpmassing","palpmassfem","palpmassscr","palpmassflank","palpmassredu","palpmasstender","tendernessten","tendernessmur","liverspan","splenomegaly","dullness","rectalexam","rectalexamhem","rectalexamfiss","exedema","deformity","varvein","jointabnorm","jointabnormsw","jointabnormcre","jointabnormred","jointabnormwarm","jointabnormpain","tophusfoot","nailchange","nailchangedisfi","striae","acne1","acneface","acneneck","acnechest","acneback","intertrigo","intertrigoaxi","intertrigoinf","intertrigoint","intertrigoabd","acannig","acannigaxillae","acannigneck","acannigsides","acanniginguinal","acanniginfr","acannigfingers","legulcer","legulcermedial","legulcerlateral","legulcerfinger","legulcertibial","legulcersole","skintags","xanthoma","xanthomaeru","xanthomaten","xanthomaext","yellowpands");
//                 for($t=0;$t<count($key_arrays);$t++)
//                if (!array_key_exists($key_arrays[$t],$_POST))
//                {
//                    $_POST[$key_arrays[$t]]=0;
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view,TBL_PE);
        }
        if(isset($_GET["com_pe"]) && isset($_GET["func"]))
        {
            if(isset($_GET["id"]))
            {
                if(strtolower($_GET["func"])=="select"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->getItemById($this->_view,TBL_PE);
                }
                
                if(strtolower($_GET["func"])=="pedel"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->delete($this->_view,TBL_PE);
                    //echo $_GET["id"];
                }
                
                if(strtolower($_GET["func"])=="print"){
                    echo "Print";
                }
            }

            if(strtolower($_GET["func"])=="penew")
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
$peproc = new peProcess();
?>
