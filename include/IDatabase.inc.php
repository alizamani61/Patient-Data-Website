<?php

abstract class IDatabase {
 
    private static $_connection = null;
    private $_dbcheck;
    private $_query;
    private $_defaultDebug = false;

    /** INTERNAL: The start time, in miliseconds.
     */
    private $_mtStart;

    /** INTERNAL: The number of executed queries.
     */
    private $_nbQueries;

    /** INTERNAL: The last result ressource of a query().
     */
    private $_lastResult;

    public function __construct() {
        if (!isset($this->_connection)) {
            $this->_connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysqli_error($this->_connection));
            if (!$this->_dbcheck)
                mysqli_select_db($this->_connection,DB_NAME);
        }
    }

    protected function createTable() {
        
    }

    protected function alterTable() {
        
    }

    public function GetTotalMaleCount() {
        return $this->queryNumRows("identical_dataid", TBL_IDENTICAL, "IFNULL(identical_delflag,0)=0 AND sex='M'");
    }
    
    public function GetTotalFemaleCount() {
        return $this->queryNumRows("identical_dataid", TBL_IDENTICAL, "IFNULL(identical_delflag,0)=0 AND sex='F'");
    }
    
    public function GetTotalPatientCount() {
        return $this->queryNumRows("identical_dataid", TBL_IDENTICAL, "IFNULL(identical_delflag,0)=0");
    }
    
    public function getOperatedPatients() {
        return $this->queryFetchRow("sum(case  when `identical`.`isoperated`=1 then 1 else 0 END) operated,count(distinct `identical`.`identical_dataid`) total", TBL_IDENTICAL, "IFNULL(`identical`.`identical_delflag`,0) =0");
    }
    
    public function  getMortalityCount(){
        return $this->setManualQuery("SELECT COUNT(`fu`.mortality) mortality_count
                                        FROM `identical` iden
                                        INNER JOIN `fu` ON `iden`.`identical_dataid` = `fu`.`ident_id`
                                        WHERE (1=1)
                                        AND IFNULL(`iden`.`identical_delflag`,0) =0 
                                        AND IFNULL(fu.mortality,0)=1");
    }

    public function  getOperatedPatientDetail(){ 
        return $this->setManualQuery("SELECT COUNT(CASE WHEN IFNULL(`iden`.`sex`,-1)='M' THEN 1 END) AS total_operated_male
                                            ,COUNT(CASE WHEN IFNULL(`iden`.`sex`,-1)='F' THEN 1 END) AS total_operated_female
                                                ,COUNT(`iden`.`identical_dataid`) AS total_operated
                                                ,COUNT(CASE WHEN IFNULL(hc.`sleevegas`,0)=1 THEN 1 END) AS sleeve_gas_count
                                            ,COUNT(CASE WHEN IFNULL(hc.`redo`,0)=1 THEN 1 END) AS redo_count
                                            ,COUNT(CASE WHEN IFNULL(hc.`redobypass`,0)=1 THEN 1 END) AS redobypass_count
                                            ,COUNT(CASE WHEN IFNULL(hc.`sasibypass`,0)=1 THEN 1 END) AS sasibypass_count
                                            ,COUNT(CASE WHEN IFNULL(hc.`sadibypass`,0)=1 THEN 1 END) AS sadibypass_count
                                            ,COUNT(CASE WHEN IFNULL(hc.`minibypass`,0)=1 THEN 1 END) AS minibypass_count
                                            ,COUNT(CASE WHEN IFNULL(hc.`regaby`,0)=1 THEN 1 END) AS gastric_bypass
                                            ,COUNT(CASE WHEN IFNULL(hc.`duswitch`,0)=1 THEN 1 END) AS duodenal_switch
                                                ,COUNT(CASE WHEN IFNULL(hc.`verbandga`,0)=1 THEN 1 END) AS vertical_band_gastroplasty
                                            ,COUNT(CASE WHEN IFNULL(hc.`jejby`,0)=1 THEN 1 END) AS jejunoileal_bypass
                                     FROM `identical` iden
                                     LEFT OUTER JOIN `hospitalcourse` hc ON hc.`ident_id`=`iden`.`identical_dataid`
                                     WHERE IFNULL(`iden`.`identical_delflag`,0)=0 AND IFNULL(`iden`.`isoperated`,0)=1");
    }

    public function getLossWeightData(){
        return $this->setManualQuery("SELECT A.p_date,(SUM(A.first_weight) - SUM(A.last_postop_weight))/COUNT(A.last_postop_weight) AS d_weight 
                                        FROM (
                                          SELECT `b12`.`fudate` p_date, `fud`.`Wet`,`fud`.`fuid`, fud.`ident_id`,`fud`.`fudate`,IFNULL(pe.`weight`,0) AS first_weight,IFNULL(`fud`.`postop`,0) last_postop_weight 
                                          FROM `fu_detailView01` fud
                                          INNER JOIN(
                                              SELECT `fudv`.`ident_id`,MAX(`fudv`.`Wet`) AS wet,`fudv`.`fudate` 
                                              FROM `fu_detailView01` `fudv`
                                              WHERE IFNULL(`fudv`.`postop`,0)>1 AND IFNULL(fudv.`pageType`,0)=1
                                              GROUP BY `fudv`.`ident_id`,`fudv`.`fudate` 
                                          )AS b12 ON fud.`ident_id`=`b12`.`ident_id` AND `fud`.`Wet`=`b12`.`wet` AND fud.`pageType`=1
                                          INNER JOIN `pe` ON `fud`.`ident_id` = pe.`ident_id`
                                          INNER JOIN `identical` ON fud.`ident_id` = `identical`.`identical_dataid`
                                          WHERE IFNULL(fud.`pageType`,0)=1 AND IFNULL(`pe`.`weight`,0)<>0 AND IFNULL(`fud`.`postop`,0)<>0 AND IFNULL(`identical`.`isoperated`,0)=1 AND IFNULL(`identical`.`identical_delflag`,0)=0

                                        ) A
                                        WHERE (1=1) AND A.`Wet` IN(6,9,15,27,28,30,31,32,33)
                                        GROUP BY A.p_date
                                        ORDER BY A.`Wet` ASC");
        
    }

    public function getPatientsReferral($date) {

        return $this->setManualQuery("select  
                                        iden.`identical_dataid`
                                        ,iden.`lname`
                                        ,iden.`name`
                                        ,iden.`mobileno`
                                        ,iden.`resphysician`
                                        ,ev.`iscome`
                                        ,ev.`edate`
                                    from `identical` iden
                                    inner join ".TBL_EVENTS." ev on iden.`identical_dataid`=ev.`ident_id` WHERE (1=1) AND IFNULL(`iden`.`identical_delflag`,0) =0 ".(($date!="")?" AND ev.`edate`='$date'":"")
                                    );
    }

    public function getPatientsByIds($patients) {

        return $this->setManualQuery("select DISTINCT
                                        iden.`identical_dataid`
                                        ,iden.`lname`
                                        ,iden.`name`
                                        ,iden.`mobileno`
                                        ,iden.`resphysician`
                                    from `identical` iden
                                    where iden.`identical_dataid` in (".$patients.")"
                                    );
    }
    
    public function getPatientsReferralByID($ident_id,$date="") {

        return $this->setManualQuery("select edate,iscome from ".TBL_EVENTS." ev where ev.`ident_id`=$ident_id ".(($date!="")?" and edate='$date'":"") );
    }
    
    public function ISExistPatientsReferral($ident_id,$date="") {
        return $this->queryCustomNumRows("SELECT count(*) from ".TBL_EVENTS." ev where ev.`ident_id`=$ident_id ".(($date!="")?" and edate='$date'":"") );
    }
    
    public function UpdatePatientsReferral($ident_id,$date,$iscome=0)
    {
        if($this->ISExistPatientsReferral($ident_id,$date) && $iscome==1)
        {
            return $this->setUpdate(TBL_EVENTS,"iscome=1","ident_id=$ident_id and edate='$date'");
        }else
        {
            return $this->setInsert(TBL_EVENTS,"ident_id,edate,iscome","$ident_id,'$date',$iscome");
        }
        
    }
    
    public function UpdateAjaxPatientsReferral($ident_id,$date,$iscome)
    {
        echo $this->setUpdate(TBL_EVENTS,"iscome=$iscome","ident_id=$ident_id and edate='$date'");
    }
    
    public function getPmhxAlarm($identical_dataid=null) {

        $query = "";

        if ($identical_dataid != null) {
            $query = "SELECT COUNT(*)
		from `identical` identical
		inner join `pmhx` pmhx on identical.`identical_dataid`=pmhx.`ident_id`
		where `identical`.`identical_dataid`=" . $identical_dataid;
        } else {
            $query = "SELECT count(identical.`identical_dataid`) morbid,(select count(*) from `identical` WHERE `identical`.identical_delflag=0) total 
		from `identical` identical
		inner join `pmhx` pmhx on identical.`identical_dataid`=pmhx.`ident_id`
		where (1=1) and `identical`.identical_delflag=0 ";
        }
        $query.=" and ( pmhx.`dm` =1 
		   or pmhx.`hyperlipidemia`=1
		   or pmhx.`tyroiddy` =1
		   or pmhx.`htn` =1
		   or pmhx.`cad` =1
		   or pmhx.`ckd` =1   
		   or pmhx.`chf` =1     
		   or pmhx.`cva` =1   
		   or pmhx.`dvt` =1    
		   or pmhx.`asthma` =1   
		   or pmhx.`atopia` =1   
		   or pmhx.`sleepapnea` =1   
		   or pmhx.`fattyliver` =1   
		   or pmhx.`pud` =1   
		   or pmhx.`gerd` =1   
		   or pmhx.`gibleeding` =1  
		   or pmhx.`hepatitis` =1 
		   or pmhx.`gallstone` =1 
		   or pmhx.`choledolithiasis` =1 
		   or pmhx.`gout` =1 
		   or pmhx.`infertility` =1 
		   or pmhx.`cushing` =1 
		   or pmhx.`depression` =1 
		   or pmhx.`anxietydis` =1 
		   or pmhx.`perdisorders` =1 
		   or pmhx.`psydisorders` =1 
		   or pmhx.`chd` =1 
		   or pmhx.`previoussur` =1 
		   or pmhx.`previoussuradhesion` =1 ) ";

        //echo $this->queryCustomNumRows($query)."<br/>";
        if ($identical_dataid != null)
            return $this->queryCustomNumRows($query);
        else
            return $this->manual_query($query);
    }
    
    public function getDiabetReport()
    {
        $query="SELECT COUNT(`iden`.`identical_dataid`) OperatedCount
                       ,COUNT(CASE WHEN IFNULL(`pmhx`.`dm`,0) =1 THEN 1 END) dmCount
                       ,(SELECT COUNT( DISTINCT `fu_detail`.`ident_id`) 
                         FROM `fu_detail` 
                         INNER JOIN `identical` ON `fu_detail`.`ident_id`=`identical`.`identical_dataid`
                         WHERE IFNULL(`fu_detail`.`drugcdiabetepills`,0)=1 
                          AND IFNULL(`identical`.`identical_delflag`,0) =0
                          AND IFNULL(`identical`.`isoperated`,0)=1 
                         LIMIT 1
                        ) diabetPillsCount
                FROM `identical` iden
                #INNER JOIN `fu` ON `iden`.`identical_dataid` = `fu`.`ident_id`
                #INNER JOIN `fu_detail` ON `iden`.`identical_dataid` = `fu_detail`.`ident_id`
                LEFT OUTER JOIN `pmhx` ON `iden`.`identical_dataid` = `pmhx`.`ident_id`
                WHERE (1=1)
                AND IFNULL(`iden`.`identical_delflag`,0) =0
                #AND `iden`.`identical_dataid`=791
                AND IFNULL(`iden`.`isoperated`,0)=1";
        
        return $this->manual_query($query); 
    }
    
    public function getPe4Report($pid)
    {
        $query="SELECT pe.`weight` AS `Weight`,`pe`.`bmi` AS `Bmi`,`iden`.`age` AS `Age`,CONCAT(iden.`name`, ' ', iden.`lname`) AS `Name`
                FROM `identical` iden
                LEFT OUTER JOIN `pe` ON `iden`.`identical_dataid` = `pe`.`ident_id`
                WHERE (1=1)
                AND IFNULL(`iden`.`identical_delflag`,0) =0
                AND `iden`.`identical_dataid`=$pid";
        
        return $this->manual_query($query); 
    }
    
    public function getDiesease4Report($pid)
    {
        $query="SELECT `iden`.`identical_dataid`,pmhx.`dm`,pmhx.`hyperlipidemia`,pmhx.`thyroiddrugs` AS `Thyroid dysfunction`,`pmhx`.`htn`,`pmhx`.`cad`
		,`pmhx`.`ckd`,`pmhx`.`chf`,`pmhx`.`cva`,`pmhx`.`dvt`,`pmhx`.`asthma`,`pmhx`.`atopia`,`pmhx`.`sleepapnea` AS `Sleep Apnea`
        ,`pmhx`.`fattyliver` AS `Fatty Liver`,`pmhx`.`pud`,`pmhx`.`gerd` AS `Gerd`,`pmhx`.`gibleeding` AS `GI Bleeding`,`pmhx`.`hepatitis` AS `Hepatitis`
		,`pmhx`.`gallstone` AS `Gallstone`,`pmhx`.`choledolithiasis` AS `Choledolithiasis`,`pmhx`.`gout` AS `Gout`,`pmhx`.`infertility` AS `Infertility`
        ,`pmhx`.`cushing` AS `Cushing`,`pmhx`.`depression` AS `Depression`,`pmhx`.`anxietydis` AS `Anxiety disorders`,`pmhx`.`perdisorders` AS `Personality disorders`
        ,`pmhx`.`psydisorders` AS `Psychotic disorders`,`pmhx`.`chd` AS `CHD`,`pmhx`.`previoussur` AS `Previous surgery`
        FROM `identical` iden
        LEFT OUTER JOIN `pmhx` ON `iden`.`identical_dataid` = `pmhx`.`ident_id`
        WHERE (1=1)
        AND IFNULL(`iden`.`identical_delflag`,0) =0
        AND `iden`.`identical_dataid`=$pid";
        
        return $this->manual_query($query); 
    }
    
    public function getDrug4Report($pid)
    {
        $query="SELECT `iden`.`identical_dataid`  ,`pmhx`.`forobtreatment` AS `For obesity treatment`,`pmhx`.`estroides` AS `Estroides`,`pmhx`.`psychologicdrugs` AS `Psychologic drugs`
                ,`pmhx`.`treatunderlyingdis` AS `For treatment underlying diseases`,`pmhx`.`slimming` AS `Slimming`,`pmhx`.`antipsychotics` AS `Antipsychotics`,`pmhx`.`glucoco` AS `Glucocorticoids`
                ,`pmhx`.`lithium` AS `Lithium`,`pmhx`.`progestin` AS `Progestin`,`pmhx`.`tca` AS `TCA`,`pmhx`.`estrogen` AS `Estrogen`,`pmhx`.`ssri` AS `SSRI`
                ,`pmhx`.`bloodpressdrugs` AS `Blood Pressure Drugs`,`pmhx`.`thyroiddrugs` AS `Thyroid Drugs`,`pmhx`.`insulin` AS `Insulin`,`pmhx`.`hlpdrugs` AS `HLP Drugs`,`pmhx`.`diabetpills` AS `Diabet Pills`
                ,`pmhx`.`lcratinine` AS `L-Carnitine`,`pmhx`.`antipsychoticinsulin` AS `Anti-Psychotic Insulin`,`pmhx`.`metformin` AS `Metformin`,`pmhx`.`losartan` AS `Losartan`
                ,`pmhx`.`levothyroxine` AS `Levothyroxine`,`pmhx`.`venostate` AS `Venostate`,`pmhx`.`sleamlast` AS `Sleam Last`  ,`pmhx`.`ocp` AS `OCP`,`pmhx`.`otherantidepressant` AS `Other antidepressant`
                ,`pmhx`.`nsaid` AS `NSAID`,`pmhx`.`anticonvulsant` AS `Anticonvulsant`,`pmhx`.`warfarin` AS `Warfarin`,`pmhx`.`antidiabetic` AS `Antidiabetic`,`pmhx`.`lmwh` AS `LMWH`
                ,`pmhx`.`serotoninhistamine` AS `Serotonin and histamine antagonist`,`pmhx`.`betablockers` AS `Beta blockers`
              FROM `identical` iden
              LEFT OUTER JOIN `pmhx` ON `iden`.`identical_dataid` = `pmhx`.`ident_id`
              WHERE (1=1)
              AND IFNULL(`iden`.`identical_delflag`,0) =0
              AND `iden`.`identical_dataid`=$pid";
        
        return $this->manual_query($query); 
    }

    public function getDiet4Report($pid)
    {
        $query="SELECT `iden`.`identical_dataid`,`diet`.`exercisesedentary` AS `Sendentary(Daily Activity Only)`,`diet`.exercisehypoactive AS `Hypo Active(Exercise or Walking occationally)`
		,`diet`.exerciseactive AS `Active(Regular Exercise at least 3 Times a Week)`,`diet`.`exercisehyperactive` AS `Hyper Active(Professional Exercise)`
                ,`diet`.`walking`,`diet`.`sportactivity` AS `Sport Activity`,`diet`.`pphysical` AS `Past physical activity`,`diet`.`palse` AS `PAL`
                FROM `identical` iden
                LEFT OUTER JOIN `diet` ON `iden`.`identical_dataid` = `diet`.`ident_id`
                WHERE (1=1)
                AND IFNULL(`iden`.`identical_delflag`,0) =0
                AND `iden`.`identical_dataid`=$pid";
        
        return $this->manual_query($query); 
    }

    public function getFamilyHistory4Report($pid)
    {
        $query="SELECT `iden`.`identical_dataid`,`family`.`obesity`,`family`.`obesitywho` AS `obesity who`,`family`.`prostatecancer` AS `Prostate Cancer`,`family`.`prostatecancerwho`
		,`family`.`dm`,`family`.`dmwho`,`family`.`othermalignancy` AS `Other Malignancy`,`family`.`othermalignancywho`,`family`.`htn` AS `HTN`,`family`.`htnwho` AS `htnwho`
		,`family`.`rentalstone` AS `Rental Stone`,`family`.`rentalstonewho`,`family`.`hypothyroidism` AS `Hypothyroidism`,`family`.`hypothyroidismwho`,`family`.`gallstone` AS `GallStone`
                ,`family`.`gallstonewho`,`family`.`breastcancer` AS `Breast Cancer`,`family`.`breastcancerwho`,`family`.`gout` AS `Gout`,`family`.`goutwho`,`family`.`coloncancer` AS `Colon Cancer`
                ,`family`.`multiplegestation` AS `Multiple Gestation`,`family`.`multiplegestationwho`,`family`.`endometrialcancer` AS `Endometrial Cancer`,`family`.`endometrialcancerwho`
		,`family`.`ovariancancer` AS `Ovarian Cancer`,`family`.`ovariancancerwho`,`family`.`hyperlipidemia` AS `Hyperlipidemia`,`family`.`hyperlipidemiawho`
                ,`family`.`mi` AS `MI`,`family`.`miwho`
                FROM `identical` iden
                LEFT OUTER JOIN `family` ON `iden`.`identical_dataid` = `family`.`ident_id`
                WHERE (1=1)
                AND IFNULL(`iden`.`identical_delflag`,0) =0
                AND `iden`.`identical_dataid`=$pid";
        
        return $this->manual_query($query); 
    }
    
    public function getFuDetailPostOp4Report($pid)
    {
        $query="SELECT 'WT' As PostOP
                ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`postopwt` END) AS `1st Week`
                ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`postopwt` END) AS `2nd Week`
                ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`postopwt` END) AS `3rd Week`
                ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`postopwt` END) AS `1st Month`
                ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`postopwt` END) AS `2nd Month`
                ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`postopwt` END) AS `3rd Month`
                ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`postopwt` END) AS `6th Month`
                ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`postopwt` END) AS `9th Month`
                 FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
        UNION ALL
        SELECT 'PostOP WT' As PostOP
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`postop` END) AS `1st Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`postop` END) AS `2nd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`postop` END) AS `3rd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`postop` END) AS `1st Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`postop` END) AS `2nd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`postop` END) AS `3rd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`postop` END) AS `6th Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`postop` END) AS `9th Month`
        FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
        UNION ALL
        SELECT 'Reduced WT' As PostOP
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`reduced` END) AS `1st Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`reduced` END) AS `2nd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`reduced` END) AS `3rd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`reduced` END) AS `1st Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`reduced` END) AS `2nd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`reduced` END) AS `3rd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`reduced` END) AS `6th Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`reduced` END) AS `9th Month`
        FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
        UNION ALL
        SELECT 'BMI' As PostOP
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`postopbmi` END) AS `1st Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`postopbmi` END) AS `2nd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`postopbmi` END) AS `3rd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`postopbmi` END) AS `1st Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`postopbmi` END) AS `2nd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`postopbmi` END) AS `3rd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`postopbmi` END) AS `6th Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`postopbmi` END) AS `9th Month`
        FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
        UNION ALL
        SELECT 'WCP' As PostOP
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`postopwcp` END) AS `1st Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`postopwcp` END) AS `2nd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`postopwcp` END) AS `3rd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`postopwcp` END) AS `1st Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`postopwcp` END) AS `2nd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`postopwcp` END) AS `3rd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`postopwcp` END) AS `6th Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`postopwcp` END) AS `9th Month`
        FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
        UNION ALL
        SELECT 'HCP' As PostOP
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`postophcp` END) AS `1st Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`postophcp` END) AS `2nd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`postophcp` END) AS `3rd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`postophcp` END) AS `1st Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`postophcp` END) AS `2nd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`postophcp` END) AS `3rd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`postophcp` END) AS `6th Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`postophcp` END) AS `9th Month`
        FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
        UNION ALL
        SELECT 'MAC' As PostOP
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`postopmac` END) AS `1st Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`postopmac` END) AS `2nd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`postopmac` END) AS `3rd Week`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`postopmac` END) AS `1st Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`postopmac` END) AS `2nd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`postopmac` END) AS `3rd Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`postopmac` END) AS `6th Month`
               ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`postopmac` END) AS `9th Month`
        FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid";
        
        return $this->manual_query_sql_result($query); 
    }
    
    public function getFuDetailComplications4Report($pid)
    {
        $query="SELECT 'Bing Eating' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compbingeating` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compbingeating` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compbingeating` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compbingeating` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compbingeating` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compbingeating` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compbingeating` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compbingeating` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Weakness' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compweakness` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compweakness` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compweakness` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compweakness` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compweakness` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compweakness` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compweakness` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compweakness` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Constipation' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compconstipation` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compconstipation` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compconstipation` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compconstipation` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compconstipation` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compconstipation` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compconstipation` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compconstipation` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Vomiting' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compvomiting` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compvomiting` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compvomiting` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compvomiting` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compvomiting` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compvomiting` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compvomiting` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compvomiting` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Pain' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`comppain` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`comppain` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`comppain` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`comppain` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`comppain` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`comppain` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`comppain` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`comppain` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Leak' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compleak` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compleak` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compleak` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compleak` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compleak` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compleak` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compleak` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compleak` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Bleeding' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compbleeding` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compbleeding` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compbleeding` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compbleeding` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compbleeding` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compbleeding` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compbleeding` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compbleeding` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Gerd' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compgerd` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compgerd` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compgerd` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compgerd` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compgerd` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compgerd` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compgerd` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compgerd` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'DVT' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compdvt` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compdvt` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compdvt` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compdvt` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compdvt` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compdvt` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compdvt` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compdvt` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'HAIR LOSS' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`comphairloss` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`comphairloss` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`comphairloss` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`comphairloss` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`comphairloss` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`comphairloss` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`comphairloss` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`comphairloss` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'GALL STONE' As Complications
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`compgallstone` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`compgallstone` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`compgallstone` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`compgallstone` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`compgallstone` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`compgallstone` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`compgallstone` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`compgallstone` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid";
        
        return $this->manual_query_sql_result($query); 
    }
    
    public function getFuDetailExercise4Report($pid)
    {
        $query="SELECT 'Sedentary' As Exercise
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`exercisesedentary` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`exercisesedentary` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`exercisesedentary` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`exercisesedentary` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`exercisesedentary` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`exercisesedentary` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`exercisesedentary` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`exercisesedentary` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Hypo Active' As Exercise
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`exercisehypoactive` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`exercisehypoactive` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`exercisehypoactive` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`exercisehypoactive` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`exercisehypoactive` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`exercisehypoactive` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`exercisehypoactive` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`exercisehypoactive` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Active' As Exercise
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`exerciseactive` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`exerciseactive` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`exerciseactive` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`exerciseactive` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`exerciseactive` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`exerciseactive` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`exerciseactive` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`exerciseactive` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
             UNION ALL
             SELECT 'Hyper Active' As Exercise
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`exercisehyperactive` END) AS `1st Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`exercisehyperactive` END) AS `2nd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`exercisehyperactive` END) AS `3rd Week`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`exercisehyperactive` END) AS `1st Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`exercisehyperactive` END) AS `2nd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`exercisehyperactive` END) AS `3rd Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`exercisehyperactive` END) AS `6th Month`
                    ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`exercisehyperactive` END) AS `9th Month`
             FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid";
        
        return $this->manual_query_sql_result($query); 
    }
    
    public function getFuDetailMedication4Report($pid)
    {
        $query="SELECT 'Insulin' As `Changes in Medication`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`drugcinsulin` END) AS `1st Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`drugcinsulin` END) AS `2nd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`drugcinsulin` END) AS `3rd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`drugcinsulin` END) AS `1st Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`drugcinsulin` END) AS `2nd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`drugcinsulin` END) AS `3rd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`drugcinsulin` END) AS `6th Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`drugcinsulin` END) AS `9th Month`
                 FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
                 UNION ALL
                 SELECT 'Antidiabetic' As `Changes in Medication`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`antidiabetic` END) AS `1st Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`antidiabetic` END) AS `2nd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`antidiabetic` END) AS `3rd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`antidiabetic` END) AS `1st Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`antidiabetic` END) AS `2nd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`antidiabetic` END) AS `3rd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`antidiabetic` END) AS `6th Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`antidiabetic` END) AS `9th Month`
                 FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
                 UNION ALL
                 SELECT 'Blood Pressure Drugs' As `Changes in Medication`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`drugcbloodpressure` END) AS `1st Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`drugcbloodpressure` END) AS `2nd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`drugcbloodpressure` END) AS `3rd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`drugcbloodpressure` END) AS `1st Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`drugcbloodpressure` END) AS `2nd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`drugcbloodpressure` END) AS `3rd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`drugcbloodpressure` END) AS `6th Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`drugcbloodpressure` END) AS `9th Month`
                 FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
                 UNION ALL
                 SELECT 'Thyroid Drugs' As `Changes in Medication`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `1st Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `2nd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `3rd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `1st Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `2nd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `3rd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `6th Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`drugcthyroiddrugs` END) AS `9th Month`
                 FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
                 UNION ALL
                 SELECT 'HLP Drugs' As `Changes in Medication`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`hlpdrugs` END) AS `1st Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`hlpdrugs` END) AS `2nd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`hlpdrugs` END) AS `3rd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`hlpdrugs` END) AS `1st Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`hlpdrugs` END) AS `2nd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`hlpdrugs` END) AS `3rd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`hlpdrugs` END) AS `6th Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`hlpdrugs` END) AS `9th Month`
                 FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid
                 UNION ALL
                 SELECT 'anti-psychotic' As `Changes in Medication`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Week' THEN `fu_detail`.`antipsychotic` END) AS `1st Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Week' THEN `fu_detail`.`antipsychotic` END) AS `2nd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Week' THEN `fu_detail`.`antipsychotic` END) AS `3rd Week`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='1st Month' THEN `fu_detail`.`antipsychotic` END) AS `1st Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='2nd Month' THEN `fu_detail`.`antipsychotic` END) AS `2nd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='3rd Month' THEN `fu_detail`.`antipsychotic` END) AS `3rd Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='6th Month' THEN `fu_detail`.`antipsychotic` END) AS `6th Month`
                        ,SUM(CASE WHEN `fu_detail`.`fudate`='9th Month' THEN `fu_detail`.`antipsychotic` END) AS `9th Month`
                 FROM `fu_detail` WHERE (1=1) AND `fu_detail`.`ident_id`=$pid";
        
        return $this->manual_query_sql_result($query); 
    }
    
    public function getRedoAlarm($identical_dataid=null) {

        $query = "";

        if ($identical_dataid != null) {
            $query = "SELECT COUNT(*)
		from `identical` identical
		inner join `hospitalcourse` hospitalcourse on identical.`identical_dataid`=hospitalcourse.`ident_id`
		where `identical`.`identical_dataid`=" . $identical_dataid;
        } else {
            $query = "SELECT count(*) redo,(select count(*) from `identical`) total 
		from `identical` identical
		inner join `hospitalcourse` hospitalcourse on identical.`identical_dataid`=hospitalcourse.`ident_id`
		where (1=1) IFNULL(`identical`.`identical_delflag`,0)=0";
        }
        $query.=" and hospitalcourse.`redo` =1 ";

        //echo $this->queryCustomNumRows($query)."<br/>";
        if ($identical_dataid != null)
            return $this->queryCustomNumRows($query);
        else
            return $this->manual_query($query);
    }

    protected function getQueryCount() {
        return $this->_nbQueries;
    }

    private function is_Query() {
        if (trim($this->_query) != "")
            return true;
        else
            return false;
    }

    protected function setInsert($table, $fields=null, $values=null) {
        $this->_query = " INSERT INTO $table (";

        if ($fields != null) {
            $fields = trim($fields);
            if (IProcess::endsWith($fields, ','))
                $fields = substr_replace($fields, "", -1); //remove the last character
            $this->_query .="$fields)";
        }

        if ($values != null) {
            $values = trim($values);
            if (IProcess::endsWith($values, ','))
                $values = substr_replace($values, "", -1); //remove the last character
            $this->_query .=" VALUES($values) ";
        }
        //echo $this->_query;
        if ($fields != null && $values != null) {
            return $this->execute();
        }
        
    }

    protected function setReplace($table, $values=null) {
        $this->_query = " REPLACE INTO $table ";

        if ($values != null) {
            if (IProcess::endsWith($values, ','))
                $values = substr_replace($values, "", -1); //remove the last character
            $this->_query .=" VALUES($values) ";

            return $this->execute();
        }
    }

    protected function setInsertFields($fields) {
        //remove the last character
        if (IProcess::endsWith($fields, ','))
            $fields = substr_replace($fields, "", -1);
        $this->_query .= $fields . ")";
    }

    protected function setInsertValues($values) {
        //remove the last character
        if (IProcess::endsWith($values, ','))
            $values = substr_replace($values, "", -1);
        $this->_query .= " VALUES(" . $values . ")";
    }

    protected function setUpdate($table, $fields_values=null, $condition=null) {
        $this->_query = " UPDATE $table SET ";

        if ($fields_values != null) {
            $fields_values = trim($fields_values);
            if (IProcess::endsWith($fields_values, ','))
                $fields_values = substr_replace($fields_values, "", -1);
            $this->_query .="$fields_values";
        }

        if ($condition != null)
            $this->_query .=" WHERE $condition ";

        //echo $this->_query;
        if ($fields_values != null && $condition != null) {
            return $this->execute();
        }
    }

    protected function setUpdateFields($fields) {
        if (IProcess::endsWith($fields, ','))
            $fields = substr_replace($fields, "", -1);
        $this->_query .= $fields;
    }

    protected function setDelete($table, $condition=null) {
        $this->_query = " DELETE FROM $table ";

        if ($condition != null) {
            $this->_query .=" WHERE $condition ";
            //echo $this->_query;
            return $this->execute();
        }
    }

    protected function setSelect($fields, $tables) {
        $this->_query .= " SELECT $fields FROM $tables ";
    }

    protected function setWhere($condition) {
        if ($this->is_Query())
            $this->_query .= " WHERE $condition";
    }

    protected function setJoin($type, $condition) {
        if ($this->is_Query())
            $this->_query .= " $type $condition";
    }

    public function setManualQuery($query) {
        $this->_query = $query;
        //echo $this->_query;
        $result = $this->query();
        if (!$result || ($this->numRows($result) < 1)) {
            return NULL;
        } else {
            while ($row = mysqli_fetch_array($result)) {
                $ret_arr[] = $row;
            }
            return $ret_arr;
        }
    }

    protected function setOrderBy($condition) {
        if ($this->is_Query())
            $this->_query .= " ORDER BY $condition";
    }

    protected function setGroupBy($condition) {
        if ($this->is_Query())
            $this->_query .= " GROUP BY $condition";
    }

    protected function getQuery() {
        return $this->_query;
    }

    protected function freeQuery() {
        $this->_query = "";
    }

    protected function query($debug = -1) {
        if ($this->is_Query()) {
            $this->_nbQueries++;
            //echo $this->_query;
            $this->_lastResult = mysqli_query($this->_connection,$this->_query) or $this->debugAndDie($this->_query);

            $this->debug($debug, $this->_query, $this->_lastResult);
            $this->freeQuery();

            return $this->_lastResult;
        }else
            return null;
    }

    public function manual_query($q) {
        //echo $q;
        $result = mysqli_query($this->_connection,$q);

        if (!$result || ($this->numRows($result) < 1)) {
            return NULL;
        } else {
            while ($row = mysqli_fetch_array($result)) {
                $ret_arr[] = $row;
            }
            return $ret_arr;
        }
    }
    
    public function manual_query_sql_result($q) {
        //echo $q;
        return mysqli_query($this->_connection,$q);

    }

    /** Do the same as query() but do not return nor store result.\n
     * Should be used for INSERT, UPDATE, DELETE...
     * @param $query The query.
     * @param $debug If true, it output the query and the resulting table.
     */
    protected function execute($debug = -1) {
        if ($this->is_Query()) {
            $this->_nbQueries++;
            //echo $this->_query;
            $result = mysqli_query($this->_connection,$this->_query) or $this->debugAndDie($this->_query);

            $this->debug($debug, $this->_query);
            $this->freeQuery();
            return $result;
        }
    }

    /** Get the array of data.
     * @param $fields
     * @param $table table name
     * @param $condition default = null
     * @return The array of rows of the query (0 or more).
     */
    protected function queryFetchRow($fields, $table, $condition=null) {
        $this->_query = "SELECT $fields FROM $table ";
        if ($condition != null)
            $this->_query .=" WHERE $condition ";
        //echo $this->_query;
        $result = $this->query();
        if (!$result || ($this->numRows($result) < 1)) {
            return NULL;
        }else
            return mysqli_fetch_array($result);
    }

    /** Get the array of data.
     * @param $fields
     * @param $table table name
     * @param $condition default = null
     * @return The array of rows of the query (0 or more).
     */
    public function queryFetchArray($fields, $table, $condition=null) {
        $ret_arr = null;
        $this->_query = "SELECT $fields FROM $table ";
        if ($condition != null)
            $this->_query .=" WHERE $condition ";
        //echo $this->_query."<br/>";
        $result = $this->query();
        if (!$result || ($this->numRows($result) < 1)) {
            return NULL;
        } else {
            while ($row = mysqli_fetch_array($result)) {
                $ret_arr[] = $row;
            }
            return $ret_arr;
        }
    }

    /** Convenient method for mysqli_fetch_object().
     * @param $result The ressource returned by query(). If NULL, the last result returned by query() will be used.
     * @return An object representing a data row.
     */
    protected function fetchNextObject($result = NULL) {
        if ($result == NULL)
            $result = $this->_lastResult;

        if ($result == NULL || mysqli_num_rows($result) < 1)
            return NULL;
        else
            return mysqli_fetch_object($result);
    }

    /** Get the number of rows of a query.
     * @param $fields
     * @param $table table name
     * @param $condition default = null
     * @return The number of rows of the query (0 or more).
     */
    protected function queryNumRows($fields, $table, $condition=null) {
        $this->_query = " SELECT $fields FROM $table ";
        if ($condition != null)
            $this->_query .=" WHERE $condition ";

        $result = $this->query();
        return mysqli_num_rows($result);
    }

    protected function queryCustomNumRows($query) {
        $this->_query = $query;

        $this->_query.=" LIMIT 1";
        $result = $this->query();

        $line = mysqli_fetch_row($result);

        return $line[0];
    }

    /** Get the number of rows of a query.
     * @param $result The ressource returned by query(). If NULL, the last result returned by query() will be used.
     * @return The number of rows of the query (0 or more).
     */
    protected function numRows($result = NULL) {
        if ($result == NULL)
            return mysqli_num_rows($this->_lastResult);
        else
            return mysqli_num_rows($result);
    }

    /** Get the result of the query as an object. The query should return a unique row.\n
     * Note: no need to add "LIMIT 1" at the end of your query because
     * the method will add that (for optimisation purpose).
     * @param $fields .
     * @param $table .
     * @param $condition = null .
     * @return An object representing a data row (or NULL if result is empty).
     */
    protected function queryUniqueObject($fields, $table, $condition=null) {
        $this->_query = " SELECT $fields FROM $table ";
        if ($condition != null)
            $this->_query .=" WHERE $condition ";

        $this->_query.=" LIMIT 1";

        $result = $this->query();
        return mysqli_fetch_object($result);
    }

    /** Get the result of the query as value. The query should return a unique cell.\n
     * Note: no need to add "LIMIT 1" at the end of your query because
     * the method will add that (for optimisation purpose).
     * @param $fields .
     * @param $table .
     * @param $condition = null .
     * @return A value representing a data cell (or NULL if result is empty).
     */
    protected function queryUniqueValue($fields, $table, $condition=null) {
        $this->_query = " SELECT $fields FROM $table ";
        if ($condition != null)
            $this->_query .=" WHERE $condition ";

        $this->_query.=" LIMIT 1";
        $result = $this->query();

        $line = mysqli_fetch_row($result);

        return $line[0];
    }

    /** Get the maximum value of a column in a table, with a condition.
     * @param $column The column where to compute the maximum.
     * @param $table The table where to compute the maximum.
     * @param $where The condition before to compute the maximum.
     * @return The maximum value (or NULL if result is empty).
     */
    protected function maxOf($column, $table, $where) {
        $this->_query = "SELECT MAX(`$column`) FROM `$table` WHERE $where";
        return $this->queryUniqueValue();
    }

    /** Get the maximum value of a column in a table.
     * @param $column The column where to compute the maximum.
     * @param $table The table where to compute the maximum.
     * @return The maximum value (or NULL if result is empty).
     */
    protected function maxOfAll($column, $table) {
        $this->_query = "SELECT MAX(`$column`) FROM `$table`";
        return $this->queryUniqueValue();
    }

    /** Get the count of rows in a table, with a condition.
     * @param $table The table where to compute the number of rows.
     * @param $where The condition before to compute the number or rows.
     * @return The number of rows (0 or more).
     */
    protected function countOf($table, $where) {
        $this->_query = "SELECT COUNT(*) FROM `$table` WHERE $where";
        return $this->queryUniqueValue();
    }

    /** Get the count of rows in a table.
     * @param $table The table where to compute the number of rows.
     * @return The number of rows (0 or more).
     */
    protected function countOfAll($table) {
        $this->_query = "SELECT COUNT(*) FROM `$table`";
        return $this->queryUniqueValue();
    }

    /** Internal function to debug when MySQL encountered an error,
     * even if debug is set to Off.
     * @param $query The SQL query to echo before diying.
     */
    protected function debugAndDie($query) {
        $this->debugQuery($query, "Error");
        die("<p style=\"margin: 2px;\">" . mysqli_error($this->_connection) . "</p></div>");
    }

    /** Internal function to debug a MySQL query.\n
     * Show the query and output the resulting table if not NULL.
     * @param $debug The parameter passed to query() functions. Can be boolean or -1 (default).
     * @param $query The SQL query to debug.
     * @param $result The resulting table of the query, if available.
     */
    protected function debug($debug, $query, $result = NULL) {
        if ($debug === -1 && $this->_defaultDebug === false)
            return;
        if ($debug === false)
            return;

        $reason = ($debug === -1 ? "Default Debug" : "Debug");
        $this->debugQuery($query, $reason);
        if ($result == NULL)
            echo "<p style=\"margin: 2px;\">Number of affected rows: " . mysqli_affected_rows($this->_connection) . "</p></div>";
        else
            $this->debugResult($result);
    }

    /** Internal function to output a query for debug purpose.\n
     * Should be followed by a call to debugResult() or an echo of "</div>".
     * @param $query The SQL query to debug.
     * @param $reason The reason why this function is called: "Default Debug", "Debug" or "Error".
     */
    protected function debugQuery($query, $reason = "Debug") {
        $color = ($reason == "Error" ? "red" : "orange");
        echo "<div style=\"border: solid $color 1px; margin: 2px;\">" .
        "<p style=\"margin: 0 0 2px 0; padding: 0; background-color: #DDF;\">" .
        "<strong style=\"padding: 0 3px; background-color: $color; color: white;\">$reason:</strong> " .
        "<span style=\"font-family: monospace;\">" . "</span></p>";
    }

    /** Internal function to output a table representing the result of a query, for debug purpose.\n
     * Should be preceded by a call to debugQuery().
     * @param $result The resulting table of the query.
     */
    protected function debugResult($result) {
        echo "<table border=\"1\" style=\"margin: 2px;\">" .
        "<thead style=\"font-size: 80%\">";
        $numFields = mysqli_num_fields($result);
        // BEGIN HEADER
        $tables = array();
        $nbTables = -1;
        $lastTable = "";
        $fields = array();
        $nbFields = -1;
        while ($column = mysqli_fetch_field($result)) {
            if ($column->table != $lastTable) {
                $nbTables++;
                $tables[$nbTables] = array("name" => $column->table, "count" => 1);
            }else
                $tables[$nbTables]["count"]++;

            $lastTable = $column->table;
            $nbFields++;
            $fields[$nbFields] = $column->name;
        }

        for ($i = 0; $i <= $nbTables; $i++)
            echo "<th colspan=" . $tables[$i]["count"] . ">" . $tables[$i]["name"] . "</th>";

        echo "</thead>";
        echo "<thead style=\"font-size: 80%\">";

        for ($i = 0; $i <= $nbFields; $i++)
            echo "<th>" . $fields[$i] . "</th>";

        echo "</thead>";
        // END HEADER

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            for ($i = 0; $i < $numFields; $i++)
                echo "<td>" . htmlentities($row[$i]) . "</td>";

            echo "</tr>";
        }
        echo "</table></div>";
        $this->resetFetch($result);
    }

    /** Get how many time the script took from the begin of this object.
     * @return The script execution time in seconds since the
     * creation of this object.
     */
    protected function getExecTime() {
        return round(($this->getMicroTime() - $this->_mtStart) * 1000) / 1000;
    }

    /** Get the number of queries executed from the begin of this object.
     * @return The number of queries executed on the database server since the
     * creation of this object.
     */
    protected function getQueriesCount() {
        return $this->_nbQueries;
    }

    /** Go back to the first element of the result line.
     * @param $result The resssource returned by a query() function.
     */
    protected function resetFetch($result) {
        if (mysqli_num_rows($result) > 0)
            mysqli_data_seek($result, 0);
    }

    /** Get the id of the very last inserted row.
     * @return The id of the very last inserted row (in any table).
     */
    protected function lastInsertedId() {
        return mysqli_insert_id($this->_connection);
    }

    /** Close the connexion with the database server.\n
     * It's usually unneeded since PHP do it automatically at script end.
     */
    protected function close() {
        mysqli_close($this->_connection);
    }

    /** Internal method to get the current time.
     * @return The current time in seconds with microseconds (in float format).
     */
    public function getMicroTime() {
        list($msec, $sec) = explode(' ', microtime());
        return floor($sec / 1000) + $msec;
    }

    public function getPhysician($anes=false, $cond=null, $allflag=false) {
        if ($cond != null)
            $condition = " and $cond";
        else
            $condition = "";
        if ($allflag) {
            if ($anes)
                return $this->queryFetchArray("*", TBL_PHYSICIAN, "rbihooshi=1" . $condition);
            else
                return $this->queryFetchArray("*", TBL_PHYSICIAN, "id > 0" . $condition);
        }else {
            if ($anes)
                return $this->queryFetchArray("*", TBL_PHYSICIAN, "rbihooshi=1 and delflag=0" . $condition);
            else
                return $this->queryFetchArray("*", TBL_PHYSICIAN, "delflag=0 " . $condition);
        }
    }

    public function getServices($cond=null, $allflag=false) {
        if ($cond != null)
            $condition = " and $cond";
        else
            $condition = "";
        if ($allflag)
            return $this->queryFetchArray("*", TBL_SERVICE, "id > 0" . $condition);
        else
            return $this->queryFetchArray("*", TBL_SERVICE, "serdelflag=0" . $condition);
    }

    public function getPatientType($cond=null, $allflag=false) {
        if ($cond != null)
            $condition = " and $cond";
        else
            $condition = "";
        if ($allflag)
            return $this->queryFetchArray("*", TBL_PATYPE, "id > 0" . $condition);
        else
            return $this->queryFetchArray("*", TBL_PATYPE, "ptdelflag=0 " . $condition);
    }

    public function getRoom($cond=null, $allflag=false) {
        if ($cond != null)
            $condition = " and $cond";
        else
            $condition = "";
        if ($allflag)
            return $this->queryFetchArray("*", TBL_ROOM, "id > 0" . $condition);
        else
            return $this->queryFetchArray("*", TBL_ROOM, "rdelflag=0 " . $condition);
    }

    public function getSurgery($cond=null, $allflag=false) {
        if ($cond != null)
            $condition = " and $cond";
        else
            $condition = "";
        if ($allflag)
            return $this->queryFetchArray("*", TBL_SURGERY, "id > 0" . $condition);
        else
            return $this->queryFetchArray("*", TBL_SURGERY, "sdelflag=0 " . $condition);
    }

    public function getArticle($cond=null, $allflag=true) {
        if ($cond != null)
            $condition = " and $cond";
        else
            $condition = "";
        if ($allflag)
            return $this->queryFetchArray("*", TBL_ARTICLE, "id > 0" . $condition);
        else
            return $this->queryFetchArray("*", TBL_ARTICLE, "id > 0" . $condition);
    }

    public function SaveLetterImage($id) {
        $count = 0;
        $return = "";
        $target = "upload/$id";
        if (!is_dir($target))
            mkdir($target);
        $target = $target . '/';
        foreach ($_FILES['file']['name'] as $filename) {
            if (trim($_FILES['file']['name'][$count]) != "") {
                if ($_FILES['file']['size'][$count] < 500000) {
                    if ($_FILES['file']['type'][$count] == "image/jpeg" || $_FILES['file']['type'][$count] == "image/pjpeg") {

                        $temp = $target;
                        $tmp = $_FILES['file']['tmp_name'][$count];
                        $count = $count + 1;
                        $temp = $temp . basename($filename);
                        if (move_uploaded_file($tmp, $target . rand(0, 10000) . ".jpg"))
                            $return = 0;
                        else
                            $return = -1;
                        $temp = '';
                        $tmp = '';
                    }else {
                        $return = -2; //type error
                    }
                } else {
                    $return = -3; //Size error
                }
            }
        }
        return $return;
    }

    public function delete_image($id, $im) {
        $target = "upload/$id/$im";
        unlink($target . ".jpg");
    }

    public function getAllUsers() {
        return $this->queryFetchArray("username,userlevel", TBL_USERS);
    }

    public function getUser($username) {
        return $this->queryFetchArray("*", TBL_USERS, "username='$username'");
    }
    
    public function getAllFields() {
        return $this->manual_query("SELECT * FROM  ".TBL_TFIELDS. " GROUP BY ftable, fname WITH ROLLUP");
    }
    

}

?>