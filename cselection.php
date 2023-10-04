<?
require("config.php");
require("valid.inc.php");
$sel=$_GET['sel'];
$pg=$_GET['pg'];
$cid=$_GET['cid']; //from Super admin request

if($cid=='')
$center_id=$_COOKIE["cid"];
else
{
$center_id=$cid;
setcookie("cid", $cid);
}



if($sel==1){
$redirect ="c".$center_id.".php";
$url = $hostname.$redirect;  
header("Location:$url");  
exit();
}  

if($sel==2){
      if($center_id==1)
        $ctxt=bin2hex("American Leprosy Missions");
      if($center_id==2)
        $ctxt=bin2hex("Assistive Technology Catalyst Project with IDEAS");
      if($center_id==3)
        $ctxt=bin2hex("World Renew");
      if($center_id==4)
        $ctxt=bin2hex("Christian Academy of African Physicians");
      if($center_id==5)
        $ctxt=bin2hex("The Christian Health Association of Kenya (CHAK)");
      if($center_id==6)
        $ctxt=bin2hex("Christian Health Association of Malawi (CHAM)");
      if($center_id==7)
         $ctxt=bin2hex("Christian Medical Association India (CMAI)");
      if($center_id==8)
        $ctxt=bin2hex("Cure International");
      if($center_id==9)
        $ctxt=bin2hex("Dalton Foundation");
      if($center_id==10)
        $ctxt=bin2hex("Digital African Health Library Service");
      if($center_id==11)
        $ctxt=bin2hex("Health Services Corps");
      if($center_id==12)
        $ctxt=bin2hex("Hezekiah Health Foundation");
      if($center_id==13)
        $ctxt=bin2hex("IMA World Health");
      if($center_id==14)
        $ctxt=bin2hex("LifeNet International");
      if($center_id==15)
        $ctxt=bin2hex("Rural Health Services (RHS) of Sudan");
      if($center_id==16)
        $ctxt=bin2hex("Samaritan Purse");
      if($center_id==17)
        $ctxt=bin2hex("St. John’s Medical College, Bangalore");
      if($center_id==18)
        $ctxt=bin2hex("Église Méthodiste du Togo");
      if($center_id==19)
         $ctxt=bin2hex("Uganda Protestant Medical Bureau (UPMB)");
      if($center_id==20)
        $ctxt=bin2hex("Zimbabwe Association of Church-Related Hospitals");  
      if($center_id==21)
        $ctxt=bin2hex("Blessings International");
      if($center_id==22)
        $ctxt=bin2hex("Christian Health Association of Sierra Leone & Healey IRF");
      if($center_id==23)
        $ctxt=bin2hex("Community Fountain Organization");
      if($center_id==24)
        $ctxt=bin2hex("Ecumenical Pharmaceutical Network");
      if($center_id==25)
        $ctxt=bin2hex("Global Health Action");
      if($center_id==26)
        $ctxt=bin2hex("Kunri Christian Hospital");
      if($center_id==27)
        $ctxt=bin2hex("Kupenda for the Children");
      if($center_id==28)
        $ctxt=bin2hex("National Medical Services Consortium (NMSC)");
      if($center_id==29)
        $ctxt=bin2hex("World Hope International");
      if($center_id==30)
        $ctxt=bin2hex("World Relief");
      if($center_id==31)
        $ctxt=bin2hex("African Mission Healthcare");
      if($center_id==32)
        $ctxt=bin2hex("World Council of Churches");
      if($center_id==33)
        $ctxt=bin2hex("Catholic Medical Mission Board (CMMB)");
      if($center_id==34)
        $ctxt=bin2hex("Expanded Church Response (ECR)");
      if($center_id==35)
        $ctxt=bin2hex("Le Bon Berger");
      if($center_id==36)
        $ctxt=bin2hex("Medical Benevolence Foundation (MBF)");
      if($center_id==37)
        $ctxt=bin2hex("Muslim Family Counseling Services (MFCS)");
      if($center_id==38)
        $ctxt=bin2hex("Tanzania Initiative for Achievement (TAZIFA)");
      if($center_id==39)
        $ctxt=bin2hex("Appel à la Compassion");
      if($center_id==40)
        $ctxt=bin2hex("Association Galle Kisal");
      if($center_id==41)
        $ctxt=bin2hex("Christian Health Association of Nigeria");
      if($center_id==42)
        $ctxt=bin2hex("DOM ECC SUD-KIVU");
      if($center_id==43)
        $ctxt=bin2hex("International Care Ministries");
      if($center_id==44)
        $ctxt=bin2hex("Kabarak University Department of Family Medicine");
      if($center_id==45)
        $ctxt=bin2hex("Kingdom Workers Malawi");


        if($pg==1)
        $redirect ="editrecords.php?ctxt=$ctxt";
        else
        if($pg==2)
        $redirect ="adm_records.php?ctxt=$ctxt";
        else
        $redirect ="qualitative.php?ctxt=$ctxt";
        $url = $hostname.$redirect;  
        header("Location:$url");  
        exit();
}

if($sel==3){
  $redirect ="report/rc".$center_id.".php";
  $url = $hostname.$redirect;  
  header("Location:$url");  
  exit();
  }  


?>