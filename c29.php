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
    $sqlQuery="SELECT * FROM c29  WHERE sno='$editQuery'";  
    $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
    $rsmember=mysqli_fetch_array($pickQuery); 
}

if (isset($_POST['rset'])) {
    $redirect ="c29.php";
    $url = $hostname.$redirect;  
    header("Location:$url");  
    exit();  
}

if (isset($_POST['sub']) || isset($_POST['sublate'])) {
    $RepPer = $_POST['RepPer'];
    $q1_1 = $_POST['q1_1'];
    $q1_2 = $_POST['q1_2'];
    $q2_1 = $_POST['q2_1'];
    $q3_1 = $_POST['q3_1'];
    $q41_lv = $_POST['q41_lv'];
    $q41_uv = $_POST['q41_uv'];
    $q4_1 = $_POST['q4_1'];
    $q4_2 = $_POST['q4_2'];
    $q43a1_lv = $_POST['q43a1_lv'];
    $q43a2_uv = $_POST['q43a2_uv'];
    $q4_3a = $_POST['q4_3a'];
    $q43b1_lv = $_POST['q43b1_lv'];
    $q43b2_uv = $_POST['q43b2_uv'];
    $q4_3b = $_POST['q4_3b'];
    $q43c1_lv = $_POST['q43c1_lv'];
    $q43c2_uv = $_POST['q43c2_uv'];
    $q4_3c = $_POST['q4_3c'];
    $q4_4 = $_POST['q4_4'];
    $q5_1 = $_POST['q5_1'];
    $q5_2 = $_POST['q5_2'];
    $q61_lv = $_POST['q61_lv'];
    $q61_uv = $_POST['q61_uv'];
    $q6_1 = $_POST['q6_1'];
    $q62_lv = $_POST['q62_lv'];
    $q62_uv = $_POST['q62_uv'];
    $q6_2 = $_POST['q6_2'];
    $q63_lv = $_POST['q63_lv'];
    $q63_uv = $_POST['q63_uv'];
    $q6_3 = $_POST['q6_3'];
    $q7_1 = $_POST['q7_1'];
        
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
    
    if(strlen($q1_2)==0 ){

        $error =$error."Specify, Indicator 1.2 "."<br/>";
        $errval = true;
    }   
    if(strlen($q2_1)==0 ){

        $error =$error."Specify, Indicator 2.1 "."<br/>";
        $errval = true;
    }   
    if(strlen($q3_1)==0 ){

        $error =$error."Specify, Indicator 3.1 "."<br/>";
        $errval = true;
    }  
    if(strlen($q41_lv)==0 && strlen($q41_uv)==0 && strlen($q4_1)==0 ){

        $error =$error."Specify, Indicator 4.1 "."<br/>";
        $errval = true;
    }  
    if(strlen($q4_2)==0 ){

        $error =$error."Specify, Indicator 4.2 "."<br/>";
        $errval = true;
    } 
    if(strlen($q4_3a)==0 && strlen($q4_3b)==0 && strlen($q4_3c)==0)
    {
        $error =$error."Specify, Indicator 4.3A "."<br/> Specify, Indicator 4.3B "."<br/> Specify, Indicator 4.3C "."<br/>";
        $errval = true;
    }
    else if(strlen($q4_3c)==0 && strlen($q4_3a)==0 ){

        $error =$error."Specify, Indicator 4.3A "."<br/>";
        $errval = true;
    }
    else if(strlen($q4_3c)==0 && strlen($q4_3b)==0 ){

        $error =$error."Specify, Indicator 4.3B "."<br/>";
        $errval = true;
    }
    else if((strlen($q4_3a)==0 || strlen($q4_3b)==0) && strlen($q4_3c)==0 ){

        $error =$error."Specify, Indicator 4.3C "."<br/>";
        $errval = true;
    }   
    if(strlen($q4_4)==0 ){

        $error =$error."Specify, Indicator 4.4"."<br/>";
        $errval = true;
    }  
    if(strlen($q5_1)==0 ){

        $error =$error."Specify, Indicator 5.1"."<br/>";
        $errval = true;
    } 
    if(strlen($q5_2)==0 ){

        $error =$error."Specify, Indicator 5.2"."<br/>";
        $errval = true;
    } 
    if(strlen($q61_lv)==0 && strlen($q61_uv)==0 && strlen($q6_1)==0 ){

        $error =$error."Specify, Indicator 6.1"."<br/>";
        $errval = true;
    } 
    if(strlen($q62_lv)==0 && strlen($q62_uv)==0 && strlen($q6_2)==0 ){

        $error =$error."Specify, Indicator 6.2"."<br/>";
        $errval = true;
    } 
    if(strlen($q63_lv)==0 && strlen($q63_uv)==0 && strlen($q6_3)==0 ){

        $error =$error."Specify, Indicator 6.3"."<br/>";
        $errval = true;
    } 
    if(strlen($q7_1)==0 ){

        $error =$error."Specify, Indicator 7.1"."<br/>";
        $errval = true;
    } 
    
    // if(strlen($RAss)==0 ){

    //     $error =$error."Specify, Risks/Assumptions "."<br/>";
    //     $errval = true;
    // }

}
    

    if ( $errval != true ) {
        $sqlQuery="SELECT * FROM c29 WHERE  rp='$RepPer'";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));
        if( mysqli_num_rows($result) > 0){
            $sqlQuery1="update c29 set q1_1=" . empty2null($q1_1) . ",q1_2=" . empty2null($q1_2) . ",q2_1=" . empty2null($q2_1) . ", q3_1=" . empty2null($q3_1) . ",q4_1a=" . empty2null($q41_lv) . ",q4_1b=" . empty2null($q41_uv) . ",q4_1c=" . empty2null($q4_1) . ",q4_2=" . empty2null($q4_2) . ",q4_3a1=" . empty2null($q43a1_lv) . ",q4_3a2=" . empty2null($q43a2_uv) . ",q4_3a3=" . empty2null($q4_3a) . ",q4_3b1=" . empty2null($q43b1_lv) . ",q4_3b2=" . empty2null($q43b2_uv) . ",q4_3b3=" . empty2null($q4_3b) . ", q4_3c1=" . empty2null($q43c1_lv) . ",q4_3c2=" . empty2null($q43c2_uv) . ",q4_3c3=" . empty2null($q4_3c) . ",q4_4=" . empty2null($q4_4) . ", q5_1=" . empty2null($q5_1) . ",q5_2=" . empty2null($q5_2) . ",q6_1a=" . empty2null($q61_lv) . ",q6_1b=" . empty2null($q61_uv) . ",q6_1c=" . empty2null($q6_1) . ",q6_2a=" . empty2null($q62_lv) . ",q6_2b=" . empty2null($q62_uv) . ",q6_2c=" . empty2null($q6_2) . ",q6_3a=" . empty2null($q63_lv) . ",q6_3b=" . empty2null($q63_uv) . ",q6_3c=" . empty2null($q6_3) . ",q7_1=" . empty2null($q7_1) . ",mov='$MOV',ra='$RAss',fs='$fstat',uuser='$uname',udt='$datetime' where rp='$RepPer' ";
            $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
            sendMail($fstat,$RepPer,$CCIHCon);
            if($result1)
                $msg="The details has been updated successfully!";    
        }
        else{
                $sqlQuery1="Insert into c29(rp,q1_1,q1_2,q2_1,q3_1,q4_1a,q4_1b,q4_1c,q4_2,q4_3a1,q4_3a2,q4_3a3,q4_3b1,q4_3b2,q4_3b3,q4_3c1,q4_3c2,q4_3c3,q4_4,q5_1,q5_2,q6_1a,q6_1b,q6_1c,q6_2a,q6_2b,q6_2c,q6_3a,q6_3b,q6_3c,q7_1,mov, ra, fs, cuser, cdt,uuser,udt ) values ('$RepPer'," . empty2null($q1_1) . "," . empty2null($q1_2) . "," . empty2null($q2_1) . "," . empty2null($q3_1) . "," . empty2null($q41_lv) . "," . empty2null($q41_uv) . "," . empty2null($q4_1) . "," . empty2null($q4_2) . "," . empty2null($q43a1_lv) . "," . empty2null($q43a2_uv) . "," . empty2null($q4_3a) . "," . empty2null($q43b1_lv) . "," . empty2null($q43b2_uv) . "," . empty2null($q4_3b) . "," . empty2null($q43c1_lv) . "," . empty2null($q43c2_uv) . "," . empty2null($q4_3c) . "," . empty2null($q4_4) . "," . empty2null($q5_1) . "," . empty2null($q5_2) . "," . empty2null($q61_lv) . "," . empty2null($q61_uv) . "," . empty2null($q6_1) . "," . empty2null($q62_lv) . "," . empty2null($q62_uv) . "," . empty2null($q6_2) . "," . empty2null($q63_lv) . "," . empty2null($q63_uv) . "," . empty2null($q6_3) . "," . empty2null($q7_1) . ",'$MOV','$RAss','$fstat','$uname','$datetime','$uname','$datetime') ";
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
        $sqlQuery="SELECT * FROM c29 WHERE  rp='$rp'";
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
                <td colspan="2" ><b> 1. To provide significant upgrades to available water by piping potable water from GivePower’s desalination center and electric power system by installing solar panels at the LaGonave Wesleyan Hospital.</b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >1.1 Number of departments with safe water and electricity</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q1_1'].'</b></td>
                </tr>
                <tr >
                <td width="80%" >1.2 Number of functioning handwashing facilities </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q1_2'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b> 2. To support RN and MD residents’ transition from advanced beginner to competent professional through the social service residency program.</b></td>
                </tr>
                <tr >
                <td width="80%" >2.1 Number of RN and MD residents completing social services residence programme</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q2_1'].'</b></td>
                </tr>                
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b> 3. To do a comprehensive evaluation, including (1) water, waste, electrical, and mechanical infrastructure assessment, (2) security and safety assessment; (3) clinical and operational service assessment; and (4) clinical referral and gap assessment and develop recommendation for short term and long-range strategies (growth trend) and capital projects.</b></td>
                </tr>
                <tr >
                <td width="80%" >3.1 Number of recommendations executed as informed by the comprehensive evaluation (Data used to inform decision making)</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q3_1'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b> 4. With recommendation from a comprehensive evaluation , implement the financial section of the 5-year strategic plan, including providing cost effective care and developing local partnerships, including schools, orphanages, and other NGO partners related to health</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">4.1 Percentage of Cost savings achieved for the organization<br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q4_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q4_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q4_1c'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >4.2 Financial health: total revenue/ total expenditure</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q4_2'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">4.3A Percentage of annual budget from local revenue<br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q4_3a1'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q4_3a2'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q4_3a3'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">4.3B Percentage of annual budget from donor funding<br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q4_3b1'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q4_3b2'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q4_3b3'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">4.3C Percentage of the annual operating budget that is partly covered by income generated through service<br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q4_3c1'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q4_3c2'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q4_3c3'].'</b></td>
                </tr>
                <tr >
                <td width="80%" >4.4 Number of systems established, including financial management systems, systems of accountancy, and regular auditing in place</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q4_4'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b> 5. To review and amend policies, strengthen hospital structure, and expand hospital partnerships in line with recommendation from a comprehensive evaluation.</b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >5.1 Number of updated and new written guidelines created and implemented</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q5_1'].'</b></td>
                </tr>
                <tr >
                <td width="80%" >5.2 Number of partnerships with local, regional or national government</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q5_2'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b> 6. Improve delivery of service, such as screening for pre-eclampsia, monitoring of high-risk pregnancy, pre-natal care, in line with recommendation from a comprehensive evaluation</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">6.1 Percentage increase of care for [specific health outcomes, e.g. maternal care, screenings, vaccines, etc.]<br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q6_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q6_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q6_1c'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">6.2 Percentage of poor utilizing the services of the of facilities<br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q6_2a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q6_2b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q6_2c'].'</b></td>
                </tr>
                <tr >
                <td colspan="2">6.3 Percentage of patients satisfied with the quality of services<br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q6_3a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q6_3b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q6_3c'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b> 7. Improve/ restructure community education program, in line with recommendation from a comprehensive evaluation</b></td>
                </tr>
                <tr >
                <td width="80%" >7.1 Number of distinct community-based health activities (e.g. NCD prevention, maternity care, child immunizations, nutrition promotion, etc.)</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q7_1'].'</b></td>
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

function empty2null($value)
{
    return strlen($value) == 0 ? 'NULL' : $value;
}

$rparray = [];
$rp_array =0;
$rpresult=mysqli_query($CCIHCon,"SELECT rp FROM c29")or die(mysqli_error($CCIHCon));

while ($rs=mysqli_fetch_array($rpresult)){
    //echo "<script>alert('$RepPer');</script>";
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
                                            <h4 class="ccih-block-title fw-normal"><em class="icon ni ni-blank"></em> World Hope International - Quantitative</h4>
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
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">1. To provide significant upgrades to available water by piping potable water from GivePower’s desalination center and electric power system by installing solar panels at the LaGonave Wesleyan Hospital.</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.1 Number of departments with safe water and electricity</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q1_1" name="q1_1" value='<?if(strlen($q1_1)!=0) echo $q1_1; else echo $rsmember['q1_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.2 Number of functioning handwashing facilities </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q1_2" name="q1_2" value='<?if(strlen($q1_2)!=0) echo $q1_2; else echo $rsmember['q1_2'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>                                                      
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">2. To support RN and MD residents’ transition from advanced beginner to competent professional through the social service residency program.</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">2.1 Number of RN and MD residents completing social services residence programme</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q2_1" name="q2_1" value='<?if(strlen($q2_1)!=0) echo $q2_1; else echo $rsmember['q2_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                                        
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">3. To do a comprehensive evaluation, including (1) water, waste, electrical, and mechanical infrastructure assessment, (2) security and safety assessment; (3) clinical and operational service assessment; and (4) clinical referral and gap assessment and develop recommendation for short term and long-range strategies (growth trend) and capital projects.</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">3.1 Number of recommendations executed as informed by the comprehensive evaluation (Data used to inform decision making)</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q3_1" name="q3_1" value='<?if(strlen($q3_1)!=0) echo $q3_1; else echo $rsmember['q3_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                                        
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">4. With recommendation from a comprehensive evaluation , implement the financial section of the 5-year strategic plan, including providing cost effective care and developing local partnerships, including schools, orphanages, and other NGO partners related to health</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.1 Percentage of Cost savings achieved for the organization</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q41_lv" name="q41_lv" value='<?if(strlen($q41_lv)!=0) echo $q41_lv; else echo $rsmember['q4_1a'];?>' placeholder="Achievement" onblur="q2(form1.q41_lv,form1.q41_uv,form1.q4_1)"></li>
                                                                <li><input type="text" class="form-control " id="q41_uv" name="q41_uv" value='<?if(strlen($q41_uv)!=0) echo $q41_uv; else echo $rsmember['q4_1b'];?>' placeholder="Target" onblur="q2(form1.q41_lv,form1.q41_uv,form1.q4_1)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q4_1" name="q4_1" value='<?if(strlen($q4_1)!=0) echo $q4_1; else echo $rsmember['q4_1c'];?>' onblur="q2(form1.q41_lv,form1.q41_uv,form1.q4_1)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.2 Financial health: total revenue/ total expenditure</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q4_2" name="q4_2" value='<?if(strlen($q4_2)!=0) echo $q4_2; else echo $rsmember['q4_2'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.3A Percentage of annual budget from local revenue</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q43a1_lv" name="q43a1_lv" value='<?if(strlen($q43a1_lv)!=0) echo $q43a1_lv; else echo $rsmember['q4_3a1'];?>' placeholder="Achievement" onblur="q2(form1.q43a1_lv,form1.q43a2_uv,form1.q4_3a)"></li>
                                                                <li><input type="text" class="form-control " id="q43a2_uv" name="q43a2_uv" value='<?if(strlen($q43a2_uv)!=0) echo $q43a2_uv; else echo $rsmember['q4_3a2'];?>' placeholder="Target" onblur="q2(form1.q43a1_lv,form1.q43a2_uv,form1.q4_3a)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q4_3a" name="q4_3a" value='<?if(strlen($q4_3a)!=0) echo $q4_3a; else echo $rsmember['q4_3a3'];?>' onblur="q2(form1.q43a1_lv,form1.q43a2_uv,form1.q4_3a)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                          </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.3B Percentage of annual budget from donor funding</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q43b1_lv" name="q43b1_lv" value='<?if(strlen($q43b1_lv)!=0) echo $q43b1_lv; else echo $rsmember['q4_3b1'];?>' placeholder="Achievement" onblur="q2(form1.q43b1_lv,form1.q43b2_uv,form1.q4_3b)"></li>
                                                                <li><input type="text" class="form-control " id="q43b2_uv" name="q43b2_uv" value='<?if(strlen($q43b2_uv)!=0) echo $q43b2_uv; else echo $rsmember['q4_3b2'];?>' placeholder="Target" onblur="q2(form1.q43b1_lv,form1.q43b2_uv,form1.q4_3b)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q4_3b" name="q4_3b" value='<?if(strlen($q4_3b)!=0) echo $q4_3b; else echo $rsmember['q4_3b3'];?>' onblur="q2(form1.q43b1_lv,form1.q43b2_uv,form1.q4_3b)">
                                                                </div>
                                                            </li>
                                                            </ul>                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.3C Percentage of the annual operating budget that is partly covered by income generated through service</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q43c1_lv" name="q43c1_lv" value='<?if(strlen($q43c1_lv)!=0) echo $q43c1_lv; else echo $rsmember['q4_3c1'];?>' placeholder="Achievement" onblur="q2(form1.q43c1_lv,form1.q43c2_uv,form1.q4_3c)"></li>
                                                                <li><input type="text" class="form-control " id="q43c2_uv" name="q43c2_uv" value='<?if(strlen($q43c2_uv)!=0) echo $q43c2_uv; else echo $rsmember['q4_3c2'];?>' placeholder="Target" onblur="q2(form1.q43c1_lv,form1.q43c2_uv,form1.q4_3c)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q4_3c" name="q4_3c" value='<?if(strlen($q4_3c)!=0) echo $q4_3c; else echo $rsmember['q4_3c3'];?>' onblur="q2(form1.q43c1_lv,form1.q43c2_uv,form1.q4_3c)">
                                                                </div>
                                                            </li>
                                                            </ul> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.4 Number of systems established, including financial management systems, systems of accountancy, and regular auditing in place</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q4_4" name="q4_4" value='<?if(strlen($q4_4)!=0) echo $q4_4; else echo $rsmember['q4_4'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                                      
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">5. To review and amend policies, strengthen hospital structure, and expand hospital partnerships in line with recommendation from a comprehensive evaluation.</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">5.1 Number of updated and new written guidelines created and implemented</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q5_1" name="q5_1" value='<?if(strlen($q5_1)!=0) echo $q5_1; else echo $rsmember['q5_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">5.2 Number of partnerships with local, regional or national government</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q5_2" name="q5_2" value='<?if(strlen($q5_2)!=0) echo $q5_2; else echo $rsmember['q5_2'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                                        
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">6. Improve delivery of service, such as screening for pre-eclampsia, monitoring of high-risk pregnancy, pre-natal care, in line with recommendation from a comprehensive evaluation</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">6.1 Percentage increase of care for [specific health outcomes, e.g. maternal care, screenings, vaccines, etc.]</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q61_lv" name="q61_lv" value='<?if(strlen($q61_lv)!=0) echo $q61_lv; else echo $rsmember['q6_1a'];?>' placeholder="Achievement" onblur="q2(form1.q61_lv,form1.q61_uv,form1.q6_1)"></li>
                                                                <li><input type="text" class="form-control " id="q61_uv" name="q61_uv" value='<?if(strlen($q61_uv)!=0) echo $q61_uv; else echo $rsmember['q6_1b'];?>' placeholder="Target" onblur="q2(form1.q61_lv,form1.q61_uv,form1.q6_1)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                    <input type="text" class="form-control" id="q6_1" name="q6_1" value='<?if(strlen($q6_1)!=0) echo $q6_1; else echo $rsmember['q6_1c'];?>' onblur="q2(form1.q61_lv,form1.q61_uv,form1.q6_1)">
                                                                </div>
                                                            </li>
                                                            </ul> 
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">6.2 Percentage of poor utilizing the services of the of facilities</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q62_lv" name="q62_lv" value='<?if(strlen($q62_lv)!=0) echo $q62_lv; else echo $rsmember['q6_2a'];?>' placeholder="Achievement" onblur="q2(form1.q62_lv,form1.q62_uv,form1.q6_2)"></li>
                                                                <li><input type="text" class="form-control " id="q62_uv" name="q62_uv" value='<?if(strlen($q62_uv)!=0) echo $q62_uv; else echo $rsmember['q6_2b'];?>' placeholder="Target" onblur="q2(form1.q62_lv,form1.q62_uv,form1.q6_2)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q6_2" name="q6_2" value='<?if(strlen($q6_2)!=0) echo $q6_2; else echo $rsmember['q6_2c'];?>' onblur="q2(form1.q62_lv,form1.q62_uv,form1.q6_2)">
                                                                </div>
                                                            </li>
                                                            </ul> 
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">6.3 Percentage of patients satisfied with the quality of services</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q63_lv" name="q63_lv" value='<?if(strlen($q63_lv)!=0) echo $q63_lv; else echo $rsmember['q6_3a'];?>' placeholder="Achievement" onblur="q2(form1.q63_lv,form1.q63_uv,form1.q6_3)"></li>
                                                                <li><input type="text" class="form-control " id="q63_uv" name="q63_uv" value='<?if(strlen($q63_uv)!=0) echo $q63_uv; else echo $rsmember['q6_3b'];?>' placeholder="Target" onblur="q2(form1.q63_lv,form1.q63_uv,form1.q6_3)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q6_3" name="q6_3" value='<?if(strlen($q6_3)!=0) echo $q6_3; else echo $rsmember['q6_3c'];?>' onblur="q2(form1.q63_lv,form1.q63_uv,form1.q6_3)">
                                                                </div>
                                                            </li>
                                                            </ul> 
                                                        </div>
                                                    </div>                                                                                                       
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">7. Improve/ restructure community education program, in line with recommendation from a comprehensive evaluation</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">7.1 Number of distinct community-based health activities (e.g. NCD prevention, maternity care, child immunizations, nutrition promotion, etc.)</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q7_1" name="q7_1" value='<?if(strlen($q7_1)!=0) echo $q7_1; else echo $rsmember['q7_1'];?>'>
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
                                                            <a href='cselection.php?sel=2&pg=2&cid=29' class="btn btn-lg btn-secondary">Exit form</a>
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
        q1_2:{
            digits:true,  
            min:0,
            max:9999,             
        },
        q2_1:{
            digits:true,  
            min:0,
            max:99999,            
        },
        q3_1:{
            digits:true,  
            min:0,
            max:999,            
        },
        q41_lv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q41_uv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q4_1:{
            number:true,  
            min:0,
            max:999,            
        },
        q4_2:{
            digits:true,  
            min:0,
            max:999,            
        },
        q43a1_lv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q43a2_uv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q4_3a:{
            number:true,  
            min:0,
            max:100,            
        },
        q43b1_lv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q43b2_uv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q4_3b:{
            number:true,  
            min:0,
            max:100,            
        },
        q43c1_lv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q43c2_uv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q4_3c:{
            number:true,  
            min:0,
            max:100,            
        },
        q4_4:{
            digits:true,  
            min:0,
            max:999,            
        },
        q5_1:{
            digits:true,  
            min:0,
            max:9999,            
        },
        q5_2:{
            digits:true,  
            min:0,
            max:999,            
        },
        q61_lv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q61_uv:{
            digits:true,  
            min:0,
            max:999,            
        },
        q6_1:{
            number:true,  
            min:0,
            max:100,            
        },
        q62_lv:{
            number:true,  
            min:0,
            max:99999,            
        },
        q62_uv:{
            number:true,  
            min:0,
            max:99999,            
        },
        q6_2:{
            number:true,  
            min:0,
            max:100,            
        },
        q63_lv:{
            number:true,  
            min:0,
            max:99999,            
        },
        q63_uv:{
            number:true,  
            min:0,
            max:99999,            
        },
        q6_3:{
            number:true,  
            min:0,
            max:100,            
        },
        q7_1:{
            digits:true,  
            min:0,
            max:9999,            
        },
        
        
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