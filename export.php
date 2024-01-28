<?php

require_once 'include/Constants.inc.php';
//error_reporting(E_NOTICE);
MImport("core.IProcess");

$xls_filename = 'export_' . date('Y-m-d') . '.csv'; // Define Excel (.xls) file name

include _SITE_ROOT . COMPONENTS . "com_login/com_login.inc.php";

$fields = "";
if (isset($_POST["fields"])) {
    if (is_array($_POST["fields"])) {
        foreach ($_POST["fields"] as $value) {
            //echo $value . ",<br/>";
            $pieces = explode("::", $value);
            $fields.=$pieces[0]." '".$pieces[1]."',";
        }
    } 
}
$fields = substr_replace($fields, "", -1);

if ($loginprocess->checkLogin() && $loginprocess->isAdministrator()) {
    if(isset($_GET["wreport"]) && $_GET["wreport"]==1)
    {
//        $sql = "SELECT `iden`.`age` AS `Age`,iden.`sex`,CONCAT(iden.`name`,' ', iden.`lname`) AS `Name`,`iden`.`date`
//	,pe.`weight` AS `pre_weight`,`pe`.`height` AS `pe_height`,`pe`.`bmi` AS `pre_bmi`,`pe`.`waistcir` AS `waist_cir`,pe.`hipcir` AS `pre_hipcir`,pe.`mac` AS `pre_mac`
//	,`hospitalcourse`.`opertype` AS `opertation_type`,`hospitalcourse`.`operdate` AS `opertation_date`
//    ,`fu_detail`.`fudate`,`fu_detail`.`postopwcp` AS `postop_waistcir`,`fu_detail`.`postopwt` AS `postop_weight`,`fu_detail`.`postopmac` AS `postop_mac`,`fu_detail`.`postophcp` AS `postop_hipcircumference`
//FROM `identical` iden
//LEFT OUTER JOIN `pe` ON `iden`.`identical_dataid` = `pe`.`ident_id`
//LEFT OUTER JOIN `hospitalcourse` ON `iden`.`identical_dataid` = `hospitalcourse`.`ident_id`
//LEFT OUTER JOIN `fu_detail` ON `iden`.`identical_dataid` = `fu_detail`.`ident_id`
//WHERE (1=1)
//AND IFNULL(`iden`.`identical_delflag`,0) =0
//AND IFNULL(`iden`.`isoperated`,0) =1
//AND IFNULL(`hospitalcourse`.`operdate`,0) >'1394/01/01'";
         
        $sql = "SELECT `iden`.`identical_dataid`,`hospitalcourse`.`hosfile`,CONCAT(iden.`name`,' ', iden.`lname`) AS `Name`,`iden`.`father`,`iden`.`age` AS `Age`,`iden`.`date`
      ,pe.`weight` AS `Weight`,pe.`height` AS `Height`,`pe`.`bmi` AS `Bmi`,`hospitalcourse`.`opertype`
      ,`hospitalcourse`.`operdate`
      ,A.`2nd Month` AS `Postop_Weight_2`
      ,A.`3rd Month` AS `Postop_Weight_3` ,A.`6th Month` AS `Postop_Weight_6`
      ,A.`9th Month` AS `Postop_Weight_9`,A.`12th Month` AS `Postop_Weight_12`
FROM `identical` iden
LEFT OUTER JOIN `pe` ON `iden`.`identical_dataid` = `pe`.`ident_id`
LEFT OUTER JOIN `diet` ON `iden`.`identical_dataid` = `diet`.`ident_id`
LEFT OUTER JOIN `hospitalcourse` ON `iden`.`identical_dataid` = `hospitalcourse`.`ident_id`
LEFT OUTER JOIN (
  SELECT `fu_detail`.`ident_id` AS `ident_id`,'PostOP WT' As Service
         ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`postop` END) AS `2nd Month`
  		 ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`postop` END) AS `3rd Month`
         ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`postop` END) AS `6th Month`
         ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`postop` END) AS `9th Month`
         ,SUM(CASE WHEN `fu_detail`.`fudate`='12th Month' THEN `fu_detail`.`postop` END) AS `12th Month`
         ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Year' THEN `fu_detail`.`postop` END) AS `1st Year`

  FROM `fu_detail`
  GROUP BY `fu_detail`.`ident_id`

) AS `A` ON `iden`.`identical_dataid` = A.`ident_id`
WHERE (1=1)
AND IFNULL(`iden`.`identical_delflag`,0) =0
AND IFNULL(`iden`.`isoperated`,0)=1
AND IFNULL(`iden`.`date`,0)>='1395/01/01'";
    }else{
        $sql = "SELECT ".$fields.
                "from `identical` identical
                left outer join `diet` diet  on identical.`identical_dataid`=diet.`ident_id`
                left outer join `family` family on identical.`identical_dataid`=family.`ident_id`
                left outer join `fu` fu on identical.`identical_dataid`=fu.`ident_id`
                left outer join `hospitalcourse` hospitalcourse on identical.`identical_dataid`=hospitalcourse.`ident_id`
                left outer join `pe` pe on identical.`identical_dataid`=pe.`ident_id`
                left outer join `pmhx` pmhx on identical.`identical_dataid`=pmhx.`ident_id`
                left outer join `preoperative` preoperative on identical.`identical_dataid`=preoperative.`ident_id`
                left outer join `review` review on identical.`identical_dataid`=review.`ident_id` 
                where identical.`identical_delflag`=0";
    }

    $Connect = @mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die("Failed to connect to MySQL:<br />" . mysql_error() . "<br />" . mysql_errno());
// Select database
    $Db = @mysql_select_db(DB_NAME, $Connect) or die("Failed to select database:<br />" . mysql_error() . "<br />" . mysql_errno());
// Execute query
    //mysql_query("set character_set_client='utf8'");
    //mysql_query("set character_set_results='utf8'");
    //mysql_query("set collation_connection='utf8_general_ci'");
    //mysql_set_charset('utf8',$Connect);

    $result = @mysql_query($sql, $Connect) or die("Failed to execute query:<br />" . mysql_error() . "<br />" . mysql_errno());

// Header info settings
    //header('Content-Type: application/vnd.ms-excel;charset=UTF-8');
    header('Content-Type: application/vnd.csv;charset=UTF-8');
    //header("Content-Type: application/xls;charset=Windows-1255");
    header("Content-Disposition: attachment; filename=$xls_filename");
    header("Pragma: no-cache");
    header("Expires: 0");

    
    /*     * *** Start of Formatting for Excel **** */
// Define separator (defines columns in excel &amp; tabs in word)
    $sep = "\t"; // tabbed character
// Start of printing column names as names of MySQL fields
    for ($i = 0; $i < mysql_num_fields($result); $i++) {
        echo mysql_field_name($result, $i) . "\t";
    }
    print("\n");
// End of printing column names
// Start while loop to get data
    while ($row = mysql_fetch_row($result)) {
        $schema_insert = "";
        for ($j = 0; $j < mysql_num_fields($result); $j++) {
            if (!isset($row[$j])) {
                $schema_insert .= "NULL" . $sep;
            } elseif ($row[$j] != "") {
                $schema_insert .= "$row[$j]" . $sep;
            } else {
                $schema_insert .= "" . $sep;
            }
        }
        $schema_insert = str_replace($sep . "$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        //print (mb_convert_encoding(trim($schema_insert), 'UTF-8', 'ANSI'));
        print (trim($schema_insert));
        //print iconv('UTF-8', 'ANSI', trim($schema_insert));
        print "\n";
    }
}
?>