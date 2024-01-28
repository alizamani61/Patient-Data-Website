<?php
session_start();
require_once 'include/Constants.inc.php';
MImport("core.IProcess");
MImport("core.IDatabase");
MImport("core.IView");
MImport("core.IHtml");
include _SITE_ROOT . COMPONENTS . "com_login/com_login.inc.php";
include _SITE_ROOT . COMPONENTS . "com_search/com_search.inc.php";
include _SITE_ROOT . COMPONENTS . "com_identical/database.inc.php";

class Process extends IProcess {

    public function __construct() {

        global $loginprocess;
        if ($loginprocess->checkLogin()) {

            if (isset($_POST["com_search_identical"]))
                $this->search_identical();
            if (isset($_POST["SendSms"]))
                $this->SendSms();
            if (isset($_POST["com_AjaxSearch_identical"]))
                $this->AjaxSearch_identical();
            if (isset($_POST["dialog_physician"]))
                $this->dialog_physician();
            if (isset($_POST["dialog_surgery"]))
                $this->dialog_surgery();
            if (isset($_POST["com_search_users"]))
                $this->search_users();
            if (isset($_POST["getoperated"]))
                $this->getOperatedPatients();
            if (isset($_GET["getdiabet"]))
                $this->getDiabetReport();
            if (isset($_GET["getlossweight"]))
                $this->getLossWeight();
            if (isset($_POST["getmorbid"]))
                $this->getMorbidPatients();
            if (isset($_POST["getredo"]))
                $this->getRedoPatients();
            if (isset($_GET["getfields"]))
                $this->getFields();
            if (isset($_GET["getFinalReport"]))
                $this->getFinalReport($_GET["pid"]);
            if (isset($_POST["getpatientreferral"]))
                $this->getPatientsReferral();
            
            if (isset($_POST["updatereferral"]))
                $this->UpdatePatientsReferral();
        }else {
            echo "Not logged in";
        }
    }

    public function search_users() {
        global $loginprocess;
        if ($loginprocess->checkLogin()) {
            global $searchprocess;
            echo $searchprocess->search_users();
        }
    }

    public function SendSms() {
        global $loginprocess;
        if ($loginprocess->checkLogin()) {
            
            $array = $this->getPatientsMobiles($_POST["patients"]);
            //$message = "با سلام خواهشمند است جهت انجام آزمايشات دوره اي بعد از عمل در تاريخ ";
            $message = "با سلام خواهشمند است جهت ".$_POST["reason"];
            //$message.= " در تاريخ ";
            //$message.= $_POST["refdate"];
            $message.= " به كلينيك چاقي بيمارستان مادر و كودك غدير مراجعه كنيد. با تشكر ";
            $message= str_replace (' ', '%20',$message);
            
            
            foreach ($array as $value) {
                // Get cURL resource
                //echo strlen($value[3]);
                //echo substr($value[3], 0,1);
                $mobileNo="";
                if(strlen($value[3])==10){
                    $mobileNo = '0'.$value[3];
                    
                }
                if(strlen($value[3])==11) 
                    $mobileNo = $value[3];
                
                
                if($mobileNo!="")
                {
                    $url =  'http://tsms.ir/url/tsmshttp.php?from=3000151574&to='.$mobileNo.'&username=shirazmch&password=g57lne6m&message='.$message;
                    //$url =  'http://tsms.ir/url/tsmshttp.php?from=3000151574&to=09173021974&username=shirazmch&password=tsms23521&message='.$message;
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_URL => $url,
                        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13',
                        CURLOPT_HTTPHEADER => "Content-Type: application/x-www-form-urlencoded; charset=utf-8",
                    ));
                    $resp = curl_exec($curl);
                    //echo $resp;
                    curl_close($curl);
                }
            }
        }
    }

    public function getPatientsReferral() {
        global $searchprocess;

        $array = $searchprocess->getPatientsReferral($_POST["date"]);

        echo json_encode($array);
    }

    public function getLossWeight() {
        global $searchprocess;

        $array = $searchprocess->getLossWeight();

        $json = "[";
        foreach ($array as $value) {
            $json .="[ \"".$value[0]."\", ". $value[1] ."],";
        }

        $json1 = substr_replace($json, "", -1) . "]";
        //echo json_encode($json1);
        echo $json1;
    }
    
    public function getPatientsMobiles($patients) {
        global $searchprocess;
        
        $patientsStr = "";
        foreach ($patients as $value) {
            
            $patientsStr.= $value.",";
        }
        
        if (IProcess::endsWith($patientsStr, ','))
                $patientsStr = substr_replace($patientsStr, "", -1); //remove the last character
        
        $array = $searchprocess->getPatientsByIds($patientsStr);

        return $array;
    }

    public function UpdatePatientsReferral() {
        global $searchprocess;

        return $searchprocess->UpdateAjaxPatientsReferral($_POST["id"], $_POST["date"], $_POST["iscome"]);
    }
    
    public function getFinalReport($pid)
    {
        global $loginprocess;
        if ($loginprocess->checkLogin()) {
            global $searchprocess;
            
            $array = $searchprocess->getPe4Report($pid);
            echo "<!DOCTYPE html><html style='margin:0px auto'><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"><title> - بيمارستان فوق تخصصي مادر و كودك</title></head><body>";

            
            
            echo "<div style='width:90%;margin: 0 auto;'>";
            echo "<div style='float:right;width:100%;font-size:24px;fornt-wight:bold;text-align:center'>بيمارستان فوق تخصصي مادر و كودك غدير</div>";
            echo "<img src=\"images/obesity-logo-blue.png\" style='float:right;width:65px'/>";
            
            echo "<img src=\"images/motherlogo.jpg\" style='float:left;width:65px'/>";
            echo "<table border=1 style='width:100%;height:150px;' cellspacing='0'>";
            
            foreach ($array as $a) {
                echo "<tr>";
                foreach ($a as $key => $value) {
                    if(!is_int($key))
                    {
                        echo "<td>".$key." :".$value."</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            //$searchprocess->getDiesease4Report($pid);
            
            $array = $searchprocess->getDiesease4Report($pid);
            echo "<br/><br/>";
            echo "<table border=1 style='width:100%' cellspacing='0'>";
            echo "<tr><th>Diseases</th><th>Physical Activity</th><th>Family history</th></tr>";
            echo "<tr>";
            foreach ($array as $a) {
                echo "<td style='vertical-align: top;'>";
                foreach ($a as $key => $value) {
                    if(!is_int($key) && $key!="identical_dataid" && $value !="0" && trim($value)!="")
                    {
                        echo $key.": ".($value=="1"?"Yes":(($value=="0")?"No":$value))."<br/>";
                    }
                }
                echo "</td>";
            }
            
            
            //$searchprocess->getDiet4Report($pid);
            
            $array = $searchprocess->getDiet4Report($pid);
            
            foreach ($array as $a) {
                echo "<td style='vertical-align: top;'>";
                foreach ($a as $key => $value) {
                    if(!is_int($key) && $key!="identical_dataid")
                    {
                        echo $key.": ".($value=="1"?"Yes":(($value=="0")?"No":$value))."<br/>";
                    }
                }
                echo "</td>";
            }
            //$searchprocess->getFamilyHistory4Report($pid);
            $array = $searchprocess->getFamilyHistory4Report($pid);
            
            foreach ($array as $a) {
                echo "<td style='vertical-align: top;'>";
                foreach ($a as $key => $value) {
                    if(!is_int($key) && $key!="identical_dataid" && $value !="0" && trim($value) !="")
                    {
                        //echo ((strpos($key, 'who') !== false)?"Who":$key ).": ".($value=="1"?"Yes":(($value=="0")?"No":$value))."<br/>";
                        
                        if(strpos($key, 'who') != true)
                        {
                            echo $key.": ";
                        }  else {
                            echo $value."<br/>";
                        }
                    }
                }
                echo "</td>";
            }
            echo "</tr>";
            echo "</table>";
            //$searchprocess->getDrug4Report($pid);
            
            $array = $searchprocess->getDrug4Report($pid);
            echo "<br/><b>Drugs:</b><br/>";
            echo "<table border=1 style='width:100%' cellspacing='0'>";
            foreach ($array as $a) {
                echo "<td>";
                foreach ($a as $key => $value) {
                    if(!is_int($key) && $key!="identical_dataid" && $value !="0" && trim($value) !="")
                    {
                        echo $key.": ".($value=="1"?"Yes":(($value=="0")?"No":$value))."<br/>";
                    }
                }
                echo "</td>";
            }
            echo "</tr></table>";
            



            //$searchprocess->getFuDetailPostOp4Report($pid);
            
            $array = $searchprocess->getFuDetailPostOp4Report($pid);
            echo "<br/><b>PostOP:</b><br/>";
            echo "<table border=1 style='width:100%' cellspacing='0'>";
            
            $i = 0;
            echo "<tr>";
            while ($i < mysqli_num_fields($array)) {
                
                $meta = mysqli_fetch_field($array, $i);
                
                echo "<th>".$meta->name."</th>";
                $i++;
            }
            echo "</tr>";
            
            while ($row = mysqli_fetch_array($array)) {
                $postop_arr[] = $row;
            }
            foreach ($postop_arr as $a) {
                
                echo "<tr>";
                foreach ($a as $key => $value) {
                    if(!is_int($key))
                    {
                        if(is_numeric($value))
                            echo "<td>".round($value)."</td>";
                        else
                            echo "<td>".$value."</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            
            //$searchprocess->getFuDetailComplications4Report($pid);
            
            $array = $searchprocess->getFuDetailComplications4Report($pid);
            echo "<br/><b>Complications:</b><br/>";
            echo "<table border=1 style='width:100%' cellspacing='0'>";
            
            $i = 0;
            echo "<tr>";
            while ($i < mysqli_num_fields($array)) {
                
                $meta = mysqli_fetch_field($array, $i);
                
                echo "<th>".$meta->name."</th>";
                $i++;
            }
            echo "</tr>";
            
            while ($row = mysqli_fetch_array($array)) {
                $complications_arr[] = $row;
            }
            foreach ($complications_arr as $a) {
                
                echo "<tr>";
                foreach ($a as $key => $value) {
                    if(!is_int($key))
                    {
                        if(is_numeric($value))
                            echo "<td>".round($value)."</td>";
                        else
                            echo "<td>".$value."</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            
            //$searchprocess->getFuDetailExercise4Report($pid);
            
            $array = $searchprocess->getFuDetailExercise4Report($pid);
            echo "<br/><b>Exercise:</b><br/>";
            echo "<table border=1 style='width:100%' cellspacing='0'>";
            
            $i = 0;
            echo "<tr>";
            while ($i < mysqli_num_fields($array)) {
                
                $meta = mysqli_fetch_field($array, $i);
                
                echo "<th>".$meta->name."</th>";
                $i++;
            }
            echo "</tr>";
            
            while ($row = mysqli_fetch_array($array)) {
                $exercise_arr[] = $row;
            }
            foreach ($exercise_arr as $a) {
                
                echo "<tr>";
                foreach ($a as $key => $value) {
                    if(!is_int($key))
                    {
                        if(is_numeric($value))
                            echo "<td>".round($value)."</td>";
                        else
                            echo "<td>".$value."</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            
            //$searchprocess->getFuDetailMedication4Report($pid);
            $medication = $searchprocess->getFuDetailMedication4Report($pid);
            echo "<br/><b>Changes in Medication:</b><br/>";
            echo "<table border=1 style='width:100%' cellspacing='0'>";
            
            $i = 0;
            echo "<tr>";
            while ($i < mysqli_num_fields($medication)) {
                
                $meta = mysqli_fetch_field($medication, $i);
                
                echo "<th>".$meta->name."</th>";
                $i++;
            }
            echo "</tr>";
            
            while ($row = mysqli_fetch_array($medication)) {
                $medication_arr[] = $row;
            }
            foreach ($medication_arr as $a1) {
                
                echo "<tr>";
                foreach ($a1 as $key => $value) {
                    if(!is_int($key))
                    {
                        switch ($value)
                        {
                            case "0": 
                                echo "<td></td>";
                                break;
                            case "1": 
                                echo "<td>Decrease</td>";
                                break;
                            case "2": 
                                echo "<td>Increase</td>";
                                break;
                            case "3": 
                                echo "<td>Not Change</td>";
                                break;
                            case "4": 
                                echo "<td>Stopped</td>";
                                break;
                            
                            default :
                                echo "<td>".$value."</td>";
                                break;
                            
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            
            echo "</div>";
            echo "</body></html>";
        }
    }

    public function getFields() {
        global $searchprocess;

        $array = $searchprocess->getFields();

        $json = "[";
        foreach ($array as $value) {
            if (trim($value[2]) != "" && trim($value[1]) != "")
                $json .="{ \"key\": \"" . $value[2] . "\",  \"value\": \"" . $value[3] . "\"},";
        }

        echo substr_replace($json, "", -1) . "]";
    }

    public function getDiabetReport() {
        global $searchprocess;

        $array = $searchprocess->getDiabetReport();

        
        $json = "{
                \"labels\": [
                    \"Operated\",
                    \"Diabetic\",
                    \"Decrease\" 
                ],\"datasets\": [
                      {
                        \"data\": [".$array[0][0].",".$array[0][1].",".$array[0][2]."]
                        ,\"backgroundColor\": [
                            \"#1ABB9C\",
                            \"#E74C3C\",
                            \"#9B59B6\"
                        ],\"hoverBackgroundColor\": [
                            \"#1ABB9B\",
                            \"#E95E4F\",
                            \"#B370CF\"
                        ]
                      }
                    ]
                  }";
        

        echo $json;
    }
    
    public function getOperatedPatients() {
        global $searchprocess;

        $array = $searchprocess->getOperatedPatients();

        echo "[{ label: \"Operated\",  data: " . $array[0] . "},{ label: \"Total\",  data: " . $array[1] . "}]";
    }

    public function getMorbidPatients() {
        //echo "sss";
        global $searchprocess;

        $array = $searchprocess->getMorbidPatients();

        echo "[{ label: \"Co Morbid DX\",  data: " . $array[0][0] . "},{ label: \"Total\",  data: " . $array[0][1] . "}]";
    }

    public function getRedoPatients() {
        //echo "sss";
        global $searchprocess;

        $array = $searchprocess->getRedoPatients();

        echo "[{ label: \"Redo\",  data: " . $array[0][0] . "},{ label: \"Total\",  data: " . $array[0][1] . "}]";
    }

    public function AjaxSearch_identical() {
        global $loginprocess;
        if ($loginprocess->checkLogin()) {
            global $searchprocess;
            echo $searchprocess->search();
        }
    }

    public function search_identical() {
        global $loginprocess;
        if ($loginprocess->checkLogin()) {
            global $searchprocess;
            echo $searchprocess->search_identical();
        }
    }

}

/* Initialize process */
$process = new Process();
?>