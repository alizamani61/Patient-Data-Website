﻿<?php
    define("HOSPITALNAME","Patient Info");
    define("PROGRAMTITLE", "");
    define("_APPFOLDER","/ObesityPortal/");
    define("_SITE_ROOT" ,$_SERVER["DOCUMENT_ROOT"]._APPFOLDER);
    define("DEFAULT_COM","com_lap");
    define("LANG","en");
    define("LIB","include/");
    define("COMPONENTS","components/");
    define("IDATABASE","IDatabase.inc.php");
    define("IVIEW","IView.inc.php");
    define("IHTML","IHtml.inc.php");
    define("IPROCESS","IProcess.inc.php");
    define('DS', DIRECTORY_SEPARATOR);
    define("SESSION_TIMEOUT",1200); //600 = 10 minutes  1200 = 20 minutes //set it to null to disable
    define("DB_SERVER", "localhost");
    define("DB_USER", "webbooki_obmotherfa");
    define("DB_PASS", "o6tpkdrVEbvq");
    define("DB_NAME", "webbooki_obmotherfa");
    define("FNEW","New");
    define("FSEARCH","Search");
    define("FSAVE","Save"); 
    define("TBL_USERS", "fusers");
    define("TBL_IDENTICAL","identical");
    define("TBL_PMHX","pmhx");
    define("TBL_REVIEW","review");
    define("TBL_FAMILY","family");
    define("TBL_DIET","diet");
    define("TBL_PE","pe");
    define("TBL_PREOPERATIVE","preoperative");
    define("TBL_ARTICLE","article");
    define("TBL_HOSPITALCOURSE","hospitalcourse");
    define("TBL_FU","fu");
    define("TBL_FUDETAIL","fu_detail");
    define("TBL_EVENTS", "events");
    define("TBL_SERVICE","service");
    define("TBL_EPRESENT","epresent");
    define("TBL_SURGSCH", "surgsch1");
    define("TBL_TFIELDS", "Tfields");
    define("TBL_ACTIVE_USERS",  "factive_users");
    define("TBL_ACTIVE_GUESTS", "factive_guests");
    define("TBL_BANNED_USERS",  "fbanned_users");
    define("DETETECONFIRM","��� ��� ��� ����� ��� �");
    
    

    define("ALL_LOWERCASE", false);
    define("USEREMPTY", "��� ����� ���� ����");
    define("USERVALID", "����� ����� ���� ���");
    define("PASSEMPTY", "��� ���� ����");
    define("PASSVALID", "��� ����� ����");
    define("DECSCEMPTY", "������� ���� ����");
    define("DECSCVALID", "������� ����� ����");
    define("FIXDATEVALID", "����� ����� ����� ����");
    define("FIXDESCVALID", "������� ����� ����� ����");
    define("ASKCOUNTERROR", "����� ����� ����� ����");
    define("SHARAYETEG","����� �����:");
    define("AZTARIKH","�������:");
    define("TATARIKH","�� �����:");
    define("TARIKH","�����:");
    define("SAAT","����:");
    define("KARTABL","������� ������");
    define("OPACTTINY","���� ��� ������ ���� ��� �� ���� ���� �����");
    define("PEZESHK","����:");
    define("DOCASSIST","��� ����:");
    define("ATTENDING","������ ������:");
    define("REZIDENT","������ ������:");
    define("OPACT","���� ������ ���� ��� �� ���� ���� �����");
    define("MEDACT","���� ������ ����� �����");
    define("NOEAMAL","��� ���:");
   /**

 * Cookie Constants - these are the parameters
 * to the setcookie function call, change them
 * if necessary to fit your website. If you need
 * help, visit www.php.net for more info.
 * <http://www.php.net/manual/en/function.setcookie.php>
 */

define("COOKIE_EXPIRE", 60*60*24*100);  //100 days by default
define("COOKIE_PATH", "/");  //Avaible in whole domain

/**
 * Email Constants - these specify what goes in
 * the from field in the emails that the script
 * sends to users, and whether to send a
 * welcome email to newly registered users.
 */

define("EMAIL_FROM_NAME", "YourName");
define("EMAIL_FROM_ADDR", "youremail@address.com");
define("EMAIL_WELCOME", false);

    
    
    function MImport($str)
    {
        if (strtolower($str)=="core.idatabase")
            include_once(_SITE_ROOT.LIB.IDATABASE);
        if (strtolower($str)=="core.iview")
            include_once(_SITE_ROOT.LIB.IVIEW);
        if (strtolower($str)=="core.ihtml")
            include_once(_SITE_ROOT.LIB.IHTML);
        if (strtolower($str)=="core.iprocess")
            include_once(_SITE_ROOT.LIB.IPROCESS);
    }
?>