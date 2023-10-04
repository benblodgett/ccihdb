<?
require("config.php");
require("valid.inc.php");
require('assets/pdf/tcpdf.php');
require('vendor/autoload.php');

date_default_timezone_set("US/Eastern");
$datetime=date("d-m-Y h:i:s a", time());

$uname=$_COOKIE["uname"];

$editQuery=hex2bin($_GET['e']);
if(strlen($editQuery)!=0)
{    
    $sqlQuery="SELECT * FROM c1  WHERE sno='$editQuery'";  
    $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
    $rsmember=mysqli_fetch_array($pickQuery); 
}
if (isset($_POST['rset'])) {
    $redirect ="c1.php";
    $url = $hostname.$redirect;  
    header("Location:$url");  
    exit();  
}


if (isset($_POST['sub']) || isset($_POST['sublate'])) {
    $RepPer = $_POST['RepPer'];
    $rp_dummy = $_POST['rp_dummy'];
    // $q1_1 = $_POST['q1_1'];
    // $q1_2 = $_POST['q1_2'];
    // $q1_3 = $_POST['q1_3'];
    // $q21_lv = $_POST['q21_lv'];
    // $q21_uv = $_POST['q21_uv'];
    // $q21_tv = $_POST['q21_tv'];
    // $q22_lv = $_POST['q22_lv'];
    // $q22_uv = $_POST['q22_uv'];
    // $q22_tv = $_POST['q22_tv'];
    // $q23_lv = $_POST['q23_lv'];
    // $q23_uv = $_POST['q23_uv'];
    // $q23_tv = $_POST['q23_tv'];
    // $q24_lv = $_POST['q24_lv'];
    // $q24_uv = $_POST['q24_uv'];
    // $q24_tv = $_POST['q24_tv'];
    // $q3_1 = $_POST['q3_1'];
    // $q4_1 = $_POST['q4_1'];
    // $q5_1 = $_POST['q5_1'];
    $q6_1 = $_POST['q6_1'];
    $q7_1 = $_POST['q7_1'];
    $q8_1 = $_POST['q8_1'];
    $MOV = str_replace("'", ' ', $_POST['MOV']);  
    $RAss = str_replace("'", ' ', $_POST['RAss']);  

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
    // if(strlen($q1_1)==0 ){

    //     $error =$error."Specify, Indicator 1.1 "."<br/>";
    //     $errval = true;
    // }

    // if(strlen($q1_2)==0 ){

    //     $error =$error."Specify, Indicator 1.2 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q1_3)==0 ){

    //     $error =$error."Specify, Indicator 1.3 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q21_lv)==0 && strlen($q21_uv)==0 && strlen($q21_tv)==0){

    //     $error =$error."Specify, Indicator 2.1 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q22_lv)==0 && strlen($q22_uv)==0 && strlen($q22_tv)==0){

    //     $error =$error."Specify, Indicator 2.2 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q23_lv)==0 && strlen($q23_uv)==0 && strlen($q23_tv)==0){

    //     $error =$error."Specify, Indicator 2.3 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q24_lv)==0 && strlen($q24_uv)==0 && strlen($q24_tv)==0){

    //     $error =$error."Specify, Indicator 2.4 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q3_1)==0 ){

    //     $error =$error."Specify, Indicator 3.1 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q4_1)==0 ){

    //     $error =$error."Specify, Indicator 4.1 "."<br/>";
    //     $errval = true;
    // }
    // if(strlen($q5_1)==0 ){

    //     $error =$error."Specify, Indicator 5.1 "."<br/>";
    //     $errval = true;
    // }
    if(strlen($q6_1)==0 ){

        $error =$error."Specify, Indicator 6.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q7_1)==0 ){

        $error =$error."Specify, Indicator 7.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q8_1)==0 ){

        $error =$error."Specify, Indicator 8.1 "."<br/>";
        $errval = true;
    }
    // if(strlen($RAss)==0 ){

    //     $error =$error."Specify, Risks/Assumptions "."<br/>";
    //     $errval = true;
    // }

}
    

    if ( $errval != true ) {
        $sqlQuery="SELECT * FROM c1 WHERE  rp='$RepPer'";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));
        if( mysqli_num_rows($result) > 0){
            $sqlQuery1="update c1 set q1_1=" . empty2null($q1_1) . ", q1_2=" . empty2null($q1_2) . ", q1_3=" . empty2null($q1_3) . ",q2_1a=" . empty2null($q21_lv) . ",q2_1b=" . empty2null($q21_uv) . ",q2_1c=" . empty2null($q21_tv) . ",q2_2a=" . empty2null($q22_lv) . ",q2_2b=" . empty2null($q22_uv) . ",q2_2c=" . empty2null($q22_tv) . ",q2_3a=" . empty2null($q23_lv) . ",q2_3b=" . empty2null($q23_uv) . ",q2_3c=" . empty2null($q23_tv) . ",q2_4a=" . empty2null($q24_lv) . ",q2_4b=" . empty2null($q24_uv) . ",q2_4c=" . empty2null($q24_tv) . ",q3_1=" . empty2null($q3_1) . ",q4_1=" . empty2null($q4_1) . ",q5_1=" . empty2null($q5_1) .",q6_1=" . empty2null($q6_1) .",q7_1=" . empty2null($q7_1) .",q8_1=" . empty2null($q8_1) . ",mov='$MOV',ra='$RAss',fs='$fstat',uuser='$uname',udt='$datetime' where rp='$RepPer' ";
            $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
            sendMail($fstat,$RepPer,$CCIHCon);
            if($result1)
                $msg="The details has been updated successfully!";    
        }
        else{
                $sqlQuery1="Insert into c1(rp,q1_1,q1_2,q1_3,q2_1a,q2_1b,q2_1c,q2_2a,q2_2b,q2_2c,q2_3a,q2_3b,q2_3c,q2_4a,q2_4b,q2_4c,q3_1,q4_1,q5_1,q6_1,q7_1,q8_1,mov, ra, fs, cuser, cdt,uuser,udt ) values ('$RepPer'," . empty2null($q1_1). "," . empty2null($q1_2) . "," . empty2null($q1_3) . "," . empty2null($q21_lv) . "," . empty2null($q21_uv) . "," . empty2null($q21_tv) . "," . empty2null($q22_lv)."," . empty2null($q22_uv) . "," . empty2null($q22_tv) . "," . empty2null($q23_lv) . "," . empty2null($q23_uv) . "," . empty2null($q23_tv) . "," . empty2null($q24_lv) . "," . empty2null($q24_uv) . "," . empty2null($q24_tv) . "," . empty2null($q3_1) . "," . empty2null($q4_1) . "," . empty2null($q5_1) . "," . empty2null($q6_1) . "," . empty2null($q7_1) . "," . empty2null($q8_1) . ",'$MOV','$RAss','$fstat','$uname','$datetime','$uname','$datetime') ";
                $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
                sendMail($fstat,$RepPer,$CCIHCon);
                if($result1)
                    $msg="The information has been added successfully!";
        }
    }    

}
function sendMail($val,$rp,$CCIHCon)
{    
    if($val=='Completed'){
        $sqlQuery="SELECT * FROM c1 WHERE  rp='$rp'";
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));
        if( mysqli_num_rows($result) > 0){
            $valu1=mysqli_fetch_array($result);
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('CCIH');
            $pdf->SetTitle('30x30 Health Systems Initiative ');
            $pdf->SetSubject('Quantitative Indicators');
            
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
                <tr><td colspan="2" style="text-align:center"><b>Final Submission (Quantitative)</b></td></tr>
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
                <tr>
                <td colspan="2" ><b>6. SHGs in 130 villages will develop and implement evidence based advocacy plans to influence duty bearers in addressing identified priority WASH issues in their villages. </b></td>
                </tr>
                <tr>
                <td width="80%" >6.1 Number of households practicing recommended WASH behaviors and NTD protection measures </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q6_1'].'</b></td>
                </tr>               
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr>
                <td colspan="2" ><b>7. SHGs in 130 villages will support people affected by leprosy and lymphatic filariasis to manage their disease condition and access social entitlements.  </b></td>
                </tr>
                <tr>
                <td width="80%" >7.1 Number of people affected by leprosy and lymphatic filariasis managing their disease condition and accessing their social entitlements </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q7_1'].'</b></td>
                </tr>               
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr>
                <td colspan="2" ><b> 8. Create learning documents and research publications to increase knowledge and awareness on WASH & NTDs </b></td>
                </tr>
                <tr>
                <td width="80%" >8.1 Number of learning documents research publications from this project </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q8_1'].'</b></td>
                </tr>               
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr>
                <td colspan="2">MoV/Data collection <br/>&nbsp;&nbsp;&nbsp;    <b>'.$valu1['mov'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr>
                <td colspan="2">Risks/Assumptions <br/>&nbsp;&nbsp;&nbsp;    <b>'.$valu1['ra'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                
                </table>';
                
                $pdf->writeHTML($html);
    
            //$pdf->lastPage();
            // $pdf->Output('Doc.pdf', 'D'); // for online generate
            //Close and output PDF document
            $pdf->Output(__DIR__ . '/pdfreport/QuantitativeFinalReport.pdf', 'F');
    
//Ending Pdf conversion *****************/

//Sending email
$to = strip_tags($_COOKIE["eid"]) ;

//sender
$from = constant("ADMIN_EMAIL");
$fromName = '30x30 Health Systems Initiative';
//email subject
$subject = '30x30 Health Systems Initiative Final Submission-Quantitative'; 
   
//attachment file path
$file = "pdfreport/QuantitativeFinalReport.pdf";
$message ='<p>Dear '.strip_tags($_COOKIE["uname"]).',<br/></p>';
$message .='<p>Greetings!. We are happy to inform you that the final version of Quantitative Indicators have been submitted successfully for the reporting period '.strip_tags($valu1['rp'])."</p>";
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
/*
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
*/
$returnpath = "-f" . $from;

//send email
//$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//Send grid Function -Start
$email = new \SendGrid\Mail\Mail();
$email->setFrom($from, $fromName);
$email->setSubject($subject);
$email->addTo($to);
$email->addCc(CC_EMAIL);
$email->addContent("text/html", $message);

$filename = basename($file);
$file_encoded = base64_encode(file_get_contents($file));
$attachment = new SendGrid\Mail\Attachment();
$attachment->setType("application/pdf");
$attachment->setContent($file_encoded);
$attachment->setDisposition("attachment");
$attachment->setFilename($filename);
$email->addAttachment($attachment);


$sendgrid = new \SendGrid(SENDGRID_API_KEY);
$response = $sendgrid->send($email);

//Send grid Function -End



        }//end if-for record present

    } //end if
} //end function

function empty2null($value)
{
    return strlen($value) == 0 ? 'NULL' : $value;
}

$rparray = [];
$rp_array =0;
$rpresult=mysqli_query($CCIHCon,"SELECT rp FROM c1")or die(mysqli_error($CCIHCon));
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
                       
                        <div class="ccih-content-body mt-0">                        
                            <div class="ccih-content-wrap"> 
                                <?if($_COOKIE["previ"]!="SA"){?>                           
                                <div class="text-right" >
                                    <a href="#" class="btn btn-warning btn-radus" >Quantitative</a>
                                    <a href="cselection.php?sel=2" class="btn btn-danger  btn-radus" >Qualitative</a>
                                    <a href="cselection.php?sel=2&pg=1" class="btn btn-secondary btn-radus" ><em class="icon ni ni-db-fill"></em>  View Existing data</a>
                                </div>
                                <?}?>
                                <div class="components-preview wide-md mx-auto">
                                <div class="alert alert-bi-file bg-primary text-white mb-0 rounded-0">
                                    <div class="ccih-block-head ccih-block-head-lg ">
                                        <div class="ccih-block-head-content">
                                            <h4 class="ccih-block-title fw-normal"><em class="icon ni ni-blank"></em> American Leprosy Missions - Quantitative</h4>
                                        </div>
                                    </div>
                                </div>
                                
                                    <!-- .ccih-block-head -->
                                    <form id="form1" name="form1" method="post" action="<?echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-validate">
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
                                                                <label class="form-label" for="default-01">Reporting period</label>
                                                                <div class="form-control-wrap ">
                                                                <input type="hidden" class="form-control" id="rp_dummy" name="rp_dummy" value='<?if(strlen($RepPer)!=0) echo $RepPer; else echo $rsmember['RepPer'];?>'>
                                                                    <select class="form-control form-select" id="RepPer" name="RepPer" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                    <!-- <hr class="preview-hr"> -->
                                                    <!-- <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 mb-1">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px ">1. Ensure WHO’s multi-drug therapy (MDT) program for leprosy  </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">

                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.1 No. of new leprosy cases diagnosed and referred for MDT to their nearest government healthcare facility  </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q1_1" name="q1_1" value='<?if(strlen($q1_1)!=0) echo $q1_1; else echo $rsmember['q1_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.2 No. of OP consultations for specialized leprosy care </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q1_2" name="q1_2" value='<?if(strlen($q1_2)!=0) echo $q1_2; else echo $rsmember['q1_2'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.3 No. of IP admissions for specialized leprosy care </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q1_3" name="q1_3" value='<?if(strlen($q1_3)!=0) echo $q1_3; else echo $rsmember['q1_3'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px ">2. Participation in international and national NGOs in addressing WASH initiatives, providing technical assistance to the government on leprosy and other NTDs.</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="q21_lw">2.1 Proportion of households having access to safe drinking water</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q21_lv" name="q21_lv" value='<?if(strlen($q21_lv)!=0) echo $q21_lv; else echo $rsmember['q2_1a'];?>' placeholder="Achievement" onblur="q2(form1.q21_lv,form1.q21_uv,form1.q21_tv)"></li>
                                                                <li><input type="text" class="form-control " id="q21_uv" name="q21_uv" value='<?if(strlen($q21_uv)!=0) echo $q21_uv; else echo $rsmember['q2_1b'];?>' placeholder="Target" onblur="q2(form1.q21_lv,form1.q21_uv,form1.q21_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control " id="q21_tv" name="q21_tv" value='<?if(strlen($q21_tv)!=0) echo $q21_tv; else echo $rsmember['q2_1c'];?>' placeholder="% value" onblur="q2(form1.q21_lv,form1.q21_uv,form1.q21_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">2.2 Proportion of households  with 100% toilet usage </label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q22_lv" name="q22_lv" value='<?if(strlen($q22_lv)!=0) echo $q22_lv; else echo $rsmember['q2_2a'];?>' placeholder="Achievement" onblur="q2(form1.q22_lv,form1.q22_uv,form1.q22_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q22_uv" name="q22_uv" value='<?if(strlen($q22_uv)!=0) echo $q22_uv; else echo $rsmember['q2_2b'];?>' placeholder="Target" onblur="q2(form1.q22_lv,form1.q22_uv,form1.q22_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q22_tv" name="q22_tv" value='<?if(strlen($q22_tv)!=0) echo $q22_tv; else echo $rsmember['q2_2c'];?>' placeholder="% value" onblur="q2(form1.q22_lv,form1.q22_uv,form1.q22_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">2.3 Proportion of households practicing handwashing with soap at recommended critical times </label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q23_lv" name="q23_lv" value='<?if(strlen($q23_lv)!=0) echo $q23_lv; else echo $rsmember['q2_3a'];?>' placeholder="Achievement" onblur="q2(form1.q23_lv,form1.q23_uv,form1.q23_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q23_uv" name="q23_uv" value='<?if(strlen($q23_uv)!=0) echo $q23_uv; else echo $rsmember['q2_3b'];?>' placeholder="Target" onblur="q2(form1.q23_lv,form1.q23_uv,form1.q23_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q23_tv" name="q23_tv"  value='<?if(strlen($q23_tv)!=0) echo $q23_tv; else echo $rsmember['q2_3c'];?>' placeholder="% value" onblur="q2(form1.q23_lv,form1.q23_uv,form1.q23_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">2.4 Proportion of households using mosquito nets </label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q24_lv" name="q24_lv" value='<?if(strlen($q24_lv)!=0) echo $q24_lv; else echo $rsmember['q2_4a'];?>' placeholder="Achievement" onblur="q2(form1.q24_lv,form1.q24_uv,form1.q24_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q24_uv" name="q24_uv" value='<?if(strlen($q24_uv)!=0) echo $q24_uv; else echo $rsmember['q2_4b'];?>' placeholder="Target" onblur="q2(form1.q24_lv,form1.q24_uv,form1.q24_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q24_tv" name="q24_tv" value='<?if(strlen($q24_tv)!=0) echo $q24_tv; else echo $rsmember['q2_4c'];?>' placeholder="% value" onblur="q2(form1.q24_lv,form1.q24_uv,form1.q24_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px ">3. Work with Ministries of Health to strengthen the national programs Work with Disabled People’s Organizations (DPOs) and CBOs. Work with FBOs and church entities </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">3.1 No. of  government departments/ programmes collaborated with  </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q3_1" name="q3_1" value='<?if(strlen($q3_1)!=0) echo $q3_1; else echo $rsmember['q3_1'];?>'>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px ">4. Work with the WHO on transmission issues, basic sciences research, and training and capacity building of higher-level government functionaries in leprosy and other Neglected Tropical Diseases (NTDs). </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.1 No. of evidence based reports shared with government for necessary action e.g. WASH and NTD mapping and data </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q4_1" name="q4_1" value='<?if(strlen($q4_1)!=0) echo $q4_1; else echo $rsmember['q4_1'];?>'>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4">
                                                        <span class="preview-title-sm fw-bold  text-danger fs-15px ">5. Support specialized referral hospitals as centers of excellence through infrastructure development, expertise retention through training and capacity building, and leadership development </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">5.1 No. of partner staff trained- technical, leadership, formal post graduate etc. </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q5_1" name="q5_1" value='<?if(strlen($q5_1)!=0) echo $q5_1; else echo $rsmember['q5_1'];?>'>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4">
                                                        <span class="preview-title-sm fw-bold  text-danger fs-15px ">6. SHGs in 130 villages will develop and implement evidence based advocacy plans to influence duty bearers in addressing identified priority WASH issues in their villages. </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">6.1 Number of households practicing recommended WASH behaviors and NTD protection measures </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q6_1" name="q6_1" value='<?if(strlen($q6_1)!=0) echo $q6_1; else echo $rsmember['q6_1'];?>'>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4">
                                                        <span class="preview-title-sm fw-bold  text-danger fs-15px ">7. SHGs in 130 villages will support people affected by leprosy and lymphatic filariasis to manage their disease condition and access social entitlements. </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">7.1 Number of people affected by leprosy and lymphatic filariasis managing their disease condition and accessing their social entitlements </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q7_1" name="q7_1" value='<?if(strlen($q7_1)!=0) echo $q7_1; else echo $rsmember['q7_1'];?>'>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4">
                                                        <span class="preview-title-sm fw-bold  text-danger fs-15px ">8. Create learning documents and research publications to increase knowledge and awareness on WASH & NTDs </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">8.1 Number of learning documents research publications from this project </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q8_1" name="q8_1" value='<?if(strlen($q8_1)!=0) echo $q8_1; else echo $rsmember['q8_1'];?>'>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                   <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">MoV/Data collection (optional)</label>
                                                            <div class="form-control-wrap">
                                                            <textarea class="form-control" name="MOV"><?if(strlen($MOV)!=0) echo $MOV; else echo $rsmember['mov'];?></textarea>
                                                            <span class="form-note text-primary">Means of verification are the documents/tools used and processes followed to collect the data necessary to report the indicators</span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">Risks/Assumptions (optional)</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" name="RAss"><?if(strlen($RAss)!=0) echo $RAss; else echo $rsmember['ra'];?></textarea>
                                                                <span class="form-note text-primary">The risk/assumptions describe the situations, events, conditions or decisions which are necessary for the achievement of the proposed activity/objective, but which are largely or completely beyond the control of the project's management.</span>
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
                                            <!-- card-inner -->
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
                                                            <a href='cselection.php?sel=2&pg=2&cid=1' class="btn btn-lg btn-secondary">Exit form</a>
                                                        <?}?>
                                                    </div>
                                                    </div>
                                                
                                            </div>
                                            <!--card  -->
                                            
                                           

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
    $("#form1").validate({
        rules:{        
            // q1_1:{
            //     digits:true,  
            //     min:0,
            //     max:99999,            
            // },
            // q1_2:{
            //     digits:true,  
            //     min:0,
            //     max:99999,             
            // },
            // q1_3:{
            //     digits:true,  
            //     min:0,
            //     max:99999,              
            // },
            // q21_lv:{
            //     digits:true, 
            //     min:0,
            //     max:99999,                
            // },            
            // q21_uv:{
            //     digits:true,  
            //     min:0,
            //     max:99999,                
            // },
            // q21_tv:{
            //     number:true, 
            //     min:0,
            //     max:100,               
            // },
            // q22_lv:{
            //     digits:true, 
            //     min:0,
            //     max:99999,             
            // },            
            // q22_uv:{
            //     digits:true,  
            //     min:0,
            //     max:99999,             
            // },
            // q22_tv:{
            //     number:true, 
            //     min:0,
            //     max:100,               
            // },
            // q23_lv:{
            //     digits:true, 
            //     min:0,
            //     max:99999,                
            // },            
            // q23_uv:{
            //     digits:true,  
            //     min:0,
            //     max:99999,            
            // },
            // q23_tv:{
            //     number:true, 
            //     min:0,
            //     max:100,               
            // },
            // q24_lv:{
            //     digits:true, 
            //     min:0,
            //     max:99999,         
            // },            
            // q24_uv:{
            //     digits:true,  
            //     min:0,
            //     max:99999,             
            // },
            // q24_tv:{
            //     number:true, 
            //     min:0,
            //     max:100,               
            // },
            // q3_1:{
            //     digits:true,  
            //     min:0,
            //     max:999,             
            // },
            // q4_1:{
            //     digits:true,  
            //     min:0,
            //     max:999,                
            // },
            // q5_1:{
            //     digits:true,  
            //     min:0,
            //     max:9999,      
                           
            // },
            q6_1:{
                digits:true,  
                min:0,
                max:99999,             
            },
            q7_1:{
                digits:true,  
                min:0,
                max:999,                
            },
            q8_1:{
                digits:true,  
                min:0,
                max:999, 
            }   
            
        },
messages: {},
highlight:function (element) {
    $(element)
            .closest('.form-group').removeClass('has-success').addClass('has-error');
},

unhighlight:function (element) {
    $(element)
            .closest('.form-group').removeClass('has-error');
}

});
function q2(achiv, target, perval) {
    if(achiv.value!='' && target.value!='')
        {
            perval.value=((parseInt(achiv.value)/parseInt(target.value))*100).toFixed(2);
        }
       
    }
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