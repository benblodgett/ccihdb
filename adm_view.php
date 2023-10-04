<?
require("config.php");
require("valid.inc.php");
$ctxt=$_GET['ctxt'];

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
                <div class="ccih-content">
                    <div class="container wide-xl">
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body mb-5 ">
                            
                        <table class="datatable-init table table-striped">
                                                    <thead>
                                                        <tr class="tb-tnx-head">
                                                            <th ><span class="">Sno</span></th>
                                                            <th >Center ID</th>
                                                            <th >Center Name</th>
                                                            <th >Contact No</th>
                                                            <th> </th>
                                                    </thead>
                                                    <tbody>
                                                            <?
                                                             $sqlQuery="SELECT * FROM center_details where dropout=0  ";  
                                                             $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
                                                             $i=0;
                                                             while ($listdata=mysqli_fetch_array($pickQuery)){
                                                             ?>
                                                            <tr>
                                                                <td><?=++$i;?></td>
                                                                <td><?=$listdata['center_id'];?></td>
                                                                <td><?=$listdata['center_name'];?></td>
                                                                <td><?=$listdata['center_contact'];?></td>
                                                                <td class="text-center"><a href="cselection.php?sel=2&pg=2&cid=<?=$listdata['cid']?>" >Open</a></td>
                                                            </tr>
                                                            <? } ?>
                                                    </tbody>
                                                </table>
                                               
                        </div>      
                        <hr/>
                        <a class="btn btn-lg btn-danger text-white mb-4" href="ahome.php" >Exit</a><br/>                  
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
         
  </script>
</body>

</html>