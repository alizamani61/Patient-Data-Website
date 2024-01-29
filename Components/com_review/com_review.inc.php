<?php
MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_".LANG.".inc.php");

class reviewProcess extends IProcess {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_db = new reviewDatabase();
        $this->_view = new reviewView();
        //$this->startSession();
        if(isset($_POST["com_review_save"]) && $_SESSION["token"] == $_POST["token"])
        {
//            $key_arrays=array("dyspnearelatedtopillow","chestpaineoex","palpitation","paroxysmalnody","orthopnea","edema","edemageneralized","edemapedal","dyspnea","dyspneaonexertion","dyspneaevening","dyspneasleep","snoring","yawing","somnolence","frepuentnoslar","voicechange","voicechangenasal","voicechangehoarseness","chroniccough","chroniccoughexaatnights","chroniccoughwithsppro","harshaures","harshaureswithinexag","harshauresreliefbybr","chestconsen","chestconsenwithexaatevening","chestconsenreliefbybr","rechestpain","rechestpainpostprandial","rechestpainsuppos","rechestpainnocturnal","sourmaterialre","sourmaterialrepost","sourmaterialresuppos","sourmaterialrenoc","heartburn","heartburnpost","heartburnsuppos","heartburnnoc","posteqipain","rechestpainsoon","rechestpainhour","reofdiwithan","ruqdiscomfort","ruqdiscomfortretome","postrishpain","constipation","diarrhea","intbetdiacon","icterus","icterusshortep","icterusprolonged","icterusaccowith","nausea","vomiting","dyschezia","hematochezia","bloodystonst","lumpsenonper","lumpsenonperafter","lumpsenonperspont","difficulty","senseofreful","lunpormass","lunpormassing","lunpormassfemoral","lunpormassum","lunpormassan","lunpormassrewithslight","lunpormassrewithsupine","lunpormassexac","diswithact","diswithactinguinal","diswithactumbilical","diswithactanterior","diswithactscrotum","bonepaine","bonepainegene","lowbackpain","lowbackpaininsupine","lowbackpainonst","lowbackpainwithwa","lowbackpainrad","lowbackpainbuttock","lowbackpainthigh","lowbackpainfoot","hippain","hippainexacerbation","hippainwith","hippainrelieve","kneepain","kneepainexagg","kneepainrelieve","kneepaincrep","kneepainswelling","kneepainleg","firstmepain","firstmepainint","firstmepainnight","firstmepainwarmness","firstmepainredness","firstmepainswelling","anklepaine","anklepaineinter","anklepainenight","anklepainewarm","anklepainered","anklepaineswe","weakness","weaknessgene","weaknessoncombing","weaknessonstand","weaknesswriting","fatigue","fatigueallday","fatigueevening","fatigueafterph","blurredvision","blurredvisioninter","blurredvisionwithhe","diplopia","tunnelvision","scotoma","tinnitus","impairedhearing","parinmedian","parinlat","headache","headachemorning","headacheevening","headachesleep","headachepulsatile","headacheaura","headachelocatedin","headacheoccipital","headachehem","headachegenera","headachefacium","headachebitem","headacheaccom","headachephoto","headacherelievewith","insomnia","hypersomnia","earlystanding","psychomotor","diffiincon","dimiinall","depressedmood","feelingofguilt","sadness","irritability","indifference","anergy","panicattak","panicattakpounding","panicattaksweat","panicattaktrembl","panicattakshortness","panicattakglobus","panicattakchest","panicattakabdominal","panicattakdizzy","panicattakderea","panicattakdeper","panicattakdying","panicattakcrazy","panicattakpares","panicattakchills","panicattakhot","diffiinworry","diffiinworryrest","diffiinworrybecoming","diffiinworrysleep","diffiinworryinfalling","diffiinworryinstaying","diffiinworryunsatisfying","agoraphobia","poorselfesteem","otherphobia","obsession","obsessioncontamination","obsessionwashing","obsessionchecking","obsessioncounting","impairedattitude","impairedattitudeweight","impairedattitudeshape","isoyelldis","isoyelldisesp","dryskin","coarseskin","hirsutism","hirsutismface","hirsutismchest","hirsutismabdomen","hirsutismback","hirsutismextremity","hairloss","hairlossdiffuse","hairlossscalp","hairlosseyebrow","hairlossotherarea","darkofskinfolds","nailproblem","bruisability","probleeding","dewoundhealing","macandredness","acne","coldintolerance","alteredlibido","impotence","polyuria","polydipsia","menarche","menopause","amenorrhea","regularcycle","irregularcycle","irregularcycleoligom","irregularcyclepoly","irregularcyclehyper","irregularcyclehypom","irregularcyclemenor","spotting","spottingpre","spottingpost","spottinginter","dysmenorrheadys","dysmenorrheapri","dysmenorrheasec","dysmenorrheaprem","dysmenorrheaonset","dysmenorrheaat","dysmenorrhearelief","dyspareunia","difficonceiving","recmiscarriage","vagdischarge","vagdischargecolor","vagdischargewhit","vagdischargeyell","vagdischargeblo","vagdischargegreen","vagdischargemal","vagdischargeitching","brmase","brmasecyclic","mastalgia","mastalgiacyclic","galactorrhea","othernipple","incontinence","dyspnrelief");
//                 for($t=0;$t<count($key_arrays);$t++)
//                if (!array_key_exists($key_arrays[$t],$_POST))
//                {
//                    $_POST[$key_arrays[$t]]=0; 
//                }
            $this->_view->setFormValue($_POST);
            $this->_db->save($this->_view,TBL_REVIEW);
        }
        if(isset($_GET["com_review"]) && isset($_GET["func"]))
        {
            if(isset($_GET["id"]))
            {
                if(strtolower($_GET["func"])=="select"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->getItemById($this->_view,TBL_REVIEW);

                }
                
                if(strtolower($_GET["func"])=="reviewdel"){
                    $this->_view->setValue("ident_id", $_GET["id"]);
                    $this->_db->delete($this->_view,TBL_REVIEW);
                    //echo $_GET["id"];
                }
                
                if(strtolower($_GET["func"])=="print"){
                    echo "Print";
                }
            }

            if(strtolower($_GET["func"])=="reviewnew")
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
$reviewproc = new reviewProcess();
?>