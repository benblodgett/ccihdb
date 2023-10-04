<?
require("config.php");
require("valid.inc.php");

$ftype=$_GET["dbtype"];
$rp=$_GET["repper"];
$cid=$_GET["cenid"];

if($ftype=="Quantitative")
    $sqlQuery1="update  c".$cid." set fs='Incomplete' where rp='$rp'";
else if($ftype=="Qualitative")
    $sqlQuery1="update qualitative set fs='Incomplete' where rp='$rp' and  	cid='$cid'";
    $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
    if($result1)
    echo 1;
?>