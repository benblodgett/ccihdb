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

//q1_1
    $ageChart="select rp,q1_1c val from c6";
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
    $ageChartGraph = new FusionCharts("column2d", "nq1_1" , "100%", "270", "q1_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q1_2
    $ageChart="select rp,q1_2 val from c6";
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
    $ageChartGraph = new FusionCharts("column2d", "nq1_2" , "100%", "270", "q1_2", "json", "$ageChartData");
    $ageChartGraph->render();
    }
    //q1_3
    $ageChart="select rp,q2_1c val from c6";
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
    $ageChartGraph = new FusionCharts("column2d", "nq2_1" , "100%", "270", "q2_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q2_1
    $ageChart="select rp,q3_1c val from c6";
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
    $ageChartGraph = new FusionCharts("column2d", "nq3_1" , "100%", "270", "q3_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }

     //q2_2
     $ageChart="select rp,q3_2c val from c6";
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

      //q2_3
    $ageChart="select rp,q4_1 val from c6";
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
    $ageChartGraph = new FusionCharts("column2d", "nq4_1" , "100%", "270", "q4_1", "json", "$ageChartData");
    $ageChartGraph->render();
    }

     //q2_4
     $ageChart="select rp,q5_1 val from c6";
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
     $ageChartGraph = new FusionCharts("column2d", "nq5_1" , "100%", "270", "q5_1", "json", "$ageChartData");
     $ageChartGraph->render();
     }

      //q3_1
    $ageChart="select rp,q5_2 val from c6";
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
    $ageChartGraph = new FusionCharts("column2d", "nq5_2" , "100%", "270", "q5_2", "json", "$ageChartData");
    $ageChartGraph->render();
    }

    //q4_1
    $ageChart="select rp,q6_1 val from c6";
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
    $ageChartGraph = new FusionCharts("column2d", "nq6_1" , "100%", "270", "q6_1", "json", "$ageChartData");
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
                                                    <li><a href="../c6.php"><em class="icon ni ni-list-round"></em><span>Back to the Forms</span></a></li>
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
                                                <h3 class="ccih-block-title page-title"> Christian Health Association of Malawi (CHAM) </h3>

                        <hr class="preview-hr mb-0 mt-1">
                        
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body1 mb-4">
                        <div class="ccih-block mt-4">
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">1.1 Percentage of health care positions filled in the chosen facilities (average of all facilities)</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q1_1"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">1.2 Annual staff turnover rate (%) in the chosen facilities (average of all facilities)</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q1_2"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-2 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">2.1 Percentage of increase in student’s intake in the chosen facilities (average of all facilities) </div>
                                                    <div class="card-inner is-scrollable h-325px" id="q2_1"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.1 Percentage of facilities regularly reporting in the national Health Management Information System</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_1"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-3 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">3.2 Percentage of facilities having clear standards and guidelines for: 1) data collection, 2) reporting procedures methods, and 3) data analysis to be performed)</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q3_2"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">4.1 Number of interface meetings for leaders, conducted in the last year</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q4_1"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-4 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.1 Number of training programs/workshops on Leadership and Governance</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_1"> </div> 
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">5.2 Number of individuals trained in Leadership and Governance.</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q5_2"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>
                                        <!-- Row-5 -->
                                        <div class="row g-gs">
                                            <div class="col-md-6  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">6.1 Number of churches or local church groups (e.g. small or cell groups) involved in health-related community activities</div>
                                                    <div class="card-inner is-scrollable h-325px" id="q6_1"> </div> 
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