<?php
MImport("core.IDatabase");
MImport("core.IProcess");

require_once("view.inc.php");

class CalDatabase extends IDatabase
{
    public function Check_data($table,$date,$personid = 0)  //calendar
    {
        if($personid > 0)
        {
            if ($this->queryNumRows("*", $table, "edate='$date' and e_doctor=$personid") > 0)
            { 
                return true;
            }else 
                return false;
        }else{
            if ($this->queryNumRows("*", $table, "edate='$date'") > 0)
            { 
                return true;
            }else 
                return false;
        }
        
        
    }

    public function checkDatesSCH($presonid,$date,$day)
    {
        
        $date_array = $this->queryFetchArray("*", TBL_SURGSCH, "doctor=$presonid");
        //echo $date_array[0]["total"];
        if($date_array)
        {
            
            for($i=0;$i<count($date_array);$i++)
            {
                if(str_replace("/", "",$date) >= str_replace("/", "", $date_array[$i]["date"]) && str_replace("/", "",$date) <= str_replace("/", "", $date_array[$i]["todate"]) && $date_array[$i]["weekday"]==$day)
                       return true; 
            }
        }
        
    }
    
    public function getDatesSCHCount($presonid,$date,$day)
    {
        $greaterDate=$this->getGreaterDateSCH($presonid,$date,$day);
        $total = $this->queryUniqueValue("total", TBL_SURGSCH, "doctor=$presonid and todate='$greaterDate'");
        return $total;
        
    }
    private function getGreaterDateSCH($presonid,$date,$day)
    {
        $date_array = $this->queryFetchArray("*", TBL_SURGSCH, "doctor=$presonid");

        if($date_array)
        {
            
            for($i=0;$i<count($date_array);$i++)
            {
                if(str_replace("/", "",$date) >= str_replace("/", "", $date_array[$i]["date"]) && str_replace("/", "",$date) <= str_replace("/", "", $date_array[$i]["todate"]) && $date_array[$i]["weekday"]==$day)
                      return $date_array[$i]["todate"]; 
            }
        }
    
    }
    public function checkDatesSCHCount($presonid,$date)
    {
        return $this->queryNumRows("*", TBL_EVENTS, "e_doctor=$presonid and e_date='$date'");
    }
    
    public function checkEpresent($presonid,$date)
    {
        $date_array = $this->queryFetchArray("*", TBL_EPRESENT, "doctor=$presonid");
        if($date_array)
        {
            
            for($i=0;$i<count($date_array);$i++)
            {
                if($date==$date_array[$i]["date"])
                       return true; 
            }
        }
        
    }
    
}

?>
