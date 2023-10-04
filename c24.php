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
    $sqlQuery="SELECT * FROM c24  WHERE sno='$editQuery'";  
    $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
    $rsmember=mysqli_fetch_array($pickQuery); 
}

if (isset($_POST['rset'])) {
    $redirect ="c24.php";
    $url = $hostname.$redirect;  
    header("Location:$url");  
    exit();  
}

if (isset($_POST['sub']) || isset($_POST['sublate'])) {
    $RepPer = $_POST['RepPer'];
    $q11_lv = $_POST['q11_lv'];
    $q11_uv = $_POST['q11_uv'];
    $q1_1 = $_POST['q1_1'];
    $q12_lv = $_POST['q12_lv'];
    $q12_uv = $_POST['q12_uv'];
    $q12_tv = $_POST['q12_tv'];
    $q13_lv = $_POST['q13_lv'];
    $q13_uv = $_POST['q13_uv'];
    $q13_tv = $_POST['q13_tv'];
    $q21_lv = $_POST['q21_lv'];
    $q21_uv = $_POST['q21_uv'];
    $q21_tv = $_POST['q21_tv'];

    $q3_1 = $_POST['q3_1'];
    $q4_1 = $_POST['q4_1'];
    $q4_2 = $_POST['q4_2'];
    $q43_lv = $_POST['q43_lv'];
    $q43_uv = $_POST['q43_uv'];
    $q4_3 = $_POST['q4_3'];
    $q44_lv = $_POST['q44_lv'];
    $q44_uv = $_POST['q44_uv'];
    $q4_4 = $_POST['q4_4'];
    $q51_lv = $_POST['q51_lv'];
    $q51_uv = $_POST['q51_uv'];
    $q51_tv = $_POST['q51_tv'];
    $q61_lv = $_POST['q61_lv'];
    $q61_uv = $_POST['q61_uv'];
    $q6_1 = $_POST['q6_1'];
    $q62_lv = $_POST['q62_lv'];
    $q62_uv = $_POST['q62_uv'];
    $q6_2 = $_POST['q6_2'];
    $q6_3 = $_POST['q6_3'];
    $q7_1 = $_POST['q7_1'];
    $q7_2 = $_POST['q7_2'];
    $q81_lv = $_POST['q81_lv'];
    $q81_uv = $_POST['q81_uv'];
    $q81_tv = $_POST['q81_tv'];
    $q82_lv = $_POST['q82_lv'];
    $q82_uv = $_POST['q82_uv'];
    $q82_tv = $_POST['q82_tv'];
    $q8_3 = $_POST['q8_3'];
    
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
    /*
    if(strlen($q11_lv)==0 && strlen($q11_uv)==0  && strlen($q1_1)==0 ){

        $error =$error."Specify, Indicator 1.1 "."<br/>";
        $errval = true;
    }

    if(strlen($q12_lv)==0 && strlen($q12_uv)==0 && strlen($q12_tv)==0){

        $error =$error."Specify, Indicator 1.2 "."<br/>";
        $errval = true;
    }
    if(strlen($q13_lv)==0 && strlen($q13_uv)==0 && strlen($q13_tv)==0){

        $error =$error."Specify, Indicator 1.3 "."<br/>";
        $errval = true;
    }
    if(strlen($q21_lv)==0 && strlen($q21_uv)==0 && strlen($q21_tv)==0){

        $error =$error."Specify, Indicator 2.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q3_1)==0 ){

        $error =$error."Specify, Indicator 3.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q4_1)==0 ){

        $error =$error."Specify, Indicator 4.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q4_2)==0 ){

        $error =$error."Specify, Indicator 4.2 "."<br/>";
        $errval = true;
    }
    if(strlen($q43_lv)==0 && strlen($q43_uv)==0 && strlen($q4_3)==0 ){

        $error =$error."Specify, Indicator 4.3 "."<br/>";
        $errval = true;
    }
    if(strlen($q44_lv)==0 && strlen($q44_uv)==0 && strlen($q4_4)==0 ){

        $error =$error."Specify, Indicator 4.4 "."<br/>";
        $errval = true;
    }

    if(strlen($q51_lv)==0 && strlen($q51_uv)==0 && strlen($q51_tv)==0){

        $error =$error."Specify, Indicator 5.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q61_lv)==0 && strlen($q61_uv)==0 && strlen($q6_1)==0 ){

        $error =$error."Specify, Indicator 6.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q62_lv)==0 && strlen($q62_uv)==0 && strlen($q6_2)==0 ){

        $error =$error."Specify, Indicator 6.2 "."<br/>";
        $errval = true;
    }
    if(strlen($q6_3)==0 ){

        $error =$error."Specify, Indicator 6.3 "."<br/>";
        $errval = true;
    }
    if(strlen($q7_1)==0 ){

        $error =$error."Specify, Indicator 7.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q7_2)==0 ){

        $error =$error."Specify, Indicator 7.2 "."<br/>";
        $errval = true;
    }
    if(strlen($q81_lv)==0 && strlen($q81_uv)==0 && strlen($q81_tv)==0){

        $error =$error."Specify, Indicator 8.1 "."<br/>";
        $errval = true;
    }
    if(strlen($q82_lv)==0 && strlen($q82_uv)==0 && strlen($q82_tv)==0){

        $error =$error."Specify, Indicator 8.2 "."<br/>";
        $errval = true;
    }

    if(strlen($q8_3)==0 ){

        $error =$error."Specify, Indicator 8.3 "."<br/>";
        $errval = true;
    }
    */


    // if(strlen($RAss)==0 ){

    //     $error =$error."Specify, Risks/Assumptions "."<br/>";
    //     $errval = true;
    // }

}
    

    if ( $errval != true ) {
        $sqlQuery="SELECT * FROM c24 WHERE  rp='$RepPer'";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));
        if( mysqli_num_rows($result) > 0){
            $sqlQuery1="update c24 set q1_1a=" . empty2null($q11_lv) . ",q1_1b=" . empty2null($q11_uv) . ",q1_1c=" . empty2null($q1_1) . ", q1_2a=" . empty2null($q12_lv) . ",q1_2b=" . empty2null($q12_uv) . ",q1_2c=" . empty2null($q12_tv) . ",q1_3a=" . empty2null($q13_lv) . ",q1_3b=" . empty2null($q13_uv) . ",q1_3c=" . empty2null($q13_tv) . ", q2_1a=" . empty2null($q21_lv) . ",q2_1b=" . empty2null($q21_uv) . ",q2_1c=" . empty2null($q21_tv) . ", q3_1=" . empty2null($q3_1) . ",q4_1=" . empty2null($q4_1) . ",q4_2=" . empty2null($q4_2) . ",q4_3a=" . empty2null($q43_lv) . ",q4_3b=" . empty2null($q43_uv) . ",q4_3c=" . empty2null($q4_3) . ",q4_4a=" . empty2null($q44_lv) . ",q4_4b=" . empty2null($q44_uv) . ",q4_4c=" . empty2null($q4_4) . ", 	q5_1a=" . empty2null($q51_lv) . ",q5_1b=" . empty2null($q51_uv) . ",q5_1c=" . empty2null($q51_tv) . ",q6_1a=" . empty2null($q61_lv) . ",q6_1b=" . empty2null($q61_uv) . ",q6_1c=" . empty2null($q6_1) . ",q6_2a=" . empty2null($q62_lv) . ",q6_2b=" . empty2null($q62_uv) . ",q6_2c=" . empty2null($q6_2) . ",q6_3=" . empty2null($q6_3) . ",q7_1=" . empty2null($q7_1) . ",q7_2=" . empty2null($q7_2) . ",q8_1a=" . empty2null($q81_lv) . ",q8_1b=" . empty2null($q81_uv) . ",q8_1c=" . empty2null($q81_tv) . ", 	q8_2a=" . empty2null($q82_lv) . ",q8_2b=" . empty2null($q82_uv) . ",q8_2c=" . empty2null($q82_tv) . ",q8_3=" . empty2null($q8_3) . ",mov='$MOV',ra='$RAss',fs='$fstat',uuser='$uname',udt='$datetime' where rp='$RepPer' ";
            $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
            sendMail($fstat,$RepPer,$CCIHCon);
            if($result1)
                $msg="The details has been updated successfully!";    
        }
        else{
                $sqlQuery1="Insert into c24(rp,q1_1a,q1_1b,q1_1c,q1_2a,q1_2b,q1_2c,q1_3a,q1_3b,q1_3c,q2_1a,q2_1b,q2_1c,q3_1,q4_1,q4_2,q4_3a,q4_3b,q4_3c,q4_4a,q4_4b,q4_4c,q5_1a,q5_1b,q5_1c,q6_1a,q6_1b,q6_1c,q6_2a,q6_2b,q6_2c,q6_3,q7_1,q7_2,q8_1a,q8_1b,q8_1c,q8_2a,q8_2b,q8_2c,q8_3,mov, ra, fs, cuser, cdt,uuser,udt ) values ('$RepPer'," . empty2null($q11_lv). "," . empty2null($q11_uv). "," . empty2null($q1_1). "," . empty2null($q12_lv) . "," . empty2null($q12_uv) . "," . empty2null($q12_tv) . "," . empty2null($q13_lv) . "," . empty2null($q13_uv) . "," . empty2null($q13_tv) . "," . empty2null($q21_lv) . "," . empty2null($q21_uv) . "," . empty2null($q21_tv) . "," . empty2null($q3_1) . "," . empty2null($q4_1) . "," . empty2null($q4_2) . "," . empty2null($q43_lv) . "," . empty2null($q43_uv) . "," . empty2null($q4_3) . "," . empty2null($q44_lv) . "," . empty2null($q44_uv) . "," . empty2null($q4_4) . "," . empty2null($q51_lv) . "," . empty2null($q51_uv) . "," . empty2null($q51_tv) . "," . empty2null($q61_lv) . "," . empty2null($q61_uv) . "," . empty2null($q6_1) . "," . empty2null($q62_lv) . "," . empty2null($q62_uv) . "," . empty2null($q6_2) . "," . empty2null($q6_3) . "," . empty2null($q7_1) . "," . empty2null($q7_2) . "," . empty2null($q81_lv) . "," . empty2null($q81_uv) . "," . empty2null($q81_tv) . "," . empty2null($q82_lv) . "," . empty2null($q82_uv) . "," . empty2null($q82_tv) . "," . empty2null($q8_3) . ",'$MOV','$RAss','$fstat','$uname','$datetime','$uname','$datetime') ";
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
        $sqlQuery="SELECT * FROM c24 WHERE  rp='$rp'";
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
                <td colspan="2" ><b>1. To increase use of Standard Treatment Guidelines in at least 100 members’ facilities (Maternal, Neonatal and Child Health , HIV/AIDS, Non-communicable Diseases and Antimicrobial Resistance).<br/>
                -To reduce stock-out and wastage in at least 100 health facilities by 80%, focusing on bottom 25% facilities.<br/>
                -To increase the number of health facilities meeting EPN performance indicators on availability of medicines and appropriate pharmaceutical management.</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">1.1 Percentage of targeted facilities having selected essential drugs and supplies in-stock and non-expired  <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q1_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q1_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q1_1c'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">1.2 Number or Percentage of targeted facilities that maintain acceptable storage conditions   <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q1_2a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q1_2b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q1_2c'].'</b></td>
                </tr>
                <tr>
                <td colspan="2">1.3 Number or Percentage of targeted health facilities with SOPs for conducting procurement of equipment and pharmaceuticals   <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q1_3a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q1_3b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q1_3c'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>2. To increase availability of priority medicines for NCD, MNCH, IPC/AMR, HIV, NTD) in at least 100 church health facilities and in 100% of EPNs member Drug Supply Organizations (18 DSOs)</b></td>
                </tr>
                <tr >
                <td colspan="2">2.1 Number or Percentage of DSOs having selected essential drugs and key supplies and equipment  <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q2_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q2_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q2_1c'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>3. To support and guide members to engage in Pooled Procurement initiatives.</b></td>
                </tr>
                <tr >
                <td width="80%" >3.1 Number of Members who express interest in joining a pooled procurement initiative</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q3_1'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>4. To train pharmaceutical staff in the Essentials of Pharmaceutical practice on the EPN Learning Management Platform training.epnetwork.org .</b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >4.1 Number of trainings completed </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q4_1'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >4.2 Number of individuals trained </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q4_2'].'</b></td>
                </tr>
                <tr >
                <td colspan="2">4.3 Percentage improvement in Essentials of Pharmaceutical practice assessment (post vs pre assessment) <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q4_3a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q4_3b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q4_3c'].'</b></td>
                </tr>
                <tr >
                <td colspan="2">4.4 Percent of trainees that apply skills to current work, (measured by number of Implemented action plans after training) <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q4_4a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q4_4b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q4_4c'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>5. To deliver basic training in pharmaceutical practice for the bottom 25% of health facilities , (which are typically small, rural with no pharmaceutical staff)to improve their pharmaceutical services.</b></td>
                </tr>
                <tr >
                <td colspan="2">5.1 Number or Percentage of key personnel trained in drugs, supplies, and equipment stock management.  <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q5_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q5_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q5_1c'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>6. To improve the pharmaceutical services in about 50 Hospitals through Training of Hospital Management and Church leaders in hospital boards on the importance of Pharmaceutical services for the hospital.</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">6.1 Percentage of facilities with written guidelines for accounting systems, pricing policies and facility management <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q6_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q6_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q6_1c'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">6.2 Number or Percentage of targeted trained facilities with functional Boards and committees <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q6_2a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q6_2b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q6_2c'].'</b></td>
                </tr>
                <tr >
                <td width="80%" >6.3 Number of trained hospital administrators</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q6_3'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>7. To improve medicine quality and safety by promoting the MINILAB network as an entity that provides small-scale quality assessment services for drug supply organizations and formation of government collaborations. </b></td>
                </tr>
                <tr class="border_bottom">
                <td width="80%" >7.1 Number of partnerships with local, regional, or national government, </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q7_1'].'</b></td>
                </tr>
                <tr >
                <td width="80%" >7.2 Number of Minilab network partners (EPN members)</td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q7_2'].'</b></td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td>
                <table cellpadding="4">
                <tr>
                <td colspan="2" ><b>8. To improve pharmaceutical services (counselling, dispensing, procurement) in bottom EPN member facilities through training </b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">8.1 Number or Percentage of targeted health facilities with SOPs (standard operating procedures) for dispensing and counseling available <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q8_1a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q8_1b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q8_1c'].'</b></td>
                </tr>
                <tr class="border_bottom">
                <td colspan="2">8.2 Number or Percentage of patient exit interviews reporting an overall good experience <br/>&nbsp;&nbsp;&nbsp;    Achievement: <b>'.$valu1['q8_2a'].'</b>&nbsp;&nbsp;&nbsp;   Target: <b>'.$valu1['q8_2b'].'</b>&nbsp;&nbsp;&nbsp;   % value: <b>'.$valu1['q8_2c'].'</b></td>
                </tr>
                <tr >
                <td width="80%" >8.3 Number of staff with positive self-assessment regarding counselling and dispensing practices after training  </td>
                <td width="20%" style="text-align:center;"><b>'.$valu1['q8_3'].'</b></td>
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
$rpresult=mysqli_query($CCIHCon,"SELECT rp FROM c24")or die(mysqli_error($CCIHCon));

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
                                            <h4 class="ccih-block-title fw-normal"><em class="icon ni ni-blank"></em> Ecumenical Pharmaceutical Network - Quantitative</h4>
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
                                                    <div class="col-md-12 mt-4 mb-1">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">1. To increase use of Standard Treatment Guidelines in at least 100 members’ facilities (Maternal, Neonatal and Child Health , HIV/AIDS, Non-communicable Diseases and Antimicrobial Resistance). <br/>

-To reduce stock-out and wastage in at least 100 health facilities by 80%, focusing on bottom 25% facilities. <br/>

-To increase the number of health facilities meeting EPN performance indicators on availability of medicines and appropriate pharmaceutical management.</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">

                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.1 Percentage of targeted facilities having selected essential drugs and supplies in-stock and non-expired </label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q11_lv" name="q11_lv" value='<?if(strlen($q11_lv)!=0) echo $q11_lv; else echo $rsmember['q1_1a'];?>' placeholder="Achievement" onblur="q2(form1.q11_lv,form1.q11_uv,form1.q1_1)"></li>
                                                                <li><input type="text" class="form-control " id="q11_uv" name="q11_uv" value='<?if(strlen($q11_uv)!=0) echo $q11_uv; else echo $rsmember['q1_1b'];?>' placeholder="Target" onblur="q2(form1.q11_lv,form1.q11_uv,form1.q1_1)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                    <input type="text" class="form-control" id="q1_1" name="q1_1" value='<?if(strlen($q1_1)!=0) echo $q1_1; else echo $rsmember['q1_1c'];?>' onblur="q2(form1.q11_lv,form1.q11_uv,form1.q1_1)">
                                                                </div>
                                                                </li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.2 Number or Percentage of targeted facilities that maintain acceptable storage conditions</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q12_lv" name="q12_lv" value='<?if(strlen($q12_lv)!=0) echo $q12_lv; else echo $rsmember['q1_2a'];?>' placeholder="Achievement" onblur="q2(form1.q12_lv,form1.q12_uv,form1.q12_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q12_uv" name="q12_uv" value='<?if(strlen($q12_uv)!=0) echo $q12_uv; else echo $rsmember['q1_2b'];?>' placeholder="Target" onblur="q2(form1.q12_lv,form1.q12_uv,form1.q12_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q12_tv" name="q12_tv"  value='<?if(strlen($q12_tv)!=0) echo $q12_tv; else echo $rsmember['q1_2c'];?>' placeholder="% value" onblur="q2(form1.q12_lv,form1.q12_uv,form1.q12_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">1.3 Number or Percentage of targeted health facilities with SOPs for conducting procurement of equipment and pharmaceuticals</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q13_lv" name="q13_lv" value='<?if(strlen($q13_lv)!=0) echo $q13_lv; else echo $rsmember['q1_3a'];?>' placeholder="Achievement" onblur="q2(form1.q13_lv,form1.q13_uv,form1.q13_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q13_uv" name="q13_uv" value='<?if(strlen($q13_uv)!=0) echo $q13_uv; else echo $rsmember['q1_3b'];?>' placeholder="Target" onblur="q2(form1.q13_lv,form1.q13_uv,form1.q13_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q13_tv" name="q13_tv"  value='<?if(strlen($q13_tv)!=0) echo $q13_tv; else echo $rsmember['q1_3c'];?>' placeholder="% value" onblur="q2(form1.q13_lv,form1.q13_uv,form1.q13_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>                                                    
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">2. To increase availability of priority medicines for NCD, MNCH, IPC/AMR, HIV, NTD) in at least 100 church health facilities and in 100% of EPNs member Drug Supply Organizations (18 DSOs)</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">2.1 Number or Percentage of DSOs having selected essential drugs and key supplies and equipment</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q21_lv" name="q21_lv" value='<?if(strlen($q21_lv)!=0) echo $q21_lv; else echo $rsmember['q2_1a'];?>' placeholder="Achievement" onblur="q2(form1.q21_lv,form1.q21_uv,form1.q21_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q21_uv" name="q21_uv" value='<?if(strlen($q21_uv)!=0) echo $q21_uv; else echo $rsmember['q2_1b'];?>' placeholder="Target" onblur="q2(form1.q21_lv,form1.q21_uv,form1.q21_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q21_tv" name="q21_tv"  value='<?if(strlen($q21_tv)!=0) echo $q21_tv; else echo $rsmember['q2_1c'];?>' placeholder="% value" onblur="q2(form1.q21_lv,form1.q21_uv,form1.q21_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>                                                                                                     
                                                    </div>

                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">3. To support and guide members to engage in Pooled Procurement initiatives.</span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">3.1 Number of Members who express interest in joining a pooled procurement initiative</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q3_1" name="q3_1" value='<?if(strlen($q3_1)!=0) echo $q3_1; else echo $rsmember['q3_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                                     
                                                    </div>

                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">4. To train pharmaceutical staff in the Essentials of Pharmaceutical practice on the EPN Learning Management Platform training.epnetwork.org . </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.1 Number of trainings completed </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q4_1" name="q4_1" value='<?if(strlen($q4_1)!=0) echo $q4_1; else echo $rsmember['q4_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.2 Number of individuals trained </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q4_2" name="q4_2" value='<?if(strlen($q4_2)!=0) echo $q4_2; else echo $rsmember['q4_2'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.3 Percentage improvement in Essentials of Pharmaceutical practice assessment (post vs pre assessment)</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q43_lv" name="q43_lv" value='<?if(strlen($q43_lv)!=0) echo $q43_lv; else echo $rsmember['q4_3a'];?>' placeholder="Achievement" onblur="q2(form1.q43_lv,form1.q43_uv,form1.q4_3)"></li>
                                                                <li><input type="text" class="form-control " id="q43_uv" name="q43_uv" value='<?if(strlen($q43_uv)!=0) echo $q43_uv; else echo $rsmember['q4_3b'];?>' placeholder="Target" onblur="q2(form1.q43_lv,form1.q43_uv,form1.q4_3)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q4_3" name="q4_3" value='<?if(strlen($q4_3)!=0) echo $q4_3; else echo $rsmember['q4_3c'];?>' onblur="q2(form1.q43_lv,form1.q43_uv,form1.q4_3)">
                                                                </div>
                                                                </li>
                                                            </ul>  
                                                        </div>
                                                    </div>     
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">4.4 Percent of trainees that apply skills to current work, (measured by number of Implemented action plans after training)</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control " id="q44_lv" name="q44_lv" value='<?if(strlen($q44_lv)!=0) echo $q44_lv; else echo $rsmember['q4_4a'];?>' placeholder="Achievement" onblur="q2(form1.q44_lv,form1.q44_uv,form1.q4_4)"></li>
                                                                <li><input type="text" class="form-control " id="q44_uv" name="q44_uv" value='<?if(strlen($q44_uv)!=0) echo $q44_uv; else echo $rsmember['q4_4b'];?>' placeholder="Target" onblur="q2(form1.q44_lv,form1.q44_uv,form1.q4_4)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                    <input type="text" class="form-control" id="q4_4" name="q4_4" value='<?if(strlen($q4_4)!=0) echo $q4_4; else echo $rsmember['q4_4c'];?>' onblur="q2(form1.q44_lv,form1.q44_uv,form1.q4_4)">
                                                                </div>
                                                                </li>
                                                            </ul> 
                                                        </div>
                                                    </div>                                                                                                 
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">5. To deliver basic training in pharmaceutical practice for the bottom 25% of health facilities , (which are typically small, rural with no pharmaceutical staff)to improve their pharmaceutical services. </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">5.1 Number or Percentage of key personnel trained in drugs, supplies, and equipment stock management.</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q51_lv" name="q51_lv" value='<?if(strlen($q51_lv)!=0) echo $q51_lv; else echo $rsmember['q5_1a'];?>' placeholder="Achievement" onblur="q2(form1.q51_lv,form1.q51_uv,form1.q51_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q51_uv" name="q51_uv" value='<?if(strlen($q51_uv)!=0) echo $q51_uv; else echo $rsmember['q5_1b'];?>' placeholder="Target" onblur="q2(form1.q51_lv,form1.q51_uv,form1.q51_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q51_tv" name="q51_tv"  value='<?if(strlen($q51_tv)!=0) echo $q51_tv; else echo $rsmember['q5_1c'];?>' placeholder="% value" onblur="q2(form1.q51_lv,form1.q51_uv,form1.q51_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>                                                                                                     
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">6. To improve the pharmaceutical services in about 50 Hospitals through Training of Hospital Management and Church leaders in hospital boards on the importance of Pharmaceutical services for the hospital. </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">6.1 Percentage of targeted facilities with written guidelines for accounting systems, pricing policies and facility management</label>
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
                                                            <label class="form-label" for="default-03">6.2 Number or Percentage of targeted trained facilities with functional Boards and committees</label>
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
                                                            <label class="form-label" for="default-03">6.3 Number of trained hospital administrators</label>
                                                            <div class="form-control-wrap">                                                                
                                                                <input type="text" class="form-control" id="q6_3" name="q6_3" value='<?if(strlen($q6_3)!=0) echo $q6_3; else echo $rsmember['q6_3'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>                                                                                          
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">7. To improve medicine quality and safety by  promoting the MINILAB network as an entity that provides small-scale quality assessment services for drug supply organizations and formation of government collaborations. </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">7.1 Number of partnerships with local, regional, or national government, </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q7_1" name="q7_1" value='<?if(strlen($q7_1)!=0) echo $q7_1; else echo $rsmember['q7_1'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">7.2 Number of Minilab network partners (EPN members)</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q7_2" name="q7_2" value='<?if(strlen($q7_2)!=0) echo $q7_2; else echo $rsmember['q7_2'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    </div>
                                                    <div class="alert alert-light mt-2">
                                                    <div class="col-md-12 mt-4 ">
                                                        <span class="preview-title-sm fw-bold text-danger fs-15px  ">8. To improve pharmaceutical services (counselling, dispensing, procurement) in bottom EPN member facilities through training </span>
                                                    </div>
                                                    <hr class="preview-hr mt-0">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">8.1 Number or Percentage of targeted health facilities with SOPs (standard operating procedures) for dispensing and counseling available </label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q81_lv" name="q81_lv" value='<?if(strlen($q81_lv)!=0) echo $q81_lv; else echo $rsmember['q8_1a'];?>' placeholder="Achievement" onblur="q2(form1.q81_lv,form1.q81_uv,form1.q81_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q81_uv" name="q81_uv" value='<?if(strlen($q81_uv)!=0) echo $q81_uv; else echo $rsmember['q8_1b'];?>' placeholder="Target" onblur="q2(form1.q81_lv,form1.q81_uv,form1.q81_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q81_tv" name="q81_tv"  value='<?if(strlen($q81_tv)!=0) echo $q81_tv; else echo $rsmember['q8_1c'];?>' placeholder="% value" onblur="q2(form1.q81_lv,form1.q81_uv,form1.q81_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">8.2 Number or Percentage of patient exit interviews reporting an overall good experience</label>
                                                            <ul class="custom-control-group g-3 align-center">
                                                                <li><input type="text" class="form-control" id="q82_lv" name="q82_lv" value='<?if(strlen($q82_lv)!=0) echo $q82_lv; else echo $rsmember['q8_2a'];?>' placeholder="Achievement" onblur="q2(form1.q82_lv,form1.q82_uv,form1.q82_tv)"></li>
                                                                <li><input type="text" class="form-control" id="q82_uv" name="q82_uv" value='<?if(strlen($q82_uv)!=0) echo $q82_uv; else echo $rsmember['q8_2b'];?>' placeholder="Target" onblur="q2(form1.q82_lv,form1.q82_uv,form1.q82_tv)"></li>
                                                                <li><div class="user-avatar bg-gray-400 ml-2 mr-2 sm"><span>OR</span></div></li>
                                                                <li>
                                                                <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">%</div>    
                                                                <input type="text" class="form-control" id="q82_tv" name="q82_tv"  value='<?if(strlen($q82_tv)!=0) echo $q82_tv; else echo $rsmember['q8_2c'];?>' placeholder="% value" onblur="q2(form1.q82_lv,form1.q82_uv,form1.q82_tv)">
                                                                </div>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>  
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">8.3 Number of staff with positive self-assessment regarding counselling and dispensing practices after training </label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="q8_3" name="q8_3" value='<?if(strlen($q8_3)!=0) echo $q8_3; else echo $rsmember['q8_3'];?>'>
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
                                                            <a href='cselection.php?sel=2&pg=2&cid=24' class="btn btn-lg btn-secondary">Exit form</a>
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

        q11_lv:{
            digits:true,  
            min:0,
            max:9999,            
        },
        q11_uv:{
            digits:true,  
            min:0,
            max:9999,            
        },
        q1_1:{
            number:true,  
            min:0,
            max:100,            
        },
        q12_lv:{
            digits:true,  
            min:0,
            max:9999,             
        },
        q12_uv:{
            digits:true,  
            min:0,
            max:9999,            
        },
        q12_tv:{
            number:true,  
            min:0,
            max:100,            
        },
        q13_lv:{
            digits:true,  
            min:0,
            max:9999,            
        },
        q13_uv:{
            digits:true,  
            min:0,
            max:9999,            
        },
        q13_tv:{
            number:true,  
            min:0,
            max:100,            
        },
        q21_lv:{
            digits:true, 
            min:0,
            max:999,              
        },            
        q21_uv:{
            digits:true,  
            min:0,
            max:999,             
        },
        q21_tv:{
            number:true,  
            min:0,
            max:100,             
        },
        q3_1:{
            digits:true,  
            min:0,
            max:9999,             
        },
        q4_1:{
            digits:true,  
            min:0,
            max:9999,             
        },

        q4_2:{
            digits:true,  
            min:0,
            max:99999,             
        },
        q43_lv:{
            digits:true,  
            min:0,
            max:999,             
        },
        q43_uv:{
            digits:true,  
            min:0,
            max:999,             
        },
        q4_3:{
            number:true,  
            min:0,
            max:100,             
        },
        q44_lv:{
            digits:true,  
            min:0,
            max:99999,             
        },
        q44_uv:{
            digits:true,  
            min:0,
            max:99999,             
        },
        q4_4:{
            number:true,  
            min:0,
            max:100,             
        },
        q51_lv:{
            digits:true,  
            min:0,
            max:99999,             
        },
        q51_uv:{
            digits:true,  
            min:0,
            max:99999,             
        },
        q51_tv:{
            number:true,  
            min:0,
            max:100,             
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
            digits:true,  
            min:0,
            max:999,             
        },
        q62_uv:{
            digits:true,  
            min:0,
            max:999,             
        },
        q6_2:{
            number:true,  
            min:0,
            max:100,             
        },
        q6_3:{
            digits:true,  
            min:0,
            max:9999,             
        },
        q7_1:{
            digits:true,  
            min:0,
            max:999,             
        },
        q7_2:{
            digits:true,  
            min:0,
            max:999,             
        },
        q81_lv:{
            digits:true,  
            min:0,
            max:999,             
        },
        q81_uv:{
            digits:true,  
            min:0,
            max:999,             
        },
        q81_tv:{
            number:true,  
            min:0,
            max:100,             
        },
        q82_lv:{
            digits:true,  
            min:0,
            max:9999,             
        },
        q82_uv:{
            digits:true,  
            min:0,
            max:9999,             
        },
        q82_tv:{
            number:true,  
            min:0,
            max:100,             
        },
        q8_3:{
            digits:true,  
            min:0,
            max:99999,             
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