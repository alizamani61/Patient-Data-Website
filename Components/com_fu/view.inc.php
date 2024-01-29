<?php
MImport("core.IView");
MImport("core.IProcess");

class fuView extends IView{

    public function display()
    {
        $db=new fuDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        
        
        if (isset($_GET["obesityclinicvisitation"])) {
            require("htm/obesityclinicvisitation.inc.php");
        } else if (isset($_GET["anthropometricmonitoring"])) {
            $dates = $db->GetAnthropometricMonitoringDates($this->checkValue($_SESSION["identical_dataid"]));
            require("htm/anthropometricmonitoring.inc.php");
        }else if (isset($_GET["laboratorymonitoring"])) {
            $dates = $db->GetLaboratoryMonitoringDates($this->checkValue($_SESSION["identical_dataid"]));
            require("htm/laboratorymonitoring.inc.php");
        }else if (isset($_GET["resultofpathology"])) {
            require("htm/resultofpathology.inc.php");
        }else if (isset($_GET["latemorbiditiesandmortality"])) {
            require("htm/latemorbiditiesandmortality.inc.php");
        }else if (isset($_GET["metabolicsx"])) {
            require("htm/metabolicsx.inc.php");
        }
     }
    public function getToken()
    {
        return $_SESSION["token"];
    }

  }

?>

