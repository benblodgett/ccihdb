<?
require("config.php");
require("valid.inc.php");
require('assets/pdf/tcpdf.php');
date_default_timezone_set("US/Eastern");
$datetime=date("d-m-Y h:i:s a", time());

$uname=$_COOKIE["uname"];

$editQuery=hex2bin($_GET['e']);
if(strlen($editQuery)!=0)
{    
    $sqlQuery="SELECT * FROM c36  WHERE sno='$editQuery'";  
    $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
    $rsmember=mysqli_fetch_array($pickQuery); 
}

if (isset($_POST['rset'])) {
    $redirect ="c36.php";
    $url = $hostname.$redirect;  
    header("Location:$url");  
    exit();  
}

if (isset($_POST['sub']) || isset($_POST['sublate'])) {
    $RepPer = $_POST['RepPer'];
    $q1_1 = $_POST['q1_1'];
    $q1_2_lv = $_POST['q1_2_lv'];
    $q1_2_uv = $_POST['q1_2_uv'];
    $q1_2_tv = $_POST['q1_2_tv'];
    $q2_1 = $_POST['q2_1'];
    $q2_2_lv = $_POST['q2_2_lv'];
    $q2_2_uv = $_POST['q2_2_uv'];
    $q2_2_tv = $_POST['q2_2_tv'];
    $q3_1 = $_POST['q3_1'];
    $q3_2 = $_POST['q3_2'];
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
    if(strlen($q1_1)==0 ){

        $error =$error."Specify, Indicator 1.1 "."<br/>";
        $errval = true;
    }

    if(strlen($q1_2_lv)==0 && strlen($q1_2_uv)==0 && strlen($q1_2_tv)==0){

        $error =$error."Specify, Indicator 1.2 "."<br/>";
        $errval = true;
    }
    if(strlen($q2_1)==0 ){

        $error =$error."Specify, Indicator 2.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q2_2_lv)==0 && strlen($q2_2_uv)==0 && strlen($q2_2_tv)==0){

        $error =$error."Specify, Indicator 2.2 "."<br/>";
        $errval = true;
    }
    if(strlen($q3_1)==0 ){

        $error =$error."Specify, Indicator 3.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q3_2)==0 ){

        $error =$error."Specify, Indicator 3.2 "."<br/>";
        $errval = true;
    }
    
    // if(strlen($RAss)==0 ){

    //     $error =$error."Specify, Risks/Assumptions "."<br/>";
    //     $errval = true;
    // }

}
    

    if ( $errval != true ) {
        $sqlQuery="SELECT * FROM c36 WHERE  rp='$RepPer'";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));
        if( mysqli_num_rows($result) > 0){
            $sqlQuery1="update c36 set q1_1=" . empty2null($q1_1) . ", q1_2_1a=" . empty2null($q1_2_lv) . ", q1_2_1b=" . empty2null($q1_2_uv) . ", q1_2_1c=" . empty2null($q1_2_tv) . ", q2_1=" . empty2null($q2_1) . ",q2_2_2a=" . empty2null($q2_2_lv) . ", q2_2_2b=" . empty2null($q2_2_uv) . ", q2_2_2c=" . empty2null($q2_2_tv) . ",q3_1=" . empty2null($q3_1) . ",q3_2=" . empty2null($q3_2) . ",mov='$MOV',ra='$RAss',fs='$fstat',uuser='$uname',udt='$datetime' where rp='$RepPer' ";
            $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
            sendMail($fstat,$RepPer,$CCIHCon);
            if($result1)
                $msg="The details has been updated successfully!";    
        }
        else{
                $sqlQuery1="Insert into c36(rp,q1_1,q1_2_1a,q1_2_1b,q1_2_1c,q2_1,q2_2_2a,q2_2_2b,q2_2_2c,q3_1,q3_2,mov, ra, fs, cuser, cdt,uuser,udt ) values ('$RepPer'," . empty2null($q1_1). "," . empty2null($q1_2_lv) . "," . empty2null($q1_2_uv) . "," . empty2null($q1_2_tv) . "," . empty2null($q2_1) . "," . empty2null($q2_2_lv) . "," . empty2null($q2_2_uv) . "," . empty2null($q2_2_tv) . "," . empty2null($q3_1) . "," . empty2null($q3_2) . ",'$MOV','$RAss','$fstat','$uname','$datetime','$uname','$datetime') ";
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
        $sqlQuery="SELECT * FROM c36 WHERE  rp='$rp'";
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
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>1. Provide Critical Care Training to at least 25 hospital nurses over the next 24 months in developing countries </b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >1.1 Number of individuals trained </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q1_1'].'</b></td>
                </tr>
                <tr>
                <td>1.2 Percent of trainees that apply skills to current work <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q1_2_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q1_2_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q1_2_1c'].'</b></td>
                </tr>
                <tr class="border_bottom">
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>2. Implement a critical care training curriculum for undergraduate nursing students in 3- 5 mission nursing schools over the next 24 months </b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >2.1 Number of individuals trained</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q2_1'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td>2.2 Percent of trainees that apply skills to current work <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q2_2_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q2_2_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q2_2_1c'].'</b></td>
                </tr>
                <tr class="border_bottom">
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr>
                <td colspan="2" ><b>3. Continue to support the surgical residency program in Malawi for the next 5 years </b></td>
                </tr>
                <tr>
                <td width="80%" >3.1 Number of current surgical residency students</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q3_1'].'</b></td>
                </tr>
                <tr>
                <td width="80%" >3.2 Number of surgical residency graduates</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q3_2'].'</b></td>
                </tr>               
                </table>
                </td>
                </tr>                
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr >
                <td colspan="2">MoV/Data collection <br/>&nbsp;&nbsp;&nbsp;    <b>'.$valu1['mov'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4" style="line-height: 1.7;">
                <tr >
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

// 
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



        }//end if-for record present

    } //end if
} //end function

function empty2null($value)
{
    return strlen($value) == 0 ? 'NULL' : $value;
}

$rparray = [];
$rp_array =0;
$rpresult=mysqli_query($CCIHCon,"SELECT rp FROM c36")or die(mysqli_error($CCIHCon));
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
                                    <a href="#" class="btn btn-warning btn-radus" >Quantitative</a>
                                    <a href="cselection.php?sel=2" class="btn btn-danger  btn-radus" >Qualitative</a>
                                    <a href="cselection.php?sel=2&pg=1" class="btn btn-secondary btn-radus" ><em class="icon ni ni-db-fill"></em>  View Existing data</a>
                                </div>
                                <?}?>
                                <div class="components-preview wide-md mx-auto">
                                <div class="alert alert-bi-file bg-primary text-white mb-0 rounded-0">
                                    <div class="ccih-block-head ccih-block-head-lg ">
                                        <div class="ccih-block-head-content">
                                            <h4 class="ccih-block-title fw-normal"><em class="icon ni ni-blank"></em> Medical Benevolence Foundation (MBF) - Quantitative</h4>
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
                                                                <select class="form-control form-select" id="RepPer" name="RepPer" data-placeholder="Select a option" required>
                                                                        <option label="empty" value=""></option>
                                                                        <option value="Target 2030" >Target 2030</option>
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
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 mb-1">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">1.  Provide Critical Care Training to at least 25 hospital nurses over the next 24 months in developing countries</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">

                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.1 Number of individuals trained</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q1_1" name="q1_1" value='<?if(strlen($q1_1)!=0) echo $q1_1; else echo $rsmember['q1_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.2 Percent of trainees that apply skills to current work</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q1_2_lv" name="q1_2_lv" value='<?if(strlen($q1_2_lv)!=0) echo $q1_2_lv; else echo $rsmember['q1_2_1a'];?>' placeholder="Achievement" onblur="q2(form1.q1_2_lv,form1.q1_2_uv,form1.q1_2_tv)"></li>
                                                                <li><input type="text" class="form-control " id="q1_2_uv" name="q1_2_uv" value='<?if(strlen($q1_2_uv)!=0) echo $q1_2_uv; else echo $rsmember['q1_2_1b'];?>' placeholder="Target" onblur="q2(form1.q1_2_lv,form1.q1_2_uv,form1.q1_2_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control " id="q1_2_tv" name="q1_2_tv" value='<?if(strlen($q1_2_tv)!=0) echo $q1_2_tv; else echo $rsmember['q1_2_1c'];?>' placeholder="% value" onblur="q2(form1.q1_2_lv,form1.q1_2_uv,form1.q1_2_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">2. Implement a critical care training curriculum for undergraduate nursing students in 3- 5 mission nursing schools over the next 24 months</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">2.1  Number of individuals trained</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q2_1" name="q2_1" value='<?if(strlen($q2_1)!=0) echo $q2_1; else echo $rsmember['q2_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">2.2 Percent of trainees that apply skills to current work</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q2_2_lv" name="q2_2_lv" value='<?if(strlen($q2_2_lv)!=0) echo $q2_2_lv; else echo $rsmember['q2_2_1a'];?>' placeholder="Achievement" onblur="q2(form1.q2_2_lv,form1.q2_2_uv,form1.q2_2_tv)"></li>
                                                                <li><input type="text" class="form-control " id="q2_2_uv" name="q2_2_uv" value='<?if(strlen($q2_2_uv)!=0) echo $q2_2_uv; else echo $rsmember['q2_2_1b'];?>' placeholder="Target" onblur="q2(form1.q2_2_lv,form1.q2_2_uv,form1.q2_2_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control " id="q2_2_tv" name="q2_2_tv" value='<?if(strlen($q2_2_tv)!=0) echo $q2_2_tv; else echo $rsmember['q2_2_1c'];?>' placeholder="% value" onblur="q2(form1.q2_2_lv,form1.q2_2_uv,form1.q2_2_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px   ">3. Continue to support the surgical residency program in Malawi for the next 5 years</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">3.1 Number of current surgical residency students</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q3_1" name="q3_1" value='<?if(strlen($q3_1)!=0) echo $q3_1; else echo $rsmember['q3_1'];?>'>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">3.2 Number of surgical residency graduates</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q3_2" name="q3_2" value='<?if(strlen($q3_2)!=0) echo $q3_2; else echo $rsmember['q3_2'];?>'>
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
                                                            <a href='cselection.php?sel=2&pg=2&cid=36' class="btn btn-lg btn-secondary">Exit form</a>
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
$("#form1").validate({
    rules:{         

        q1_1:{
            digits:true,  
            min:0,
            max:999,            
        },
        q1_2_lv:{
                digits:true,
                min:0,
                max:99999,                
            },            
		q1_2_uv:{
			digits:true,  
			min:0,
			max:99999,                
		},
		q1_2_tv:{
			number:true,
			min:0,
			max:100,                          
        },
        q2_1:{
            digits:true, 
            min:0,
            max:999,              
        },            
        q2_2_lv:{
                digits:true,
                min:0,
                max:99999,                
            },            
		q2_2_uv:{
			digits:true,  
			min:0,
			max:99999,                
		},
		q2_2_tv:{
			number:true,
			min:0,
			max:100,                 
		},            
        q3_1:{
            digits:true,  
            min:0,
            max:999,             
        },
        q3_2:{
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