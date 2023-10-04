<?
require("config.php");
require("valid.inc.php");
include('phpCSV.php');
require("fusioncharts.php");

$eid=hex2bin($_GET['d']);

if(isset($_POST['btnQuantitative']) || isset($_POST['btnQualitative']) ){
    $centreName = $_POST['centreName'];
    if(strlen($centreName)!=0){
    $scid = explode("-", $centreName);

   
    if(isset($_POST['btnQuantitative'])) {
        $cendata="select * from c".$scid[0];
        $productResult=mysqli_query($CCIHCon,$cendata)or die("Unable connect to the table");

        $tblcol= mysqli_query($CCIHCon,"SHOW COLUMNS FROM c".$scid[0]);
        $fname="cData_Quantitative";
    }
    else if(isset($_POST['btnQualitative']) ){
        $cendata="select cid, cname, rp, q1, q2, q3, q4, q5, q6, fs, cuser, cdt, uuser, udt from qualitative where cid='".$scid[0]."'";
        $productResult=mysqli_query($CCIHCon,$cendata)or die("Unable connect to the table");
    
        $tblcol= mysqli_query($CCIHCon,"SHOW COLUMNS FROM qualitative WHERE FIELD not in ('sno')");
        $fname="cData_Qualitative";
    }
    

   while($row = mysqli_fetch_assoc($productResult)){
        $data[] = $row;
    }    
    //print_r($data);

    while($tblrow = mysqli_fetch_assoc($tblcol)){
    $tbldata[]=$tblrow['Field'];
    }

    $export = new H_Mysql_Export();
    $export->headerAry = $tbldata;       	    // TABLE COLUMN NAMES
    $export->dataAry = $data;					// TABLE DATA ARRAY FROM MYSQL
    $export->filename = $fname;			// CUSTOM FILE NAME 
    $export->directory = 'pdfreport/';			// DIRECTORY NAME
    $export->csv();							    // INITIALIZATION
    $export->download();					   // AUTOMATIC DOWNLOAD
    $export->delete();						  // AUTOMATIC DELETE DOWNLOADED FILE

}
else
{
    $msg="Please select center";
}

}

if (isset($_POST['sub']) ) {
    $FrmRepPer = $_POST['FrmRepPer'];
    $ToRepPer = $_POST['ToRepPer'];
}
else {
    $FrmRepPer = 2019;
    $ToRepPer = date("Y");
}  


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
    <link rel="stylesheet" href="./assets/css/style.css">
    <script type="text/javascript" src="assets/fusioncharts/fusioncharts.js"></script>
    <script type="text/javascript" src="assets/fusioncharts/themes/fusioncharts.theme.fusion.js"></script>
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
//Treatment details by year-wise distribution
$treatChart="select year(STR_TO_DATE(q9,'%d-%m-%Y')) yr, sum(case when q32 = '1' then 1 else 0 end) as count_recive, sum(case when q32 = '2' then 1 else 0 end) as count_notrecive from baseline_data where q2='$c_id' and year(STR_TO_DATE(q9,'%d-%m-%Y')) between $FromYear and $ToYear GROUP by yr";
//echo $treatChart;
// $treatChartresult = $dbhandle->query($treatChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
if ($treatChartresult) {
    $TreatChartArray = array(
        "chart" => array(                
         "xaxisname"=> "Years",
         "formatnumberscale"=> "1",
         "plottooltext"=> "<b>\$dataValue</b> Patients  <b>\$seriesName</b> in \$label",
         "theme"=> "fusion",
         "drawcrossline"=> "1"            
            
        )
    );

        while ($TreatChartrow = mysqli_fetch_array($treatChartresult)) {
        $yrVal[]=$TreatChartrow["yr"];
        $recval[]=$TreatChartrow["count_recive"];
        $nonrecval[]=$TreatChartrow["count_notrecive"]; 
        }
        for($i=0;$i<count($yrVal);$i++) {
        $r[0]=array(
            "label"=> $yrVal[$i],        
        );
        $TreatChartArray["categories"][0]["category"][$i]=$r[0];
        }
        $TreatChartArray["dataset"][0]["seriesname"]="Treatment received";
        for($i=0;$i<count($recval);$i++) {
        $TreatChartArray["dataset"][0]["data"][$i]["value"]=$recval[$i];
        }

        $TreatChartArray["dataset"][1]["seriesname"]="Treatment not received";
        for($i=0;$i<count($nonrecval);$i++) {
        $TreatChartArray["dataset"][1]["data"][$i]["value"]=$nonrecval[$i];
        }
        
        

        $treatChartData = json_encode($TreatChartArray);
        //echo $treatChartData;
        $treatChartGraph = new FusionCharts("mscolumn2d", "treat_Chart" , "100%", "350", "treat_chart", "json", "$treatChartData");
        // $treatChartGraph->render();
        }
    ?>
    <div class="ccih-app-root">
        <!-- main header-->
        <div class="ccih-main ">
            <!-- wrap -->
            <div class="ccih-wrap ">
            <?include("header.php");  ?>
                <!-- main header -->
                <!-- content  -->
                <div class="ccih-content ">
                <form id="form1" name="form1" method="post" action="<?echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-validate">
                    <div class="container wide-xl">
                    <div class="ccih-block-head">
                                    <div class="ccih-block-head-content">
                                                <h3 class="ccih-block-title page-title">Dashboard & Download Data</h3>                                                
                                            </div><!-- .ccih-block-head-content -->
                                            <hr class="preview-hr mb-3 mt-1">
                                        <div class="ccih-block-between">
                                           <div class="ccih-block-head-content">
                                                        <ul class="ccih-block-tools g-4">
                                                            <li><div class="ccih-block-title title">Center name
                                                            <select class="form-select form-control w-25" data-search="on" name="centreName" data-placeholder="Select a option">
                                                                <option value="">Select Centre</option>
                                                                <? 
																 $sqlQuery11="SELECT center_name,cid FROM center_details order by center_name";
																		  $result3=mysqli_query($CCIHCon,$sqlQuery11)or die("Unable connect to the table");

																		  while($valu3=mysqli_fetch_array($result3))
																 {
                                                                     $dctxt=$valu3['cid'].'-'.$valu3['center_name'];
                                                                     //echo "<script>console.log('Debug Objects: " . $dctxt . "' );</script>";
                                                                     
                                                                     $pctxt=$rsmember['center_id'].'-'.$rsmember['center_name'];
                                                                     ?>
																		  <option value='<?=$dctxt?>' "<?if($dctxt==$pctxt) {echo " selected =\"true\"";}?>" > <?=$valu3['center_name']?></option>"."<BR>"
																<?
                                                                }     
																 ?>
                                                            </select>
                                                            <div id='cerr'></div>
                                                            </div>
                                                            </li>
                                                            <li><div class="ccih-block-title title">Reporting period - from
                                                            <select class="form-control form-select" id="FrmRepPer" name="FrmRepPer" data-placeholder="Select a option">
                                                                <option label="" value=""> </option>
                                                                <option value="July 2019 - June 2020" >July 2019 - June 2020</option>
                                                                <option value="Target 2030" >Target 2030</option>
                                                                <option value="July 2020 - June 2021" >July 2020 - June 2021</option>
                                                                <option value="July 2021 - June 2022" >July 2021 - June 2022</option>
                                                                <option value="July 2022 - June 2023" >July 2022 - June 2023</option>
                                                                <option value="July 2023 - June 2024" >July 2023 - June 2024</option>
                                                                <option value="July 2024 - June 2025" >July 2024 - June 2025</option>
                                                                <option value="July 2025 - June 2026" >July 2025 - June 2026</option>
                                                                <option value="July 2026 - June 2027" >July 2026 - June 2027</option>
                                                                <option value="July 2027 - June 2028" >July 2027 - June 2028</option>
                                                                <option value="July 2028 - June 2029" >July 2028 - June 2029</option>
                                                                <option value="July 2029 - June 2030" >July 2029 - June 2030</option>
                                                            </select>
                                                            </div>
                                                            </li>
                                                            <li><div class="ccih-block-title title">Reporting period - to
                                                            <select class="form-control form-select" id="ToRepPer" name="ToRepPer" data-placeholder="Select a option">
                                                                <option label="" value=""></option>
                                                                <option value="July 2019 - June 2020" >July 2019 - June 2020</option>
                                                                <option value="Target 2030" >Target 2030</option>
                                                                <option value="July 2020 - June 2021" >July 2020 - June 2021</option>
                                                                <option value="July 2021 - June 2022" >July 2021 - June 2022</option>
                                                                <option value="July 2022 - June 2023" >July 2022 - June 2023</option>
                                                                <option value="July 2023 - June 2024" >July 2023 - June 2024</option>
                                                                <option value="July 2024 - June 2025" >July 2024 - June 2025</option>
                                                                <option value="July 2025 - June 2026" >July 2025 - June 2026</option>
                                                                <option value="July 2026 - June 2027" >July 2026 - June 2027</option>
                                                                <option value="July 2027 - June 2028" >July 2027 - June 2028</option>
                                                                <option value="July 2028 - June 2029" >July 2028 - June 2029</option>
                                                                <option value="July 2029 - June 2030" >July 2029 - June 2030</option>
                                                            </select>
                                                            </div>
                                                            </li>
                                                            <li>
                                                                  <button type="submit" name="sub" class="btn btn-secondary mt-4">Generate Report</button>
                                                            </li>
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a class="btn btn-primary dropdown-toggle mt-4" href="#" type="button" data-toggle="dropdown">Download Data</a>
                                                                    <div class="dropdown-menu">
                                                                    <ul class="link-list-opt">
                                                                        <li><a href="#"  data-target="#CenDL" id='CenDLctl'><span>Download data for selected center</span></a></li>
                                                                        <!-- <li><a href="#" data-target="#CenDL" id='CenDLctl' ><span>Common dataset data</span></a></li> -->
                                                                        <li><a href="dl_cendetails.php" name="cdetails" ><span>Center details data</span></a></li>
                                                                      
                                                                    </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                  
                                            </div><!-- .ccih-block-head-content -->
                                        </div><!-- .ccih-block-between -->
                                    </div><!-- .ccih-block-head -->
                                    
                                    <!-- Modal Content Code -->
                                    
                                        <div class="modal fade" tabindex="-1" id="CenDL">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id='centit'></h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Please use the following button to download Quantitative & Qualitative data with data dictionary</p>
                                                        <button type="submit" name="btnQuantitative" class="btn btn-lg btn-primary">Quantitative data</button>&nbsp;&nbsp; + &nbsp;&nbsp;
                                                        <a href='#' id="DDQuantitative" name="DDQuantitative" target="_blank" class="btn btn-lg btn-info">Data dictionary</a>
                                                        <hr/> 

                                                        <button type="submit" name="btnQualitative" class="btn btn-lg btn-primary">&nbsp; Qualitative data&nbsp;</button>&nbsp;&nbsp; + &nbsp;&nbsp;
                                                        <a href="DD/Qualitative.pdf" id="DDQualitative" name="DDQualitative" target="_blank" class="btn btn-lg btn-info">Data dictionary</a> 
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <span class="sub-text"><a href='#' class="btn btn-lg btn-secondary" id='modexit'>Exit</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Model content -->
                       

                        <hr class="preview-hr mb-0 mt-1">
                        
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body1 mb-4">
                        <div class="ccih-block mt-4">
                                        <div class="row g-gs">
                                            <div class="col-md-4  ">
                                            <div class="card card-bordered">
                                                <div class="card-header border-bottom h6">Center list </div>
                                                <div class="card-inner is-scrollable h-325px">
                                                <ul class="ccih-activity ">
                                                        <?
                                                                $sqlQuery="SELECT * FROM center_details order by cid ";  
                                                             $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
                                                             while ($listdata=mysqli_fetch_array($pickQuery)){
                                                         ?>
                                                        <li class="ccih-activity-item">
                                                            <div class="bg-light"><span class="m-1"><?=$listdata['center_id'];?></span></div>
                                                            <div class="ccih-activity-data">
                                                                <div class="label"><?=$listdata['center_name'];?></div>
                                                            </div>
                                                        </li>
                                                        <? } ?>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            </div><!-- .col -->
                                            <div class="col-md-8">
                                            <div class="card card-bordered">
                                                <div class="card-header border-bottom h6">Center list </div>
                                                <div class="card-inner is-scrollable h-325px" id="dash_pie_2"> </div>                                                
                                            </div>
                                            </div><!-- .col -->
                                            </div>


                                            <!--  -->
                                        <div class="row g-gs">
                                            <div class="col-md-4  ">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner border-bottom bg-gray-dim">
                                                        <div class="card-title-group pb-3 g-2 ">
                                                            <div class="card-title card-title-sm  ">
                                                                <h5 class="title">Center list </h5>                                                               
                                                            </div>                                                          
                                                        </div> 
                                                            </div>                                                            

                                                        <ul class="ccih-activity is-scrollable h-325px">
                                                        <?
                                                                $sqlQuery="SELECT * FROM center_details  ";  
                                                             $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
                                                             while ($listdata=mysqli_fetch_array($pickQuery)){
                                                         ?>
                                                        <li class="ccih-activity-item">
                                                            <div class="bg-light"><span class="m-1"><?=$listdata['center_id'];?></span></div>
                                                            <div class="ccih-activity-data">
                                                                <div class="label"><?=$listdata['center_name'];?></div>
                                                            </div>
                                                        </li>
                                                        <? } ?>
                                                        
                                                    </ul>
                                                        
                                                    </div>
                                                <!-- </div>.card -->
                                            </div><!-- .col -->
                                            <div class="col-md-8">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start pb-3 g-2">
                                                            <div class="card-title card-title-sm">
                                                                <h6 class="title">Active Users</h6>
                                                                <p>How do your users visited in the time.</p>
                                                            </div>
                                                            <div class="card-tools">
                                                                <em class="card-hint icon ni ni-help" data-toggle="tooltip" data-placement="left" title="Users of this month"></em>
                                                            </div>
                                                        </div>
                                                        <div class="analytic-au">
                                                            <div class="analytic-data-group analytic-au-group g-3">
                                                                <div class="analytic-data analytic-au-data">
                                                                    <div class="title">Monthly</div>
                                                                    <div class="amount">9.28K</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                                                </div>
                                                                <div class="analytic-data analytic-au-data">
                                                                    <div class="title">Weekly</div>
                                                                    <div class="amount">2.69K</div>
                                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                                </div>
                                                                <div class="analytic-data analytic-au-data">
                                                                    <div class="title">Daily (Avg)</div>
                                                                    <div class="amount">0.94K</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-au-ck">
                                                                <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                                                            </div>
                                                            <div class="chart-label-group">
                                                                <div class="chart-label">01 Jan, 2020</div>
                                                                <div class="chart-label">30 Jan, 2020</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
											</div>
                                            <!--  -->
                                                            
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
        <script src="./assets/js/bundle.js"></script>
        <script src="./assets/js/scripts.js"></script>
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