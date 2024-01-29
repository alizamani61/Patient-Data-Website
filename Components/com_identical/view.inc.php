<?php
MImport("core.IView");
MImport("core.IProcess");

class identicalView extends IView{

    public function display($pmhxAlarm,$redoAlarm)
    {
    	//echo $pmhxAlarm."<br/>";
        $db=new identicalDatabase();
        $PatientsReferral=null;
        $form = $this->allValue();
        $values = $_SESSION;
        if(isset($_SESSION["identical_dataid"]))
        {
            $PatientsReferral = $db->getPatientsReferralByID($_SESSION["identical_dataid"]);
            foreach ($values as $key => $val)
            {
                //if(!is_int($key))
                    $form[$key]=$_SESSION[$key];
                
            }
        }
            
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
       
        
        require("htm/default.inc.php");
     }
    public function getToken()
    {
        return $_SESSION["token"];
    }

  }

?>
