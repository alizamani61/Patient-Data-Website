<?php
MImport("core.IView");
MImport("core.IProcess");

class DashboardView extends IView{

    private $_db;
    
    public function display()
    { 
        $this->_db = new DashboardDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        
        $TotalPatientCount = $this->_db->GetTotalPatientCount();
        $OperatedPatientCount = $this->_db->getOperatedPatients();
        $OperatedPatientDetailCount = $this->_db->getOperatedPatientDetail();
        $TotalMalePatients = $this->_db->GetTotalMaleCount();
        $TotalFemalePatients = $this->_db->GetTotalFemaleCount();
        $TotalMorbid= $this->_db->getPmhxAlarm();
        $TotalMortality= $this->_db->getMortalityCount();
        
        require("htm/default.inc.php");
  
    }
    
    
    
    public function getToken()
    {
        return $_SESSION["token"];
    }
}

?>
