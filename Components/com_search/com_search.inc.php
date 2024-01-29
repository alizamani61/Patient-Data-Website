<?php

MImport("core.IProcess");
MImport("core.IHtml");
require_once("database.inc.php");
require_once("view.inc.php");
require_once("config_" . LANG . ".inc.php");

//include _SITE_ROOT.COMPONENTS."com_login/com_login.inc.php";

class SearchProcess extends IProcess {

    private $_view;
    private $_db;

    public function __construct() {
        $this->_db = new SearchDatabase();
        $this->_view = new SearchView();
        //$this->startSession(); 
    }

    public function search_users() {

        $this->_view->setFormValue($_POST);
        $this->_db->search_users($this->_view);
    }

    public function getPe4Report($pid) {
        return $this->_db->getPe4Report($pid);
    }

    public function getDiesease4Report($pid)
    {
        return $this->_db->getDiesease4Report($pid);
        
    }
    
    public function getDrug4Report($pid)
    {
        return $this->_db->getDrug4Report($pid);
    }
    
    public function getDiet4Report($pid)
    {
        return $this->_db->getDiet4Report($pid);
        
    }
    public function getFamilyHistory4Report($pid)
    {
        return $this->_db->getFamilyHistory4Report($pid);
    }
    
    public function getFuDetailPostOp4Report($pid)
    {
        return $this->_db->getFuDetailPostOp4Report($pid);
    }
    
    public function getFuDetailComplications4Report($pid)
    {
        return $this->_db->getFuDetailComplications4Report($pid);
    }
    
    public function getFuDetailExercise4Report($pid)
    {
        return $this->_db->getFuDetailExercise4Report($pid);
    }
    
    public function getFuDetailMedication4Report($pid)
    {
        return $this->_db->getFuDetailMedication4Report($pid);
    }
    
    public function search_doctors() {
        $this->_view->setFormValue($_POST);
        $this->_db->search_doctors($this->_view);
    }

    public function search_identical() {
        global $loginprocess;
        $this->_view->setFormValue($_POST);
        $this->_db->search_identical($this->_view, $loginprocess->isAdministrator());
    }

    public function search() {
        global $loginprocess;
        $this->_view->setFormValue($_POST);
        $this->_db->search($this->_view, $loginprocess->isAdministrator());
    }

    private function session_Handler() {
        session_start();   //Tell PHP to start the session
    }

    function getPatientsReferral($date) {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getPatientsReferral($this->_view->checkValue($date));
        else
            return null;
    }

    function getPatientsByIds($patients) {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getPatientsByIds($this->_view->checkValue($patients));
        else
            return null;
    }

    function UpdateAjaxPatientsReferral($id, $date, $iscome) {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->UpdateAjaxPatientsReferral($this->_view->checkValue($id), $this->_view->checkValue($date), $this->_view->checkValue($iscome));
        else
            return null;
    }

    function getOperatedPatients() {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getOperatedPatients();
        else
            return null;
    }

    function getDiabetReport() {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getDiabetReport();
        else
            return null;
    }

    function getLossWeight() {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getLossWeightData();
        else
            return null;
    }

    function getMorbidPatients() {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getPmhxAlarm();
        else
            return null;
    }

    function getFields() {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getAllFields();
        else
            return null;
    }

    function getRedoPatients() {
        global $loginprocess;

        if ($loginprocess->isAdministrator())
            return $this->_db->getRedoAlarm();
        else
            return null;
    }

    private function startSession() {
        $this->session_Handler();
    }

    /**
     * display
     */
    public function displaySearch() {
        if (isset($_GET["sfunc"]) && $_GET["sfunc"] == "identical")
            $this->_view->identical_display();
        if (isset($_GET["sfunc"]) && $_GET["sfunc"] == "users")
            $this->_view->users_display();
    }

}

/* Initialize process */
$searchprocess = new SearchProcess();
?>