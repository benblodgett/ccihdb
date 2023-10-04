<?
require("config.php");
require("valid.inc.php");
require('assets/pdf/tcpdf.php');
date_default_timezone_set("US/Eastern");
$datetime=date("d-m-Y h:i:s a", time());

$ctxt=hex2bin($_GET['ctxt']);
$uname=$_COOKIE["uname"];
$center_id=$_COOKIE["cid"];
$cname=$_COOKIE["cname"];

$editQuery=hex2bin($_GET['e']);
if(strlen($editQuery)!=0)
{    
    $sqlQuery="SELECT * FROM qualitative  WHERE sno='$editQuery' and cid='$center_id'";  
    $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
    $rsmember=mysqli_fetch_array($pickQuery); 

    // Pick center name
    $cennamesqlQuery1="SELECT * FROM center_details  WHERE cid='$center_id'";  
    $cennamepickQuery=mysqli_query($CCIHCon,$cennamesqlQuery1)or die("Unable connect to the table");
    $cnamers=mysqli_fetch_array($cennamepickQuery);
    $cname=$cnamers['center_name'];
}

if (isset($_POST['rset'])) {
    $redirect ="cselection.php?sel=2";
    $url = $hostname.$redirect;  
    header("Location:$url");  
    exit();  
}

if (isset($_POST['sub']) || isset($_POST['sublate'])) {
    $RepPer = $_POST['RepPer'];
    $q1 = str_replace("'", ' ',$_POST['q1']);
    $q2 = str_replace("'", ' ',$_POST['q2']);
    $q3 = str_replace("'", ' ',$_POST['q3']);
    $q4 = str_replace("'", ' ',$_POST['q4']);
    $q5 = str_replace("'", ' ',$_POST['q5']);
    $q6=$_FILES["q6"]["name"];
    $q7=$_FILES["q7"]["name"];
    $q8=$_FILES["q8"]["name"];
    $q9=$_FILES["q9"]["name"];
    $q10=$_FILES["q10"]["name"];
    $filst=$_POST["filst"];
    $filst2=$_POST["filst2"];
    $filst3=$_POST["filst3"];
    $filst4=$_POST["filst4"];
    $filst5=$_POST["filst5"];

    if(isset($_POST['sub']))
        $fstat = "Completed";
    else
        $fstat = "Incomplete";
    
    if(strlen($RepPer)==0 ){

        $error =$error."Select, Reporting period"."<br/>";
        $errval = true;
    }
    if(strlen($fstat)==0 ){

        $error =$error."Select, Form Status"."<br/>";
        $errval = true;
    }
if($fstat=='Completed'){
    if(strlen($q1)==0 ){

        $error =$error."Specify, Indicator 1 "."<br/>";
        $errval = true;
    }

    if(strlen($q2)==0 ){

        $error =$error."Specify, Indicator 2 "."<br/>";
        $errval = true;
    }
    if(strlen($q3)==0 ){

        $error =$error."Specify, Indicator 3 "."<br/>";
        $errval = true;
    }
    if(strlen($q4)==0 ){

        $error =$error."Specify, Indicator 4 "."<br/>";
        $errval = true;
    }
    
}
    
// File upload start
$target_dir = "uploads/";
$allowed_types = array('docx', 'doc', 'pdf', 'txt');
$maxsize = 5 * 1024 * 1024;  //5mb size
$f1flag=0;
$f2flag=0;
$f3flag=0;
$f4flag=0;
$f5flag=0;
// File-1
if($filst==''){
    if(strlen($q6)!=0){
    $target_file1 = $target_dir . basename($_FILES["q6"]["name"]);
    $FileType = pathinfo($target_file1,PATHINFO_EXTENSION);
    $file_name = $_FILES['q6']['name'];
    $checkmoneyimg = getimagesize($_FILES["q6"]["tmp_name"]);
    $file_size = $_FILES['q6']['size'];
    if(in_array(strtolower($FileType), $allowed_types)) {}
    else {				
        // If file extension not valid
        $error =$error. "{$FileType} file type is not allowed for $file_name<br / >";
        $errval = true;
        $f1=1;
    }
    if ($file_size > $maxsize){		
    $error =$error. "File size is larger than the allowed limit for $file_name.<br / >";
    $errval = true;
    $f1=1;
    }
    if ( $f1 ==0 )
         $f1flag=1;    
    }
}else{
    $ufname=$filst;
}
// File-2
if($filst2==''){
    if(strlen($q7)!=0){
    $target_file2 = $target_dir . basename($_FILES["q7"]["name"]);
    $FileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
    $file_name2 = $_FILES['q7']['name'];
    $checkmoneyimg2 = getimagesize($_FILES["q7"]["tmp_name"]);
    $file_size2 = $_FILES['q7']['size'];
    if(in_array(strtolower($FileType2), $allowed_types)) {}
    else {				
        // If file extension not valid
        $error =$error. "{$FileType2} file type is not allowed for $file_name2<br / >";
        $errval = true;
        $f2=1;
    }
    if ($file_size2 > $maxsize){		
    $error =$error. "File size is larger than the allowed limit for $file_name2.<br / >";
    $errval = true;
    $f2=1;
    }
    if ( $f2 ==0 )
        $f2flag=1;    
    }
}else{
    $ufname2=$filst2;
}
// File-3
if($filst3==''){
    if(strlen($q8)!=0){
    $target_file3 = $target_dir . basename($_FILES["q8"]["name"]);
    $FileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
    $file_name3 = $_FILES['q8']['name'];
    $checkmoneyimg3 = getimagesize($_FILES["q8"]["tmp_name"]);
    $file_size3 = $_FILES['q8']['size'];
    if(in_array(strtolower($FileType3), $allowed_types)) {}
    else {				
        // If file extension not valid
        $error =$error. "{$FileType3} file type is not allowed for $file_name3<br / >";
        $errval = true;
        $f3=1;
    }
    if ($file_size3 > $maxsize){		
    $error =$error. "File size is larger than the allowed limit for $file_name3.<br / >";
    $errval = true;
    $f3=1;
    }
    if ( $f3 ==0 )
        $f3flag=1;    
    }
}else{
    $ufname3=$filst3;
}
// File-1
if($filst4==''){
    if(strlen($q9)!=0){
    $target_file4 = $target_dir . basename($_FILES["q9"]["name"]);
    $FileType4 = pathinfo($target_file4,PATHINFO_EXTENSION);
    $file_name4 = $_FILES['q9']['name'];
    $checkmoneyimg4 = getimagesize($_FILES["q9"]["tmp_name"]);
    $file_size4 = $_FILES['q9']['size'];
    if(in_array(strtolower($FileType4), $allowed_types)) {}
    else {				
        // If file extension not valid
        $error =$error. "{$FileType4} file type is not allowed for $file_name4<br / >";
        $errval = true;
        $f4=1;
    }
    if ($file_size4 > $maxsize){		
    $error =$error. "File size is larger than the allowed limit for $file_name4.<br / >";
    $errval = true;
    $f4=1;
    }
    if ( $f4 ==0 )
        $f4flag=1;    
    }
}else{
    $ufname4=$filst4;
}
// File-10
if($filst5==''){
    if(strlen($q10)!=0){
    $target_file5 = $target_dir . basename($_FILES["q10"]["name"]);
    $FileType5 = pathinfo($target_file5,PATHINFO_EXTENSION);
    $file_name5 = $_FILES['q10']['name'];
    $checkmoneyimg5 = getimagesize($_FILES["q10"]["tmp_name"]);
    $file_size5 = $_FILES['q10']['size'];
    if(in_array(strtolower($FileType5), $allowed_types)) {}
    else {				
        // If file extension not valid
        $error =$error. "{$FileType5} file type is not allowed for $file_name5<br / >";
        $errval = true;
        $f5=1;
    }
    if ($file_size5 > $maxsize){		
    $error =$error. "File size is larger than the allowed limit for $file_name5.<br / >";
    $errval = true;
    $f5=1;
    }
    if ( $f5 ==0 )
        $f5flag=1;    
    }
}else{
    $ufname5=$filst5;
}
// file upload stop

    if ( $errval != true ) {

        if($f1flag==1){
            $target_file = $target_dir .$RepPer."_cid".$center_id."_id1";
            $ufname=$target_file.".".$FileType;
            move_uploaded_file($_FILES["q6"]["tmp_name"], $ufname);
        }
        if($f2flag==1){
            $target_file2 = $target_dir .$RepPer."_cid".$center_id."_id2";
            $ufname2=$target_file2.".".$FileType2;
            move_uploaded_file($_FILES["q7"]["tmp_name"], $ufname2);
        }
        if($f3flag==1){
            $target_file3 = $target_dir .$RepPer."_cid".$center_id."_id3";
            $ufname3=$target_file3.".".$FileType3;
            move_uploaded_file($_FILES["q8"]["tmp_name"], $ufname3);
        }
        if($f4flag==1){
            $target_file4 = $target_dir .$RepPer."_cid".$center_id."_id4";
            $ufname4=$target_file4.".".$FileType4;
            move_uploaded_file($_FILES["q9"]["tmp_name"], $ufname4);
        }
        if($f5flag==1){
            $target_file5 = $target_dir .$RepPer."_cid".$center_id."_id5";
            $ufname5=$target_file5.".".$FileType5;
            move_uploaded_file($_FILES["q10"]["tmp_name"], $ufname5);
        }

        $sqlQuery="SELECT * FROM qualitative WHERE  rp='$RepPer' and cid='$center_id'";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));
        if( mysqli_num_rows($result) > 0){
            $sqlQuery1="update qualitative set q1='$q1', q2='$q2', q3='$q3',q4='$q4',q5='$q5',q6='$ufname',q7='$ufname2',q8='$ufname3',q9='$ufname4',q10='$ufname5',fs='$fstat',uuser='$uname',udt='$datetime' where rp='$RepPer' and cid='$center_id'";
            $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
            sendMail($fstat,$RepPer,$center_id,$CCIHCon);
            if($result1)
                $msg="The details has been updated successfully!";    
        }
        else{
                $sqlQuery1="Insert into qualitative(cid, cname, rp, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, fs, cuser, cdt,uuser,udt ) values ('$center_id','$cname','$RepPer','$q1','$q2','$q3','$q4','$q5','$ufname','$ufname2','$ufname3','$ufname4','$ufname5','$fstat','$uname','$datetime','$uname','$datetime') ";
                $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
                sendMail($fstat,$RepPer,$center_id,$CCIHCon);
                if($result1)
                    $msg="The information has been added successfully!";
        }
    }    

}

function sendMail($val,$rp,$cid,$CCIHCon)
{    
    if($val=='Completed'){
        $sqlQuery="SELECT * FROM qualitative WHERE  rp='$rp' and cid='$cid'";
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));
        if( mysqli_num_rows($result) > 0){
            $valu1=mysqli_fetch_array($result);
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('CCIH');
            $pdf->SetTitle('30x30 Health Systems Initiative ');
            $pdf->SetSubject('Qualitative Indicators');
            
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            // set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
            
            // set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            
            // set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            
            // set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);            
            
            // set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                require_once(dirname(__FILE__).'/lang/eng.php');
                $pdf->setLanguageArray($l);
            }
            
            // set font
            $pdf->SetFont('dejavusans', '', 10);            
            // add a page
            $pdf->AddPage();
            $html = '
                <table border="1" cellpadding="4">
                <tr>
                <td><img src="images/logo.png" alt="Logo" border="0" /></td>
                <td style="text-align:center;font-size:18px;padding-top:13px"><b>30x30 Health Systems Initiative</b></td>
                </tr>
                <tr><td colspan="2" style="text-align:center"><b>Final Submission (Qualitative)</b></td></tr>
                <tr><td colspan="2" style="text-align:right"><b>Reporting period: </b>'.$valu1['rp'].'</td></tr>
                </table>';
            $html.='<style>
               tr.border_bottom td
                {
                border-bottom: 1px solid #dee2e6;
                }
                </style>';
            $html .='
                <table cellpadding="4" border="1">
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr class="border_bottom">
                <td colspan="2">1. What are the most significant changes you are seeing as a result of your work? <br/>&nbsp;&nbsp;&nbsp; <b>'.$valu1['q1'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">2. What were the most important activities or resources, you implemented that have made this change happen? <br/>&nbsp;&nbsp;&nbsp; <b>'.$valu1['q2'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">3. How are these programs contributing or complementing the national health systems or country health initiatives? (In terms of structure, systems, programs, policies, and health improvement) <br/>&nbsp;&nbsp;&nbsp; <b>'.$valu1['q3'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">4. What are the key lessons learned (the positives and negatives) which could be useful for other organizations for possible replication and scale up? <br/>&nbsp;&nbsp;&nbsp; <b>'.$valu1['q4'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">5. If you have any interesting case studies, kindly share with us (optional)  <br/>&nbsp;&nbsp;&nbsp; <b>'.$valu1['q5'].'</b></td>
                </tr>                
                </table>
                </td>
                </tr>
                </table>';
                
                $pdf->writeHTML($html);
    
            //$pdf->lastPage();
            // $pdf->Output('Doc.pdf', 'D'); // for online generate
            //Close and output PDF document
            $pdf->Output(__DIR__ . '/pdfreport/QualitativeFinalReport.pdf', 'F');
    
//Ending Pdf conversion *****************/

//Sending email
$to = strip_tags($_COOKIE["eid"]) ;

//sender
$from = constant("ADMIN_EMAIL");
$fromName = '30x30 Health Systems Initiative';
//email subject
$subject = '30x30 Health Systems Initiative Final Submission-Qualitative'; 
   
//attachment file path
$file = "pdfreport/QualitativeFinalReport.pdf";
$message ='<p>Dear '.strip_tags($_COOKIE["uname"]).',<br/></p>';
$message .='<p>Greetings!. We are happy to inform you that the final version of Qualitative Indicators have been submitted successfully for the reporting period '.strip_tags($valu1['rp'])."</p>";
$message .='<p>Also, please find the attached responses for your reference.</p>';
$message .= '<p>For further clarification, please feel free to contact us at 30x30@ccih.org </p>';
$message .= '<p>Thanking you.</p>';
$message .= '<p>Regards, <br/>30x30 Health Systems Initiative Team</p>';


//email body content
$htmlContent = $message;
//$eol = PHP_EOL;
//header for sender info
$headers = "From: $fromName"." <".$from.">";
$headers .= "\nCc: "." <".constant("CC_EMAIL").">";

//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($file)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail($to, $subject, $message, $headers, $returnpath); 



        }//end if-for record present

    } //end if
} //end function

$rparray = [];
$rp_array =0;
$rpresult=mysqli_query($CCIHCon,"SELECT rp FROM qualitative WHERE cid='$center_id'")or die(mysqli_error($CCIHCon));
while ($rs=mysqli_fetch_array($rpresult)){
    //echo "<script>alert('$RepPer');</script>";;
    if($rsmember['rp']==$rs['rp'] || $RepPer==$rs['rp'])
    {}
    else{
    $rparray[] = $rs['rp'];
    }

$rp_array = json_encode($rparray);
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
    <style>
input[type=number] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}
.btn-radus{
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
        </style>
</head>

<body class="ccih-body bg-white npc-default has-aside ">
    <div class="ccih-app-root">
        <!-- main header-->
        <div class="ccih-main ">
            <!-- wrap -->
            <div class="ccih-wrap ">
                <?include("header.php");  ?>
                <!-- main header -->
                <!-- content  -->
                <div class="ccih-content ">
                    <div class="container wide-xl">
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body">
                            <div class="ccih-content-wrap">
                            <?if($_COOKIE["previ"]!="SA"){?>     
                            <div class="text-right" >
                                    <a href="cselection.php?sel=1" class="btn btn-warning btn-radus" >Quantitative</a>
                                    <a href="#" class="btn btn-danger  btn-radus" >Qualitative</a>
                                    <a href="cselection.php?sel=2&pg=1" class="btn btn-secondary btn-radus" ><em class="icon ni ni-db-fill"></em>  View Existing data</a>
                                </div>
                                <?}?>
                                <div class="components-preview wide-md mx-auto">
                                <div class="alert alert-bi-file bg-primary text-white mb-0 rounded-0">
                                    <div class="ccih-block-head ccih-block-head-lg ">
                                        <div class="ccih-block-head-content">
                                            <h4 class="ccih-block-title fw-normal"><em class="icon ni ni-blank"></em> <?=$cname?> - Qualitative</h4>
                                        </div>
                                    </div>
                                </div>
                                
                                    <!-- .ccih-block-head -->
                                    <form id="form1" name="form1" method="post" action="<?echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-validate" enctype="multipart/form-data">
                                    <div class="ccih-block ccih-block-lg">
                                        <div class="card card-preview rounded-0">
                                            <div class="card-inner ">
                                            <?
                                                if($error){
                                                echo "<div class='alert alert-fill alert-danger alert-icon'>";
                                                echo '<em class="icon ni ni-cross-circle"></em> '.$error;
                                                echo "</div>";
                                                }
                                                if($msg){
                                                    echo "<div class='alert alert-fill alert-success alert-icon'>";
                                                    echo '<em class="icon ni ni-check"></em> '.$msg;
                                                    echo "</div>";
                                                    }
                                                ?>
                                                <div class="alert alert-light mt-2">
                                                    <div class="row gy-4">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="Repdt">Reporting period</label>
                                                                <div class="form-control-wrap ">
                                                                <select class="form-control form-select" id="RepPer" name="RepPer" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
                                                                        <?if($center_id<=20 || $center_id==31 || $center_id==32){?>
                                                                        <option value="July 2019 - June 2020" >July 2019 - June 2020</option>
                                                                        <?}?>
                                                                        <option value="Target 2030" >Target 2030</option>
                                                                        <?if($center_id<=32){?>
                                                                        <option value="July 2020 - June 2021" >July 2020 - June 2021</option>
                                                                        <?}?>
                                                                        <?if($center_id<=38){?>
                                                                        <option value="July 2021 - June 2022" >July 2021 - June 2022</option>
                                                                        <?}?>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <!-- <hr class="preview-hr"> -->
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="q1">1. What are the most significant changes you are seeing as a result of your work?</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" id="q1" name="q1"  ><?if(strlen($q1)!=0) echo $q1; else echo $rsmember['q1'];?></textarea>
                                                                <span class="form-note text-primary"  id="q1_left">Maximum of 500 words</span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="q2">2. What were the most important activities or resources, you implemented that have made this change happen?</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" id="q2" name="q2" ><?if(strlen($q2)!=0) echo $q2; else echo $rsmember['q2'];?></textarea>
                                                                <span class="form-note text-primary"  id="q2_left">Maximum of 500 words</span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="q3">3. How are these programs contributing or complementing the national health systems or country health initiatives? (In terms of structure, systems, programs, policies, and health improvement)</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" id="q3" name="q3" ><?if(strlen($q3)!=0) echo $q3; else echo $rsmember['q3'];?></textarea>
                                                                <span class="form-note text-primary"  id="q3_left">Maximum of 500 words</span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="q4">4. What are the key lessons learned (the positives and negatives) which could be useful for other organizations for possible replication and scale up?</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" id="q4" name="q4" ><?if(strlen($q4)!=0) echo $q4; else echo $rsmember['q4'];?></textarea>
                                                                <span class="form-note text-primary" id="q4_left">Maximum of 500 words</span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="q5">5. If you have any interesting case studies, kindly share with us (optional) </label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" id="q5" name="q5"><?if(strlen($q5)!=0) echo $q5; else echo $rsmember['q5'];?></textarea>
                                                                <span class="form-note text-primary" id="q5_left">Maximum of 500 words</span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="q5">6. Upload report if any (optional) - please upload a maximum of 5 files (PDF or Word), each files should not exceed 5MBs </label>
                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <?//if(strlen($rsmember['q6'])==0){?>
                                                                        <input type="hidden" id="filst" name="filst">
                                                                        <div id="filecnt">
                                                                            <input type="file" data-max-file-size="2"  data-accepted-files=".docx, .doc, .pdf, .txt" class="custom-file-input" id="q6" name="q6">
                                                                            <label class="custom-file-label" for="customFile" id="sfile">Choose file</label>
                                                                            </div>
                                                                    <?//}else{?>
                                                                        <div id="filedb">
                                                                        <label class="custom-file-label1" id="showfile"></label>
                                                                        <label class="btn btn-sm btn-gray ml-2" id="showfilebtn" onClick="ShowFile()">Change File<label>
                                                                        </div>
                                                                    <?//}?>
                                                                </div>                                                                
                                                            </div>
                                                            <!-- e1 -->
                                                            <!-- 2 -->
                                                            <div class="form-control-wrap mt-3">
                                                                <div class="custom-file">
                                                                    <?//if(strlen($rsmember['q6'])==0){?>
                                                                        <input type="hidden" id="filst2" name="filst2">
                                                                        <div id="filecnt2">
                                                                            <input type="file" data-max-file-size="2"  data-accepted-files=".docx, .doc, .pdf, .txt" class="custom-file-input" id="q7" name="q7">
                                                                            <label class="custom-file-label" for="customFile2" id="sfile2">Choose file</label>
                                                                            </div>
                                                                    <?//}else{?>
                                                                        <div id="filedb2">
                                                                        <label class="custom-file-label1" id="showfile2"></label>
                                                                        <label class="btn btn-sm btn-gray ml-2" id="showfilebtn2" onClick="ShowFile1()">Change File<label>
                                                                        </div>
                                                                    <?//}?>
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- e2 -->
                                                             <!-- 3 -->
                                                             <div class="form-control-wrap mt-3">
                                                                <div class="custom-file">
                                                                    <?//if(strlen($rsmember['q6'])==0){?>
                                                                        <input type="hidden" id="filst3" name="filst3">
                                                                        <div id="filecnt3">
                                                                            <input type="file" data-max-file-size="2"  data-accepted-files=".docx, .doc, .pdf, .txt" class="custom-file-input" id="q8" name="q8">
                                                                            <label class="custom-file-label" for="customFile3" id="sfile3">Choose file</label>
                                                                            </div>
                                                                    <?//}else{?>
                                                                        <div id="filedb3">
                                                                        <label class="custom-file-label1" id="showfile3"></label>
                                                                        <label class="btn btn-sm btn-gray ml-2" id="showfilebtn3" onClick="ShowFile1()">Change File<label>
                                                                        </div>
                                                                    <?//}?>
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- e3 -->
                                                             <!-- 4 -->
                                                             <div class="form-control-wrap mt-3">
                                                                <div class="custom-file">
                                                                    <?//if(strlen($rsmember['q6'])==0){?>
                                                                        <input type="hidden" id="filst4" name="filst4">
                                                                        <div id="filecnt4">
                                                                            <input type="file" data-max-file-size="2"  data-accepted-files=".docx, .doc, .pdf, .txt" class="custom-file-input" id="q9" name="q9">
                                                                            <label class="custom-file-label" for="customFile4" id="sfile4">Choose file</label>
                                                                            </div>
                                                                    <?//}else{?>
                                                                        <div id="filedb4">
                                                                        <label class="custom-file-label1" id="showfile4"></label>
                                                                        <label class="btn btn-sm btn-gray ml-2" id="showfilebtn4" onClick="ShowFile1()">Change File<label>
                                                                        </div>
                                                                    <?//}?>
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- e4 -->
                                                             <!-- 5 -->
                                                             <div class="form-control-wrap mt-3">
                                                                <div class="custom-file">
                                                                    <?//if(strlen($rsmember['q6'])==0){?>
                                                                        <input type="hidden" id="filst5" name="filst5">
                                                                        <div id="filecnt5">
                                                                            <input type="file" data-max-file-size="2"  data-accepted-files=".docx, .doc, .pdf, .txt" class="custom-file-input" id="q10" name="q10">
                                                                            <label class="custom-file-label" for="customFile5" id="sfile5">Choose file</label>
                                                                            </div>
                                                                    <?//}else{?>
                                                                        <div id="filedb5">
                                                                        <label class="custom-file-label1" id="showfile5"></label>
                                                                        <label class="btn btn-sm btn-gray ml-2" id="showfilebtn5" onClick="ShowFile1()">Change File<label>
                                                                        </div>
                                                                    <?//}?>
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- e5 -->
                                                        </div>
                                                        </div>
                                                    </div>
                                                    
                                                                    </div>
                                                    <!-- <div class="alert alert-light mt-2">
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                                    <label class="form-label">Form Status</label>
                                                                    <ul class="custom-control-group g-3 align-center">
                                                                        <li>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" value="Completed" name="fstat" id="fstat1" "<?php  if ($rsmember['fs']=="Completed" || $fstat=="Completed") {echo " checked =\"yes\"";} ?>" required>
                                                                                <label class="custom-control-label" for="fstat1">Completed and Lock this form</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" value="Incomplete" name="fstat" id="fstat2" "<?php  if ($rsmember['fs']=="Incomplete" || $fstat=="Incomplete") {echo " checked =\"yes\"";} ?>" required>
                                                                                <label class="custom-control-label" for="fstat2">Incomplete</label>
                                                                            </div>
                                                                        </li>                                                                       
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                    </div> -->
                                                   
                                            </div>
                                            </div>
                                            <div class="alert alert-bi-file bg-gray-200  rounded-0">
                                                    <div class="col-md-12">
                                                    <?if($_COOKIE["previ"]!="SA"){?>   
                                                        <div class="form-group text-right ">
                                                           <? if($rsmember['fs']!='Completed'){?>
                                                            <button type="submit" name="sublate" class="btn btn-lg btn-secondary">Save and submit later</button>
                                                            <button type="submit" name="sub" class="btn btn-lg btn-danger"><em class="icon ni ni-lock-alt"></em>&nbsp;Save and submit</button>                                                            
                                                            <?}else{?>
                                                                <button type="submit" name="rset" class="btn btn-lg btn-secondary">Reset</button>
                                                            <?}?>
                                                        </div>
                                                        <?}else{?>
                                                            <a href='cselection.php?sel=2&pg=2&cid=<?=$center_id?>' class="btn btn-lg btn-secondary">Exit form</a>
                                                        <?}?>
                                                    </div>
                                                    </div>


                                        </div>
                                    </form>
                                    </div>
                                </div>

                            


                        </div>
                    </div>
                </div>
            </div>
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
        //For Word Count
            $("#q1,#q2,#q3,#q4,#q5").on('keyup', function() {
                var words = this.value.match(/\S+/g).length;
                if (words > 500) {
                    var trimmed = $(this).val().split(/\s+/, 500).join(" ");
                    $(this).val(trimmed + " ");
                }
                else {
                    var s=500-words;
                    //alert(this.id);
                    var tarID='#'+this.id+'_left';
                    $(tarID).text("You have "+ s +" words left.");
                }
            });

function ShowFile(){
    // File-1
    $("#filecnt").show();
    $("#filedb").hide();    
    $("#showfile").html('');
    $("#filst").val('');
// }
// function ShowFile2(){
    // File-2
    $("#filecnt2").show();
    $("#filedb2").hide();    
    $("#showfile2").html('');
    $("#filst2").val('');
// }
// function ShowFile3(){
    // File-3
    $("#filecnt3").show();
    $("#filedb3").hide();    
    $("#showfile3").html('');
    $("#filst3").val('');
// }
// function ShowFile4(){
    // File-4
    $("#filecnt4").show();
    $("#filedb4").hide();    
    $("#showfile4").html('');
    $("#filst4").val('');
// }
// function ShowFile5(){
    // File-5
    $("#filecnt5").show();
    $("#filedb5").hide();    
    $("#showfile5").html('');
    $("#filst5").val('');
}

  </script>
  <script>
$(document).ready(function() {
    //File-1
    if("<?=$rsmember['q6']?>"!='' || "<?=$q6?>"!='' || "<?=$filst?>"!='' ){        
        $("#filecnt").hide();
        $("#filedb").show();       
        var ftxt=("<?=$rsmember['q6']?>"!='')?"<?=$rsmember['q6']?>":("<?=$q6?>"!='')?"<?=$q6?>":"<?=$filst?>";
       // alert(ftxt);
        $("#showfile").html('<a href="'+ftxt+'" target="_blank">'+ftxt+'</a>');        
        $("#filst").val(ftxt);
    }
    else{
        $("#filecnt").show();
        $("#filedb").hide();
        $("#showfile").val('');     
        $("#filst").val('');
    }
    //File-2
    if("<?=$rsmember['q7']?>"!='' || "<?=$q7?>"!='' || "<?=$filst2?>"!='' ){        
        $("#filecnt2").hide();
        $("#filedb2").show();       
        var ftxt=("<?=$rsmember['q7']?>"!='')?"<?=$rsmember['q7']?>":("<?=$q7?>"!='')?"<?=$q7?>":"<?=$filst2?>";
       // alert(ftxt);
        $("#showfile2").html('<a href="'+ftxt+'" target="_blank">'+ftxt+'</a>');        
        $("#filst2").val(ftxt);
    }
    else{
        $("#filecnt2").show();
        $("#filedb2").hide();
        $("#showfile2").val('');     
        $("#filst2").val('');
    }
    //File-3
    if("<?=$rsmember['q8']?>"!='' || "<?=$q8?>"!='' || "<?=$filst3?>"!='' ){        
        $("#filecnt3").hide();
        $("#filedb3").show();       
        var ftxt=("<?=$rsmember['q8']?>"!='')?"<?=$rsmember['q8']?>":("<?=$q8?>"!='')?"<?=$q8?>":"<?=$filst3?>";
       // alert(ftxt);
        $("#showfile3").html('<a href="'+ftxt+'" target="_blank">'+ftxt+'</a>');        
        $("#filst3").val(ftxt);
    }
    else{
        $("#filecnt3").show();
        $("#filedb3").hide();
        $("#showfile3").val('');     
        $("#filst3").val('');
    }
    //File-4
    if("<?=$rsmember['q9']?>"!='' || "<?=$q9?>"!='' || "<?=$filst4?>"!='' ){        
        $("#filecnt4").hide();
        $("#filedb4").show();       
        var ftxt=("<?=$rsmember['q9']?>"!='')?"<?=$rsmember['q9']?>":("<?=$q9?>"!='')?"<?=$q9?>":"<?=$filst4?>";
       // alert(ftxt);
        $("#showfile4").html('<a href="'+ftxt+'" target="_blank">'+ftxt+'</a>');        
        $("#filst4").val(ftxt);
    }
    else{
        $("#filecnt4").show();
        $("#filedb4").hide();
        $("#showfile4").val('');     
        $("#filst4").val('');
    }
    //File-5
    if("<?=$rsmember['q10']?>"!='' || "<?=$q10?>"!='' || "<?=$filst5?>"!='' ){        
        $("#filecnt5").hide();
        $("#filedb5").show();       
        var ftxt=("<?=$rsmember['q10']?>"!='')?"<?=$rsmember['q10']?>":("<?=$q10?>"!='')?"<?=$q10?>":"<?=$filst5?>";
       // alert(ftxt);
        $("#showfile5").html('<a href="'+ftxt+'" target="_blank">'+ftxt+'</a>');        
        $("#filst5").val(ftxt);
    }
    else{
        $("#filecnt5").show();
        $("#filedb5").hide();
        $("#showfile5").val('');     
        $("#filst5").val('');
    }

 
function readURL(input,fn) {
        if (input.files && input.files[0]) {
            var file = input.files[0];
            //console.log(file.size);
            var sizeKB = file.size / 1024;
            
            //var ext = $('#q6').val().split('.').pop().toLowerCase();
            var ext = $(fn).val().split('.').pop().toLowerCase();
            if($.inArray(ext, ['docx','doc','pdf','txt']) == -1) {
                alert('Invalid extension! Allowed types  [docx/doc/pdf/txt]');          
            }else if(sizeKB > 5000.535){
            	alert("Can't be uploaded..."+"\n max upload size 5 MB");
          }
        }
    }
    
    $("#q6").change(function(){
        readURL(this,'#q6');        
    });
    $("#q7").change(function(){
        readURL(this,'#q7');        
    });
    $("#q8").change(function(){
        readURL(this,'#q8');        
    });
    $("#q9").change(function(){
        readURL(this,'#q9');        
    });
    $("#q10").change(function(){
        readURL(this,'#q10');        
    });
  });

  var styr=new Date().getFullYear()+1; //current year
//alert(new Date().getFullYear());
    for(var i=styr;i<=2029;i++){
        txt='July '+i+' - June '+(i+1);
        $("option[value='"+ txt +"']").prop('disabled', true);
    }

 var rp_array = <?php echo $rp_array; ?>;
 for(var i=0;i< rp_array.length;i++)
 $("option[value='"+ rp_array[i] +"']").prop('disabled', true);
   
 if('<?=strlen($RepPer)!=0?>'){
for (i = 0; i < document.form1.RepPer.options.length; i++)
    {

        if (document.form1.RepPer.options[i].value == "<?=$RepPer ?>")
        {
            document.form1.RepPer.options.selectedIndex = i;
            break;
        }
    }
   }
   else
   {
    for (i = 0; i < document.form1.RepPer.options.length; i++)
    {

        if (document.form1.RepPer.options[i].value == "<?=$rsmember['rp'] ?>")
        {
            document.form1.RepPer.options.selectedIndex = i;
            break;
        }
    }
   }
</script>
</body>

</html>