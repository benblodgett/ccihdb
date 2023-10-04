<?
require("config.php");
require("valid.inc.php");
$editQuery=$_GET['e'];
if(strlen($editQuery)!=0)
{    
    $sqlQuery="SELECT * FROM center_details  WHERE cid='$editQuery'";  
    $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
    $rsmember=mysqli_fetch_array($pickQuery); 
}

$delQuery=$_GET['d'];
if(strlen($delQuery)!=0)
{    
    $delQuery="delete FROM center_details  WHERE cid='$delQuery'";  
    mysqli_query($CCIHCon,$delQuery)or die("Unable connect to the table");
    
        // $redirect ="adm_center_det.php?m=3";
        // $url = $hostname.$redirect;  
        // header("Location:$url");  
        // exit();
        $msg="The details has been deleted successfully!";

}

if (isset($_POST['sub'])) {
    $cid = $_POST['cid'];
    $center_id = $_POST['center_id'];
    $cname = str_replace("'", '-', $_POST['cname']); 
    $cadd = str_replace("'", '-', $_POST['cadd']);  
    $ccontact = str_replace("'", '-', $_POST['ccontact']);
    $cemail = $_POST['cemail'];
    if(strlen($center_id)==0 ){

        $error ="Specify, Center ID";
        $errval = true;
        //exit();
    }
    if(strlen($cname)==0 ){

        $error ="Specify, Center Name";
        $errval = true;
        //exit();
    }

    if ( $errval != true ) {
        if(strlen($cid)==0){
        $sqlQuery="SELECT * FROM center_details WHERE  center_name='$cname' ";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
        if( mysqli_num_rows($result) > 0){
            $error="This center name is already registered! "."<br/>";           
        }
        else{
                $sqlQuery1="Insert into center_details(center_id,center_name,center_address,center_contact,center_email) values ('$center_id','$cname','$cadd','$ccontact','$cemail') ";
                $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
                if($result1)
                    $msg="The details has been added successfully!";
        }

    }
    else
    {
        $sqlQuery1="update center_details set center_id='$center_id',center_name='$cname', center_address='$cadd', center_contact='$ccontact', center_email='$cemail' where cid='$cid' ";
        $result1=mysqli_query($CCIHCon,$sqlQuery1)or die(mysqli_error($CCIHCon));//die("Unable connect to the table");
                if($result1)
                    $msg="The details has been updated successfully!";
    }
}
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
                            <div class="components-preview wide-md mx-auto">
                                <div class="alert alert-bi-file bg-primary text-white mb-0 rounded-0">
                                    <div class="ccih-block-head ccih-block-head-lg ">
                                        <div class="ccih-block-head-content">
                                            <h4 class="ccih-block-title fw-normal"><em class="icon ni ni-list-index"></em> Center details</h4>
                                        </div>
                                    </div>
                                </div>
                                
                                    <!-- .ccih-block-head -->
                                    <form method="post" action="<?echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-validate">
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
                                            <ul class="nav nav-tabs mt-n3 ">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#cenDetails"><em class="icon ni ni-bookmark"></em><span>Create/Update Center</span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#ViewCent"><em class="icon ni ni-view-row-fill"></em><span>View Centers</span></a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="cenDetails">
                                                        <!--  -->
                                                    <div class="alert alert-light mt-2">
                                                  
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <!-- <label class="form-label" for="default-03">Center ID</label> -->
                                                            <div class="form-control-wrap">
                                                                <input type="hidden" class="form-control" id="cid" name="cid" readonly value='<?if(strlen($cid)!=0) echo $cid; else echo $rsmember['cid'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">Center ID</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="center_id" name="center_id" required value='<?if(strlen($center_id)!=0) echo $center_id; else echo $rsmember['center_id'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">Center Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="cname" name="cname" required value='<?if(strlen($cname)!=0) echo $cname; else echo $rsmember['center_name'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">Address</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control" name="cadd"><?if(strlen($cadd)!=0) echo $cadd; else echo $rsmember['center_address'];?></textarea>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">Contact no's</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="ccontact" name="ccontact" value='<?if(strlen($ccontact)!=0) echo $ccontact; else echo $rsmember['center_contact'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-03">Email ID</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="cemail" name="cemail" value='<?if(strlen($cemail)!=0) echo $cemail; else echo $rsmember['center_email'];?>'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="preview-hr mb-2 mt-5">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="form-group text-right">
                                                            <div class="form-control-wrap">
                                                            <button type="submit" name="sub" class="btn btn-lg btn-primary">Save Informations</button>
                                                            <a class="btn btn-lg btn-danger text-white" href="ahome.php" >Exit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 

                                                    </div>
                                                    <!--  -->
                                                        </div>
                                                        <div class="tab-pane" id="ViewCent">
                                                        <table class="datatable-init table">
                                                        <thead>
                                                            <tr>
                                                                <th>Sno</th>
                                                                <th>ID</th>
                                                                <th>Name</th>
                                                                <th>Contact</th>
                                                                <th>Edit</th>
                                                                <!-- <th>Delete</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                         <?
                                                            $sqlQuery="SELECT * FROM center_details where dropout=0 ";  
                                                             $pickQuery=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
                                                             $i=0;
                                                             while ($listdata=mysqli_fetch_array($pickQuery)){
                                                         ?>
                                                            <tr>
                                                                <td><?=++$i;?></td>
                                                                <td><?=$listdata['center_id'];?></td>
                                                                <td><?=$listdata['center_name'];?></td>
                                                                <td><?=$listdata['center_contact'];?></td>
                                                                <td class="text-center"><a href="adm_center_det.php?e=<?=$listdata['cid'];?>" ><em class="icon ni ni-edit h6"></em></a></td>
                                                                <!-- <td class="text-center"><a href="adm_center_det.php?d=<?=$listdata['cid'];?>" ><em class="icon ni ni-trash-alt h6"></em></a></td> -->
                                                            </tr>
                                                            <? } ?>
                                                
                                                        </tbody>
                                                        </table>
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    </div> <!-- card inner -->
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
$("#form1").validate({
    rules:{         

        center_id:{
            required:true,  
        },
        cname:{
            required:true,  
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


   </script>
</body>

</html>