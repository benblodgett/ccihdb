<?
require("config.php");
require("valid.inc.php");
$ctxt=hex2bin($_GET['ctxt']);
$center_id=$_COOKIE["cid"];

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
                            <div class="text-right" >
                                    <a href="adm_view.php" class="btn btn-danger btn-radus" ><em class="icon ni ni-external-alt mr-1"></em> Exit form</a>
                                </div>
                                <div class="components-preview wide-md mx-auto">
                                <div class="alert alert-bi-file bg-primary text-white mb-0 rounded-0">
                                    <div class="ccih-block-head ccih-block-head-lg ">
                                        <div class="ccih-block-head-content">
                                            <h4 class="ccih-block-title fw-normal"><em class="icon ni ni-blank"></em> <?=$ctxt?></h4>
                                        </div>
                                    </div>
                                </div>
                                
                                    <!-- .ccih-block-head -->
                                    <form action="#" class="form-validate">
                                    <div class="ccih-block ccih-block-lg">
                                        <div class="card card-preview rounded-0">
                                            <div class="card-inner ">
                                            <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item ">
                                                        <a class="nav-link active" data-toggle="tab" href="#cenDetails"><em class="icon ni ni-list-index-fill"></em><span>Quantitative</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#ViewCent"><em class="icon ni ni-masonry-fill"></em><span>Qualitative</span></a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                        <div class="tab-pane active" id="cenDetails">
                                                        <table class="datatable-init table">
                                                        <thead>
                                                            <tr>
                                                                <th >Reporting Period </th>
                                                                <th>Form Status</th>
                                                                <th>View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                         <?
                                                            $sqlQuery="SELECT * FROM c".$center_id;  
                                                             $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
                                                             while ($listdata=mysqli_fetch_array($pickQuery)){
                                                                $openlink= "c".$center_id.".php?e=".bin2hex($listdata['sno']);
                                                         ?>
                                                            <tr>
                                                                <td><?=$listdata['rp'];?></td>
                                                                <?//$partxt=$center_id .','. $listdata['rp'] .",'Quantitative';?>
                                                                <td><?=$listdata['fs']?> (<a href='#' class='text-danger' onclick="resetst('<?=$center_id?>','<?=$listdata['rp']?>','Quantitative')" >Reset this status</a>)</td>
                                                                <td class="text-left"><a href="<?=$openlink?>" >Open</a></td>
                                                            </tr>
                                                            <? } ?>
                                                
                                                        </tbody>
                                                        </table>
                                                        </div>
                                                        <div class="tab-pane " id="ViewCent">
                                                        <table class="datatable-init table">
                                                        <thead>
                                                            <tr>
                                                                <th>Reporting Period </th>
                                                                <th>Form Status</th>
                                                                <th>View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                         <?
                                                            $sqlQuery1="SELECT * FROM qualitative where cid='$center_id'";  
                                                             $pickQuery1=mysqli_query($CCIHCon,$sqlQuery1)or die("Unable connect to the table");
                                                             while ($listdata1=mysqli_fetch_array($pickQuery1)){
                                                                $openlink1= "qualitative.php?e=".bin2hex($listdata1['sno']);
                                                         ?>
                                                            <tr>
                                                                <td><?=$listdata1['rp'];?></td>
                                                                <td><?=$listdata1['fs'];?> (<a href='#' class='text-danger' onclick="resetst('<?=$center_id?>','<?=$listdata1['rp']?>','Qualitative')" >Reset this status</a>)</td>
                                                                <td class="text-left"><a href="<?=$openlink1?>" >Open</a></td>
                                                            </tr>
                                                            <? } ?>
                                                
                                                        </tbody>
                                                        </table>
                                                        </div>
                                                </div>

                                                   
                                            </div>
                                            </div>
                                            <div class="alert alert-bi-file bg-gray-200  rounded-0"></div>


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
        
       function resetst(cid,rp,ftype){
            var data = {
                dbtype: ftype,
                repper: rp,
                cenid: cid
            };
            $.ajax({
                type: 'GET',
                url: 'unblockRepord.php',
                data: data,
                success: function(response) {
                    if(response==1){
                        window.location = "cselection.php?sel=2&pg=2&cid="+cid;
                    }
                     
                }
            });
       }
         
  </script>
</body>

</html>