<?php
session_start();
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');
require_once 'include/Constants.inc.php';
error_reporting(0);
MImport("core.IProcess");

if (isset($_GET["lang"])) {
    if ($_GET["lang"] == "fa" || $_GET["lang"] == "en" || $_GET["lang"] == "ar")
        IProcess::setLang($_GET["lang"]);
}

if (trim(IProcess::getLang()) == "")
    IProcess::setLang(LANG);

//echo IProcess::getLang();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title><?php echo PROGRAMTITLE . " - " . HOSPITALNAME ?></title>

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery-ui.min.css" />
        <!-- Datatables -->
        <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

        <!-- bootstrap-wysiwyg -->
        <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">

        <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">

        <!-- PNotify -->
        <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" media="all" href="css/cal/calendar-blue.css" title="blue" />

        <!-- Custom Theme Style -->
        <link href="build/css/custom.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" media="all" href="css/en_style.css?ver=1" />

        <script type='text/javascript' src='js/html5shiv.min.js'></script>
        <script type='text/javascript' src='js/respond.min.js'></script>
        <script type='text/javascript' src='js/jalali.js'></script>
        <script type='text/javascript' src='js/calendar.js'></script>
        <script type='text/javascript' src='js/calendar-setup.js'></script>
        <script type='text/javascript' src='js/lang/calendar-fa.js'></script>

        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script type='text/javascript' src='js/jquery-ui-1.8.14.custom.min.js'></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>


    </head>
    <?php
    
    include _SITE_ROOT . COMPONENTS . "com_login/com_login.inc.php";
    
    include _SITE_ROOT . COMPONENTS . "com_search/com_search.inc.php";
    include _SITE_ROOT . COMPONENTS . "com_identical/com_identical.inc.php";
    
    include _SITE_ROOT . COMPONENTS . "com_review/com_review.inc.php";
    
    include _SITE_ROOT . COMPONENTS . "com_pmhx/com_pmhx.inc.php";
    include _SITE_ROOT . COMPONENTS . "com_family/com_family.inc.php";
    include _SITE_ROOT . COMPONENTS . "com_diet/com_diet.inc.php";
    include _SITE_ROOT . COMPONENTS . "com_pe/com_pe.inc.php";
    include _SITE_ROOT . COMPONENTS . "com_preoperative/com_preoperative.inc.php";
    include _SITE_ROOT . COMPONENTS . "com_hospitalcourse/com_hospitalcourse.inc.php";

    include _SITE_ROOT . COMPONENTS . "com_fu/com_fu.inc.php";
    
    include _SITE_ROOT . COMPONENTS . "com_users/com_users.inc.php";
    
    include _SITE_ROOT . COMPONENTS . "com_calendar/com_calendar.inc.php";
    
    include _SITE_ROOT . COMPONENTS . "com_dashboard/com_dashboard.inc.php";
    
    ?>

    <body class="nav-md">
        <?php if ($loginprocess->checkLogin()): ?>
        <?php $_SESSION["identical_dataid"] = 4168;?>
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;">
                                <a href="index.html" class="site_title"><img src="images/obesity-logo.png"/><span>Obesity Portal</span></a>
                            </div>

                            <div class="clearfix"></div>

                            <!-- menu profile quick info -->
                            <div class="profile">
                                <div class="profile_pic">
                                    <img src="images/user-male-icon.png" class="img-circle profile_img" alt=""/>
                                </div>
                                <div class="profile_info">
                                    <span>Welcome,</span>
                                    <h2><?= $_SESSION['username'] ?></h2> 
                                </div>
                            </div>
                            <!-- /menu profile quick info -->

                            <br />

                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3>General</h3>
                                    <ul class="nav side-menu">
                                        <li<?= (isset($_GET["com_dashboard"]) ? " class='active'" : "") ?>><a href="<?= _APPFOLDER ?>?com_dashboard=1"><i class="fa fa-dashboard"></i>DashBoard</a></li>
                                        <li<?= (isset($_GET["com_calendar"]) ? " class='active'" : "") ?>><a href='<?= _APPFOLDER ?>?com_calendar=1&func=new'><i class="fa fa-calendar"></i>Calendar</a></li>
                                        <li<?= (isset($_GET["com_identical"]) ? " class='active'" : "") ?>><a href='<?= _APPFOLDER ?>?com_identical=1&func=new'><i class="fa fa-folder-open-o"></i>Identical</a></li>
                                        <?php if (isset($_SESSION["identical_dataid"])): ?>
                                            <li<?= (isset($_GET["com_review"]) ? " class='active'" : "") ?>><a><i class="fa fa-tasks"></i>Review Of System<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_review"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["cardiopulmonary"]) ? "class='current-page'" : "")) ?>><a href='<?= _APPFOLDER ?>index.php?com_review=1&func=select&cardiopulmonary=1&id=<?= $_SESSION["identical_dataid"] ?>'>Cardiopulmonary</a></li>
                                                    <li <?= ((isset($_GET["gitract"]) ? "class='current-page'" : "")) ?>><a href='<?= _APPFOLDER ?>index.php?com_review=1&func=select&gitract=1&id=<?= $_SESSION["identical_dataid"] ?>'>GI Tract</a></li>
                                                    <li <?= ((isset($_GET["musculoskeletal"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_review=1&func=select&musculoskeletal=1&id=<?= $_SESSION["identical_dataid"] ?>">Musculoskeletal</a></li>
                                                    <li <?= ((isset($_GET["neuropsychiatry"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_review=1&func=select&neuropsychiatry=1&id=<?= $_SESSION["identical_dataid"] ?>">Neuropsychiatry</a></li>
                                                    <li <?= ((isset($_GET["skin"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_review=1&func=select&skin=1&id=<?= $_SESSION["identical_dataid"] ?>">Skin</a></li>
                                                    <li <?= ((isset($_GET["endocrinology"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_review=1&func=select&endocrinology=1&id=<?= $_SESSION["identical_dataid"] ?>">Endocrinology</a></li>

                                                </ul>
                                            </li>
                                            <li<?= (isset($_GET["com_pmhx"]) ? " class='active'" : "") ?>><a><i class="fa fa-history"></i>PMHX<span class="fa fa-chevron-down"></span></a></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_pmhx"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["diseases"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pmhx=1&func=select&diseases=1&id=<?= $_SESSION["identical_dataid"] ?>">Diseases</a></li>
                                                    <li <?= ((isset($_GET["perinatalhx"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pmhx=1&func=select&perinatalhx=1&id=<?= $_SESSION["identical_dataid"] ?>">Perinatal HX</a></li>
                                                    <li <?= ((isset($_GET["obhx"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pmhx=1&func=select&obhx=1&id=<?= $_SESSION["identical_dataid"] ?>">OB HX</a></li>
                                                    <li <?= ((isset($_GET["drughx"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pmhx=1&func=select&drughx=1&id=<?= $_SESSION["identical_dataid"] ?>">Drug HX</a></li>
                                                    <li <?= ((isset($_GET["previousparamedical"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pmhx=1&func=select&previousparamedical=1&id=<?= $_SESSION["identical_dataid"] ?>">Previous Paramedical Evaluations</a></li>

                                                </ul>
                                            </li>
                                            <li<?= (isset($_GET["com_family"]) ? " class='active'" : "") ?>><a><i class="fa fa-users"></i>Family and social<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_family"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["familyhistory"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_family=1&func=select&familyhistory=1&id=<?= $_SESSION["identical_dataid"] ?>">Family History</a></li>
                                                    <li <?= ((isset($_GET["socialhx"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_family=1&func=select&socialhx=1&id=<?= $_SESSION["identical_dataid"] ?>">Social History</a></li>
                                                </ul>
                                            </li>
                                            <li<?= (isset($_GET["com_diet"]) ? " class='active'" : "") ?>><a><i class="fa fa-spoon"></i>Diet & Physical Activity<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_diet"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["dietaryassessment"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_diet=1&func=select&dietaryassessment=1&id=<?= $_SESSION["identical_dataid"] ?>">Dietary Assessment</a></li>
                                                    <li <?= ((isset($_GET["physicalactivity"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_diet=1&func=select&physicalactivity=1&id=<?= $_SESSION["identical_dataid"] ?>">Physical Activity</a></li>


                                                </ul>
                                            </li>
                                            <li<?= (isset($_GET["com_pe"]) ? " class='active'" : "") ?>><a><i class="fa fa-male"></i>PE<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_pe"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["generalappearance"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pe=1&func=select&generalappearance=1&id=<?= $_SESSION["identical_dataid"] ?>">General Appearance</a></li>
                                                    <li <?= ((isset($_GET["vsanthropometry"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pe=1&func=select&vsanthropometry=1&id=<?= $_SESSION["identical_dataid"] ?>">V/S & Anthropometry</a></li>
                                                    <li <?= ((isset($_GET["heent"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pe=1&func=select&heent=1&id=<?= $_SESSION["identical_dataid"] ?>">HEENT</a></li>
                                                    <li <?= ((isset($_GET["chestabdomen"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pe=1&func=select&chestabdomen=1&id=<?= $_SESSION["identical_dataid"] ?>">Chest & Abdomen</a></li>
                                                    <li <?= ((isset($_GET["extremity"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pe=1&func=select&extremity=1&id=<?= $_SESSION["identical_dataid"] ?>">Extremity</a></li>
                                                    <li <?= ((isset($_GET["skin"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_pe=1&func=select&skin=1&id=<?= $_SESSION["identical_dataid"] ?>">Skin</a></li>

                                                </ul>
                                            </li>
                                            <li<?= (isset($_GET["com_preoperative"]) ? " class='active'" : "") ?>><a><i class="fa fa-check-square-o"></i>Preoperative Evaluation<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_preoperative"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["primarylaboratoryscreening"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_preoperative=1&func=select&primarylaboratoryscreening=1&id=<?= $_SESSION["identical_dataid"] ?>">Primary Laboratory Screening</a></li>
                                                    <li <?= ((isset($_GET["sonography"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_preoperative=1&func=select&sonography=1&id=<?= $_SESSION["identical_dataid"] ?>">Sonography</a></li>
                                                    <li <?= ((isset($_GET["optional"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_preoperative=1&func=select&optional=1&id=<?= $_SESSION["identical_dataid"] ?>">Optional</a></li>
                                                    <li <?= ((isset($_GET["multidisciplinaryevaluation"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_preoperative=1&func=select&multidisciplinaryevaluation=1&id=<?= $_SESSION["identical_dataid"] ?>">Multidisciplinary Evaluation</a></li>
                                                    <li <?= ((isset($_GET["metabolicsx"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_preoperative=1&func=select&metabolicsx=1&id=<?= $_SESSION["identical_dataid"] ?>">Metabolic SX</a></li>


                                                </ul>
                                            </li>
                                            <li<?= (isset($_GET["com_hospitalcourse"]) ? " class='active'" : "") ?> data-test="ali"><a><i class="fa fa-hospital-o"></i>Hospital Course<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_hospitalcourse"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["preopdata"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_hospitalcourse=1&func=select&preopdata=1&id=<?= $_SESSION["identical_dataid"] ?>">Pre-op Data</a></li>
                                                    <li <?= ((isset($_GET["intraopdata"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_hospitalcourse=1&func=select&intraopdata=1&id=<?= $_SESSION["identical_dataid"] ?>">Intra-op Data</a></li>
                                                    <li <?= ((isset($_GET["postopdata"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_hospitalcourse=1&func=select&postopdata=1&id=<?= $_SESSION["identical_dataid"] ?>">Post-op Data</a></li>
                                                    <li <?= ((isset($_GET["discharge"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_hospitalcourse=1&func=select&discharge=1&id=<?= $_SESSION["identical_dataid"] ?>">Discharge</a></li>

                                                </ul>
                                            </li>
                                            <li<?= (isset($_GET["com_fu"]) ? " class='active'" : "") ?>><a><i class="fa fa-home"></i>FU<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" <?= (isset($_GET["com_fu"]) ? " style='display:block'" : "") ?>>
                                                    <li <?= ((isset($_GET["obesityclinicvisitation"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_fu=1&func=select&obesityclinicvisitation=1&id=<?= $_SESSION["identical_dataid"] ?>">Obesity Clinic Visit</a></li>
                                                    <li <?= ((isset($_GET["anthropometricmonitoring"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_fu=1&func=select&anthropometricmonitoring=1&id=<?= $_SESSION["identical_dataid"] ?>">Anthropometric Monitoring</a></li>
                                                    <li <?= ((isset($_GET["laboratorymonitoring"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_fu=1&func=select&laboratorymonitoring=1&id=<?= $_SESSION["identical_dataid"] ?>">Laboratory Monitoring</a></li>
                                                    <li <?= ((isset($_GET["resultofpathology"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_fu=1&func=select&resultofpathology=1&id=<?= $_SESSION["identical_dataid"] ?>">Result Of Pathology</a></li>
                                                    <li <?= ((isset($_GET["latemorbiditiesandmortality"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_fu=1&func=select&latemorbiditiesandmortality=1&id=<?= $_SESSION["identical_dataid"] ?>">Late Morbidities And Mortality</a></li>
                                                    <li <?= ((isset($_GET["metabolicsx"]) ? "class='current-page'" : "")) ?>><a href="<?= _APPFOLDER ?>index.php?com_fu=1&func=select&metabolicsx=1&id=<?= $_SESSION["identical_dataid"] ?>">Metabolic SX</a></li>

                                                </ul>
                                            </li>

                                        <?php endif; ?>

                                    </ul>
                                </div>
                                <div class="menu_section">
                                    <h3>Section 2</h3>
                                    <?php if (isset($_SESSION["identical_dataid"])): ?>
                                        <ul class="nav side-menu">
                                            <li<?= (isset($_GET["com_dashboard"]) ? " class='active'" : "") ?>><a href="<?= _APPFOLDER ?>/process.php?getFinalReport=1&pid=<?=$_SESSION["identical_dataid"]?>" target="_blank"><i class="fa fa-hospital-o"></i>Post OP Report</a></li>
                                        </ul>
                                    <?php endif; ?>

                                </div>

                            </div>
                            <!-- /sidebar menu -->

                            <!-- /menu footer buttons -->
                            <div class="sidebar-footer hidden-small">
                                <a data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Lock">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a href="<?= _APPFOLDER ?>?logout=1" data-toggle="tooltip" data-placement="top" title="Logout">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                            <!-- /menu footer buttons -->
                        </div>
                    </div>

                    <!-- top navigation -->
                    <div class="top_nav">
                        <div class="nav_menu">
                            <nav>
                                <div class="nav toggle">
                                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                </div>

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <img src="images/user-male-icon.png"  alt=""/><?= $_SESSION['username'] ?>

                                            <span class=" fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                                            <li><a href="javascript:;">Profile</a></li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="badge bg-red pull-right">50%</span>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <li><a href="javascript:;">Help</a></li>
                                            <li><a href="<?= _APPFOLDER ?>?logout=1"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                                        </ul>
                                    </li>

                                    <li role="presentation" class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="badge bg-green">1</span>
                                        </a>
                                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                            <li>
                                                <a>
                                                    <span class="image">
                                                        <img src="images/img.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span>M1</span>
                                                        <span class="time">3 mins ago</span>
                                                    </span>
                                                    <span class="message">Message1
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <div class="text-center">
                                                    <a>
                                                        <strong>See All Alerts</strong>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /top navigation -->

                    <!-- page content -->
                    <div class="right_col" role="main">
                        <div class="">
                            <div class="page-title">
                                <div class="title_left">
                                    <h3></h3>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <?php
                                    if (isset($_GET["search"])) {
                                        echo $searchprocess->displaySearch();
                                    } else if (isset($_GET["com_identical"])) {
                                        echo $identicalproc->display();
                                    } else if (isset($_GET["com_review"])) {
                                        echo $reviewproc->display();
                                    } else if (isset($_GET["com_pmhx"])) {
                                        echo $pmhxproc->display();
                                    } else if (isset($_GET["com_family"])) {
                                        echo $familyproc->display();
                                    } else if (isset($_GET["com_diet"])) {
                                        echo $dietproc->display();
                                    } else if (isset($_GET["com_pe"])) {
                                        echo $peproc->display();
                                    } else if (isset($_GET["com_preoperative"])) {
                                        echo $preoperativeproc->display();
                                    } else if (isset($_GET["com_hospitalcourse"])) {
                                        echo $hospitalcourseproc->display();
                                    } else if (isset($_GET["com_fu"])) {
                                        echo $fuproc->display();
                                    } else if (isset($_GET["com_users"]) && $loginprocess->isAdministrator()) {
                                        echo $usersprocess->display();
                                        echo $searchprocess->displaySearch();
                                    } else if (isset($_GET["com_calendar"])) {
                                        echo $calprocess->init();
                                    } else if (isset($_GET["com_dashboard"])) {
                                        echo $dashboardprocess->display();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    By Ali Zamani
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

        <?php else: ?>
            <div class="container body">
                <?php $loginprocess->displayLogin(); ?>
            </div>
        <?php ENDIF; ?>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js-->
        <script src="vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="vendors/Flot/jquery.flot.js"></script>
        <script src="vendors/Flot/jquery.flot.pie.js"></script>
        <script src="vendors/Flot/jquery.flot.time.js"></script>
        <script src="vendors/Flot/jquery.flot.stack.js"></script>
        <script src="vendors/Flot/jquery.flot.resize.js"></script>
        <script src="vendors/Flot/jquery.flot.categories.js" type="text/javascript"></script>
        <!-- Flot plugins -->
        <script src="js/flot/jquery.flot.orderBars.js"></script>
        <script src="js/flot/date.js"></script>
        <script src="js/flot/jquery.flot.spline.js"></script>
        <script src="js/flot/curvedLines.js"></script>

        <!-- JQVMap -->
        <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

        <!-- Datatables -->
        <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
        <script src="vendors/jszip/dist/jszip.min.js"></script>
        <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
        <script src="vendors/pnotify/dist/pnotify.js"></script>
        <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>

        <!-- bootstrap-wysiwyg -->
        <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="vendors/google-code-prettify/src/prettify.js"></script>
        <!-- Select2 -->
        <script src="vendors/select2/dist/js/select2.full.min.js"></script>

        <!-- bootstrap-daterangepicker -->
        <script src="js/moment/moment.min.js"></script>
        <script src="js/datepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>
        <script type='text/javascript' src='js/jsearch.js?ver=1'></script>
        <script type='text/javascript' src='js/custom.js?ver=1'></script>
        <script src="vendors/switchery/dist/switchery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                //alert($(".side-menu li:eq(1) a").text())
                var $activeMenu = $(".side-menu li.active");
                //$(".side-menu li.active").detach();

                $activeMenu.insertAfter($(".side-menu li:eq(0)"));

            })
        </script>
    </body>
</html>