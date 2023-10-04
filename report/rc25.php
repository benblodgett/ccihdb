<?
require("../config.php");
require("../valid.inc.php");
include('../phpCSV.php');
require("../fusioncharts.php");

$eid=hex2bin($_GET['d']);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <!-- <link rel="shortcut icon" href="./images/favicon.png"> -->
    <!-- Page Title  -->
    <title>30x30 Health Systems Initiative </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <script type="text/javascript" src="../assets/fusioncharts/fusioncharts.js"></script>
    <script type="text/javascript" src="../assets/fusioncharts/themes/fusioncharts.theme.fusion.js"></script>
    <style>
    input[type=number] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
    }

    .btn-radus {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    </style>
</head>

<body class="ccih-body bg-white npc-default has-aside ">
    <?
        $dbhandle = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //q1_3
    $ageChart="select rp,q2_1 val from c25";
    //echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq2_1" , "100%", "270", "q2_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q2_1
    $ageChart="select rp,q2_2 val from c25";
    //echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq2_2" , "100%", "270", "q2_2", "json", "$ageChartData");
    $ageChartGraph->render();
    }

     //q2_2
     $ageChart="select rp,q2_3c val from c25";
     //echo $ageChart;
     $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
     if ($ageChartresult) {
         $AgeChartArray = array(
             "chart" => array(                
                 "theme"=> "fusion",
                 // "showlegend"=> "0",
                 // "showpercentvalues"=> "1",
                 // "usedataplotcolorforlabels"=> "0",               
                 
             )
         );
 
     $AgeChartArray["data"] = array();
     while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
         array_push($AgeChartArray["data"], array(
             "label" => $AgeChartrow["rp"],
             "value" => $AgeChartrow["val"],            
         ));
     }
     $ageChartData = json_encode($AgeChartArray);
     $ageChartGraph = new FusionCharts("column2d", "nq2_3" , "100%", "270", "q2_3", "json", "$ageChartData");
     $ageChartGraph->render();
     }

      //q2_3
    $ageChart="select rp,q3_1 val from c25";
    //echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq3_1" , "100%", "270", "q3_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }

     //q2_4
     $ageChart="select rp, 	q3_2 val from c25";
     //echo $ageChart;
     $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
     if ($ageChartresult) {
         $AgeChartArray = array(
             "chart" => array(                
                 "theme"=> "fusion",
                 // "showlegend"=> "0",
                 // "showpercentvalues"=> "1",
                 // "usedataplotcolorforlabels"=> "0",               
                 
             )
         );
 
     $AgeChartArray["data"] = array();
     while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
         array_push($AgeChartArray["data"], array(
             "label" => $AgeChartrow["rp"],
             "value" => $AgeChartrow["val"],            
         ));
     }
     $ageChartData = json_encode($AgeChartArray);
     $ageChartGraph = new FusionCharts("column2d", "nq3_2" , "100%", "270", "q3_2", "json", "$ageChartData");
     $ageChartGraph->render();
     }

      //q3_1
    $ageChart="select rp,q3_3 val from c25";
    //echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq3_3" , "100%", "270", "q3_3", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q4_1
    $ageChart="select rp,q3_4 val from c25";
    //echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq3_4" , "100%", "270", "q3_4", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q5_1
    $ageChart="select rp,q3_5 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq3_5" , "100%", "270", "q3_5", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q5_1
    $ageChart="select rp,q3_6 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq3_6" , "100%", "270", "q3_6", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q4_1 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq4_1" , "100%", "270", "q4_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q4_2 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq4_2" , "100%", "270", "q4_2", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q4_3 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq4_3" , "100%", "270", "q4_3", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q4_4 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq4_4" , "100%", "270", "q4_4", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q4_5 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq4_5" , "100%", "270", "q4_5", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q5_1 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq5_1" , "100%", "270", "q5_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q5_2 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq5_2" , "100%", "270", "q5_2", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q5_1
    $ageChart="select rp,q5_3 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq5_3" , "100%", "270", "q5_3", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q5_4 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq5_4" , "100%", "270", "q5_4", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q5_5 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq5_5" , "100%", "270", "q5_5", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q5_1
    $ageChart="select rp,q5_6 val from c25";
   // echo $ageChart;
    $ageChartresult = $dbhandle->query($ageChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($ageChartresult) {
        $AgeChartArray = array(
            "chart" => array(                
                "theme"=> "fusion",
                // "showlegend"=> "0",
                // "showpercentvalues"=> "1",
                // "usedataplotcolorforlabels"=> "0",               
                
            )
        );

    $AgeChartArray["data"] = array();
    while ($AgeChartrow = mysqli_fetch_array($ageChartresult)) {
        array_push($AgeChartArray["data"], array(
            "label" => $AgeChartrow["rp"],
            "value" => $AgeChartrow["val"],            
        ));
    }
    $ageChartData = json_encode($AgeChartArray);
    $ageChartGraph = new FusionCharts("column2d", "vq5_6" , "100%", "270", "q5_6", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    ?>
    <div class="ccih-app-root">
        <!-- main header-->
        <div class="ccih-main ">
            <!-- wrap -->
            <div class="ccih-wrap ">
            <?if($_COOKIE["previ"]=="OA"){?>
           <!-- Header starts -->
           <div class="ccih-header" style="background-color:#f2f2f2; border-bottom: 3px solid #d9d9d9;">    <!--#1d4e8b -->
                    <div class="container-lg wide-xl">
                        <div class="ccih-header-wrap">
                            <div class="ccih-header-brand">
                                <a href="#" class="logo-link">
                                    <img class="logo-img" src="../images/_30x30_logo-sm.png" srcset="./images/_30x30_logo-sm.png 3x" alt="logo">
                                </a>
                            </div>
                            <!-- .ccih-header-brand -->
                           
                            <!-- .ccih-header-menu -->
                            <div class="ccih-header-tools">
                                <ul class="ccih-quick-nav">

                                    <!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-lg-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <h5 class="ml-2 text-blue">Hi, <?=$_COOKIE["uname"]?></h5>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">

                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                <?if($_COOKIE["previ"]=="OA"){?>
                                                    <li><a href="../c25.php"><em class="icon ni ni-list-round"></em><span>Back to the Forms</span></a></li>
                                                    <li><a href="../cen_user_det.php"><em class="icon ni ni-user"></em><span>Add new user</span></a></li>
                                                    <?}?>
                                                    <li><a href="../chpwd.php"><em class="icon ni ni-lock"></em><span>Change password</span></a></li>
                                                    <li><a href="../logout.php"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>                                           
                                        </div>
                                    </li>
                                    <!-- .dropdown -->
                                    
                                </ul>
                                <!-- .ccih-quick-nav -->
                            </div>
                            <!-- .ccih-header-tools -->
                        </div>
                        <!-- .ccih-header-wrap -->
                    </div>
                    <!-- .container-fliud -->
                </div>
           <!-- Header ends -->
           <?}?>
                <!-- main header -->
                <!-- content  -->
                <div class="ccih-content ">
                <form id="form1" name="form1" method="post" action="<?echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-validate">
                    <div class="container wide-xl">
                    <div class="ccih-block-head">
                                    <div class="ccih-block-head-content">
                                                <h3 class="ccih-block-title page-title"> Global Health Action Report </h3>

                        <hr class="preview-hr mb-0 mt-1">
                        
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body1 mb-4">
                        <div class="ccih-block mt-4">
                                        
                                        <!-- Row-2 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">2.1 Number of trainings completed on current and emerging health and well-being issues</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q2_1"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">2.2 Number of individuals trained on current and emerging health and well-being issues</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q2_2"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-3 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">2.3 Percent of trainees that apply skills to current work </div>
                                                    <div class="card-inner is-scrollable h-325px" id="q2_3"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.1 Number of trainings on leadership and governance completed</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_1"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-4 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.2 Number of trained facilities, organizations with functional Boards and committees</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_2"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.3 Number of partnerships with local, regional, or national government</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_3"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-5 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.4 Number of organizations with an operational annual budget, sustainability plan and strategic business plan</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_4"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.5 Number of grant applications submitted</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_5"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                         <!-- Row-6 -->
                                         <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.6 Number of successful grant applications</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_6"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">4.1 Number of MNCH and well being activities organized which address basic needs of vulnerable populations, pre/post,</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q4_1"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                      <!-- Row-7 -->
                                      <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">4.2 Number of client visits by healthcare personnel (doctor, nurse, and CHW, VHW, TBA)</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q4_2"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">4.3 Number of trainings completed</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q4_3"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>

                                    <!-- Row-8 -->
                                      <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">4.4 Number of people directly impacted by efforts</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q4_4"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">4.5 Number of people indirectly impacted by efforts</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q4_5"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div> 
                                         <!-- Row-9 -->
                                      <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.1 Number of community-based and faith-based organizations involved in health-related community activities</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_1"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.2 Number of churches/local church groups/community groups involved in health-related community activities</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_2"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div> 
                                         <!-- Row-10 -->
                                      <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.3 Number of training conducted on health and well being challenges</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_3"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.4 Number of individals trained on health and well being challenges</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_4"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-11 -->
                                      <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.5 Number of people directly impacted by efforts</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_5"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.6 Number of people indirectly impacted by efforts</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_6"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                                            
                        </div>              
                        </div>
                    </div>
                    </form>
                    <!-- content  -->
                </div>
                <!-- wrap  -->
            </div>
            <!-- main  -->
        </div>
        <!-- JavaScript -->
        <script src="../assets/js/bundle.js"></script>
        <script src="../assets/js/scripts.js"></script>
        <script>
            $('#CenDLctl').on('click', function () {
                if(form1.centreName.value!=''){
                    //alert(form1.centreName.value);
                    $("#cerr").html('');
                    var l=form1.centreName.value;
                    const myCen=l.split("-");
                    $("#centit").html(myCen[1]);
                 $("#CenDL").modal('show');
                 $("#DDQuantitative").attr("href", "DD/c"+myCen[0]+".pdf");
                }
                else
                {
                    $("#cerr").html('<font color="red">Please select center name to proceed...</div>');
                }
                
            });
            $('#modexit').on('click', function () {
                $("#CenDL").modal('hide');
            });

        </script>
</body>

</html>