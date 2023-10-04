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
        
        $totalCenters=45;
        // No. of entry present across the organization
        //Clear table rows
        $delquery = $dbhandle->query("DELETE from temptbl") or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
        
        //Add data to Temp table
        $sqlstr="INSERT INTO temptbl (cid, rp) SELECT '1',rp FROM c1 GROUP by rp";
        for($i=2;$i<=$totalCenters;$i++)
        {           
            if($i!=16) //Due to drop out of Center ID 16; 
            $sqlstr=$sqlstr. " UNION ALL SELECT ".$i.",rp FROM c".$i." GROUP by rp";
        }
        $selCummRecords = $dbhandle->query($sqlstr) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
        $Curryear = date("Y");
        $s=0; 
        //$durArray=array('July 2019 - June 2020', 'July 2020 - June 2021','July 2021 - June 2022','July 2022 - June 2023','July 2023 - June 2024', 'July 2024 - June 2025','July 2025 - June 2026','July 2026 - June 2027', 'July 2027 - June 2028', 'July 2028 - June 2029','July 2029 - June 2030','Target 2030');
        for($i=2019;$i<$Curryear;$i++)
        {
        $durArray[$s++]='July '.$i.' - June '.($i+1);
        }
        //$durArray[$s]='Target 2030';

        for($i=0;$i<count($durArray);$i++)
        {
                $YerQuery=mysqli_query($CCIHCon,"SELECT * FROM temptbl where rp='$durArray[$i]'")or die("Unable connect to the table");
                $yer[$durArray[$i]] = array_fill(0, $totalCenters, 0); //$totalCenters-1 due to cid 16 drop out 
                while ($YerQueryVal=mysqli_fetch_array($YerQuery)) {
                    $yer[$durArray[$i]][$YerQueryVal['cid']-1] =1; 
                }
             
        }
        // echo $yer['July 2019 - June 2020'][1];
        // echo "<pre>";
        // print_r($durArray);
        // echo "</pre>";
        
        if ($selCummRecords) {
            $EntryArray = array(
                "chart" => array(                
                    "theme"=> "fusion",
                    "showYAxisValues"=>"0",
                    "legendPosition"=> "top",
                    "legendAllowDrag"=> "1",
                    "plotHighlightEffect"=> "fadeout"               
                    
                )
            );
        
            for($i=0;$i<$totalCenters;$i++) {
                $cidcnt=$i+1;                
                $PickCenID=mysqli_query($CCIHCon,"SELECT center_id FROM center_details where cid='$cidcnt' and dropout=0 ")or die("Unable connect to the table");
                $PickCenIDVal=mysqli_fetch_array($PickCenID);
                $r[0]=array(
                    "label"=> $PickCenIDVal[0],        
                );
                //  if($cidcnt!=16){ 
                     //Due to drop out of Center ID 16;
                $EntryArray["categories"][0]["category"][$i]=$r[0];            
            // }
         }
            for($j=0;$j<count($durArray);$j++)
            {
            $EntryArray["dataset"][$j]["seriesname"]=$durArray[$j];
            for($i=0;$i<$totalCenters;$i++) {           
            $EntryArray["dataset"][$j]["data"][$i]["value"]=$yer[$durArray[$j]][$i];
            //echo $yer[$durArray[$j]][$i]."<br/>";
            } 
        }

        // echo "<pre>";
        // print_r($yer);
        // echo "</pre>";
        //echo $yer['July 2019 - June 2020'][0];
        //echo $yer['July 2019 - June 2020'][1];

        $EntrytData = json_encode($EntryArray);
        //echo $EntrytData;
        $EntrytDataGraph = new FusionCharts("stackedcolumn2d", "entryData" , "100%", "350", "EntryDataID", "json", "$EntrytData");
        $EntrytDataGraph->render();
        }


// FULL REPORT 
//Data has been initialized in admin home page
   
$FChart = "SELECT bcategory bc,sum(val) val FROM tempreptbl group by bcategory";
//echo $FChart;
$FullReport = $dbhandle->query($FChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

if ($FullReport) {
    $FullReportChartArray = array(
        "chart" => array(                
            "theme"=> "fusion",   
            "xAxisName"=> "Broad Categories",  
            "labelDisplay"=> "rotate",
            "slantLabel"=> "1",
            "showValues"=> "1", 
            "formatnumberscale"=> "0",

        )
    );

$FullReportChartArray["data"] = array();

$t1=0;
while ($FRChartrow = mysqli_fetch_array($FullReport)) {
    $BCchart=$FRChartrow["bc"];
    $totBCValue=$FRChartrow["val"];
    array_push($FullReportChartArray["data"], array(
        "label" => $BCchart,
        "value" => $totBCValue,     
        "link"=> "newchart-xml-".$BCchart       
    ));

//Select YEars
$YrChart = " SELECT rp as RP, sum(val)as val FROM tempreptbl WHERE bcategory='$BCchart' GROUP BY rp";
//echo $YrChart."<br/>";
$YRChartChartresult = $dbhandle->query($YrChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
if ($YRChartChartresult) {

  $FullReportChartArray["linkeddata"][$t1]=array(
    "id"=>$BCchart
  );
  $FullReportChartArray["linkeddata"][$t1]["linkedchart"]=array(
    "chart"=> array(   
        "caption"=> "Year wise distribution (".$BCchart.") ",
        // "xaxisname"=> "Sub-categories",
        "subcaption"=>"Total=".$totBCValue,
        "theme"=> "fusion",
        "rotateValues"=> "0",
        "showValues"=> "1",     
        "labelDisplay"=> "rotate",
        "slantLabel"=> "1",
        "formatnumberscale"=> "0",        

    ),
  );
    $s=0;
    $t=0;
    $totCUMRPval=0;
    while ($YRChartrow = mysqli_fetch_array($YRChartChartresult)) {
        $RPchart=$YRChartrow["RP"];
        $totRPval=$YRChartrow["val"];
        $mulpiey[0]=array(
            "label" => $RPchart,
            "value" => $totRPval,
            "link"=> "newchart-xml-".$BCchart.$RPchart      
        );
        $totCUMRPval=$totCUMRPval+$totRPval;

        // //Cummulative Report
        // $mulpiey[0]=array(
        //     "label" => 'Cummulative',
        //     "value" => $totCUMRPval,
        //     "link"=> "newchart-xml-".$BCchart.$RPCUMchart      
        // );

        $FullReportChartArray["linkeddata"][$t1]["linkedchart"]["data"][$s++]=$mulpiey[0];

/************** */
//Select Month data by the year

$SCChart = " SELECT subcategory AS SC, sum(val)as val FROM tempreptbl WHERE bcategory='$BCchart' and rp='$RPchart' GROUP BY SC";
//echo $SCChart."<br/>";
$SCChartChartresult = $dbhandle->query($SCChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
if ($SCChartChartresult) {

  $FullReportChartArray["linkeddata"][$t1]["linkedchart"]["linkeddata"][$t]=array(
    "id"=>$BCchart.$RPchart
  );
  $FullReportChartArray["linkeddata"][$t1]["linkedchart"]["linkeddata"][$t]["linkedchart"]=array(
    "chart"=> array(   
        "caption"=> "Sub-category distribution (".$BCchart. "-". $RPchart.")",
        "subcaption"=>"Total=".$totRPval,
        // "subcaptionFontColor"=> "#993300",
        // "subcaptionFontBold"=> "1",
        "xaxisname"=> "Sub-categories",
        "theme"=> "fusion",
        "rotateValues"=> "0",
        "showValues"=> "1",     
        "labelDisplay"=> "rotate",
        "slantLabel"=> "1",
        "formatnumberscale"=> "0",        

    ),
  );
    $s1=0;
  
    while ($SCChartrow = mysqli_fetch_array($SCChartChartresult)) {
        $mulpiey[0]=array(
            "label" => $SCChartrow["SC"],
            "value" => $SCChartrow["val"]      
        );
        $FullReportChartArray["linkeddata"][$t1]["linkedchart"]["linkeddata"][$t]["linkedchart"]["data"][$s1++]=$mulpiey[0];
}
$t++;
}
// 
 
}
//Cummulative Report for year display
$mulpiey[0]=array(
    "color"=> "#e44a00",
    "label" => 'Cummulative sum',
    "value" => $totCUMRPval,
    "link"=> "newchart-xml-".$BCchart.$RPCUMchart      
);
$FullReportChartArray["linkeddata"][$t1]["linkedchart"]["data"][$s++]=$mulpiey[0];
//End Cummulative Report for year display

/************** */
//Starting of Sub-Category cumulative report
//Select Month data by the year

$SCChart = " SELECT subcategory AS SC, sum(val)as val FROM tempreptbl WHERE bcategory='$BCchart' GROUP BY SC";
//echo $SCChart."<br/>";
$SCChartChartresult = $dbhandle->query($SCChart) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
if ($SCChartChartresult) {

  $FullReportChartArray["linkeddata"][$t1]["linkedchart"]["linkeddata"][$t]=array(
    "id"=>$BCchart.$RPCUMchart
  );
  $FullReportChartArray["linkeddata"][$t1]["linkedchart"]["linkeddata"][$t]["linkedchart"]=array(
    "chart"=> array(   
        "caption"=> "Sub-category distribution (".$BCchart. "- Cummulative sum)",
        "subcaption"=>"Total=".$totCUMRPval,
        "xaxisname"=> "Sub-categories",
        "theme"=> "fusion",
        "rotateValues"=> "0",
        "showValues"=> "1",     
        "labelDisplay"=> "rotate",
        "slantLabel"=> "1",
        "formatnumberscale"=> "0",        

    ),
  );
    $s1=0;
  
    while ($SCChartrow = mysqli_fetch_array($SCChartChartresult)) {
        $mulpiey[0]=array(
            "label" => $SCChartrow["SC"],
            "value" => $SCChartrow["val"]      
        );
        $FullReportChartArray["linkeddata"][$t1]["linkedchart"]["linkeddata"][$t]["linkedchart"]["data"][$s1++]=$mulpiey[0];
}
$t++;
}
// End of cumulative report of Sub-Category


$t1++;
}
// 
}
$FRChartData = json_encode($FullReportChartArray);
// echo $FRChartData;
$FRChartGraph = new FusionCharts("column2d", "fullreportID" , "100%", "550", "fullreport", "json", "$FRChartData");
$FRChartGraph->render();
}
        
    ?>
    <div class="ccih-app-root">
        <!-- main header-->
        <div class="ccih-main ">
            <!-- wrap -->
            <div class="ccih-wrap ">
                <!-- main header -->
                <!-- content  -->
                <div class="ccih-content ">
                <form id="form1" name="form1" method="post" action="<?echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-validate">
                    <div class="container wide-xl">
                    <div class="ccih-block-head">
                                    <div class="ccih-block-head-content">
                                                <h3 class="ccih-block-title page-title"> Full Report </h3>

                        <hr class="preview-hr mb-0 mt-1">
                        
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body1 mb-4">
                        <div class="ccih-block mt-4">
                                        <div class="row g-gs">
                                            <div class="col-md-4 ">
                                                <div class="card card-bordered">
                                                        <div class="card-header border-bottom h6">Centres list </div>
                                                            <div class="card-inner is-scrollable h-425px">
                                                                <ul class="ccih-activity ">
                                                                        <?
                                                                                //$sqlQuery="SELECT * FROM center_details order by cid ";  
                                                                                $sqlQuery="SELECT * FROM center_details where dropout=0  order by left(center_id,4), right(center_id,2) ";  
                                                                            $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die( mysqli_error( $CCIHCon ) );//die("Unable connect to the table");
                                                                            while ($listdata=mysqli_fetch_array($pickQuery)){
                                                                        ?>
                                                                        <li class="ccih-activity-item">
                                                                            <div class="bg-light w-30 text-center"><span class="m-1"><?=$listdata['center_id'];?></span></div>
                                                                            <div class="ccih-activity-data w-70">
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
                                                    <div class="card-header border-bottom h6">Centres entry details</div>
                                                    <div class="card-inner is-scrollable h-425px" id="EntryDataID"> </div>                                                
                                                </div>
                                            </div><!-- .col -->
                                        </div>



                                        <!-- Row-2 -->
                                        <div class="row g-gs">
                                            <div class="col-md-12  ">
                                                <div class="card card-bordered">
                                                    <div class="card-header border-bottom title">Broad Category distribution </div>
                                                    <div class="card-inner is-scrollable h-725px" id="fullreport"> </div> 
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