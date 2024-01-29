<?php
MImport("core.IView");
MImport("core.IProcess");

class CalView extends IView{

    private $_db;
    
    public function display($jyear,$jmonth,$personid)
    { 
        $this->_db = new CalDatabase();
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        
        $dayclass="";
        $newFlag=false;
        $dataFlag=false;
        
        $todaygyear = date("Y");
        $todaygmonth = date("m");
        $todaygday = date("d");
        list( $todayjyear, $todayjmonth, $todayjday ) = IPROCESS::gregorian_to_jalali($todaygyear, $todaygmonth, $todaygday);
        list( $gyear, $gmonth, $gday ) = IPROCESS::jalali_to_gregorian($jyear, $jmonth, 1);
        $FirstDay = mktime(0,0,0,$gmonth,$gday,$gyear);
        $FirstDayArray = getdate($FirstDay);
        $DayOfWeek = $FirstDayArray['wday'];
        
        switch ($DayOfWeek)
        {
            case 0:
                $Difference = -1;
                break;
            case 1:
                $Difference = -2;
                break;
            case 2:
                $Difference = -3;
                break;
            case 3:
                $Difference = -4;
                break;
            case 4:
                $Difference = -5;
                break;
            case 5:
                $Difference = -6;
                break;
            case 6:
                $Difference = 0;
                break;
        }
        
        $prev_mount_url = "?com_calendar=1&m=".($jmonth-1);
        $next_mount_url = "?com_calendar=1&m=".($jmonth+1);
        
        $next_year_url = "?com_calendar=1&y=".($jyear+1);
        $prev_year_url = "?com_calendar=1&y=".($jyear-1);
        
        $days_text = array(SATURDAY,SUNDAY,MONDAY,TUESDAY,WEDENSDAY,THURSDAY,FRIDAY);
        $op_flag=true;
        require("htm/header.inc.php");
        
        for ($i=0;$i<6;$i++)
        {
            $Const = 7*$i+$Difference ;
            echo "<tr>";
            for($j=7;$j>=1;$j--)
            {
                $newFlag=false;
                $dataFlag=false;
                
                if (($Const + $j  == $todayjday) && ($jmonth == $todayjmonth) && ($jyear == $todayjyear))
                    $dayclass="class='today'";
                else 
                    $dayclass="class='day'";
                $Output = $Const + $j;
                $date=$jyear."/".str_pad($jmonth,2,"0",STR_PAD_LEFT)."/".str_pad($Output,2,"0",STR_PAD_LEFT);
                //$mywin1="?com_oproom=1&func=new&d=".$date;
                $mywin1="";
                $mywin=$mywin1;
                if (($Output>0) && ($Output<=IProcess::CalculateTotalDays($jmonth)))
                        $newFlag=true;
                if($this->_db->Check_data(TBL_EVENTS,$date,$personid))
                        $dataFlag=true;
                //if($personid>0)
                //    $event_show = "?search=1&sfunc=oproom&doctor=$personid&d=$date";
                //else
                //    $event_show = "?search=1&sfunc=oproom&d=$date";
                //$event_show = "?search=1&sfunc=oproom&d=$date";
                
                if($Output > 0 && $Output < 31)
                    $td_title = $days_text[$j-1]." ".IView::persianNumber($Output)." ".IPROCESS::ReturnMonthName($jmonth);
                else 
                    $td_title = "";
                
                require("htm/body.inc.php");

            }
            echo "</tr>";
            
        }
        require("htm/footer.inc.php");  
    }
    
    public function display_medical($jyear,$jmonth,$personid)
    { 
        
        $form = $this->allValue();
        $error = $this->allErrors();
        $_SESSION["token"]=md5(hash('sha256',uniqid(rand(), true))).md5(hash('sha256',uniqid(rand(), true)));
        $message = $this->message();
        
        $dayclass="";
        $newFlag=false;
        $dataFlag=false;
        
        $todaygyear = date("Y");
        $todaygmonth = date("m");
        $todaygday = date("d");
        list( $todayjyear, $todayjmonth, $todayjday ) = IPROCESS::gregorian_to_jalali($todaygyear, $todaygmonth, $todaygday);
        list( $gyear, $gmonth, $gday ) = IPROCESS::jalali_to_gregorian($jyear, $jmonth, 1);
        $FirstDay = mktime(0,0,0,$gmonth,$gday,$gyear);
        $FirstDayArray = getdate($FirstDay);
        $DayOfWeek = $FirstDayArray['wday'];
        
        switch ($DayOfWeek)
        {
            case 0:
                $Difference = -1;
                break;
            case 1:
                $Difference = -2;
                break;
            case 2:
                $Difference = -3;
                break;
            case 3:
                $Difference = -4;
                break;
            case 4:
                $Difference = -5;
                break;
            case 5:
                $Difference = -6;
                break;
            case 6:
                $Difference = 0;
                break;
        }
        
        $prev_mount_url = "?com_calendar=1&com=com_medical&m=".($jmonth-1)."&personid=$personid";
        $next_mount_url = "?com_calendar=1&com=com_medical&m=".($jmonth+1)."&personid=$personid";
        
        $days_text = array(SATURDAY,SUNDAY,MONDAY,TUESDAY,WEDENSDAY,THURSDAY,FRIDAY);

        require("htm/header.inc.php");
        
        for ($i=0;$i<6;$i++)
        {
            $Const = 7*$i+$Difference ;
            echo "<tr>";
            for($j=7;$j>=1;$j--)
            {
                $newFlag=false;
                $dataFlag=false;
                
                if (($Const + $j  == $todayjday) && ($jmonth == $todayjmonth) && ($jyear == $todayjyear))
                    $dayclass="class='today'";
                else 
                    $dayclass="class='day'";
                
               
                $Output = $Const + $j;
                $date=$jyear."/".str_pad($jmonth,2,"0",STR_PAD_LEFT)."/".str_pad($Output,2,"0",STR_PAD_LEFT);
                $mywin1="?com_medical=1&func=new&personid=$personid&d=$date";
                $mywin=$mywin1;
                
                if($this->_db->checkDatesSCH($personid,$date,$days_text[$j-1]))
                    $dayclass = "class='day_in'";
                
                
                
                
                if($this->_db->checkEpresent($personid,$date))
                        $dayclass="class='day'";
                
                if($this->_db->getDatesSCHCount($personid,$date,$days_text[$j-1])<$this->_db->checkDatesSCHCount($personid,$date))
                    $dayclass = "class='day_ex'";
                
                if (($Output>0) && ($Output<=IProcess::CalculateTotalDays($jmonth)))
                        $newFlag=true;
                if($this->_db->Check_data(TBL_EVENTS,$date,$personid))
                        $dataFlag=true;
                if($personid>0)
                    $event_show = "?search=1&sfunc=medical&doctor=$personid&d=$date";
                else
                    $event_show = "?search=1&sfunc=medical&d=$date";
                
                if($Output > 0 && $Output < 31)
                    $td_title = $days_text[$j-1]." ".IView::persianNumber($Output)." ".IPROCESS::ReturnMonthName($jmonth);
                else 
                    $td_title = "";
                
                require("htm/body.inc.php");

            }
            echo "</tr>";
        }
        require("htm/footer.inc.php");     
    }
    
    public function display_person_selector()
    {
        $this->_db = new CalDatabase();
        if(isset($_GET["personid"]))
            $_SESSION["personid"]=$_GET["personid"];
        if(!isset($_SESSION["personid"]))
            $_SESSION["personid"]=0;
        $physicians=  $this->_db->getPhysician(false);
        require("htm/person_selector.inc.php");
    }
    
    public function getToken()
    {
        return $_SESSION["token"];
    }
}

?>
