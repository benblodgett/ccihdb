<?
require("config.php");
if(hex2bin($_GET['d'])!='')
{
$eid=hex2bin($_GET['d']);
$Relink="logout.php";
}
else if(strlen($_COOKIE["eid"])!=0){
$eid=$_COOKIE["eid"];
    if($eid==999)
        $Relink="logout.php"; 
    else
        $Relink="c".$_COOKIE["cid"].".php";
}
else{
    $Relink="logout.php"; 
}
//echo $eid;
if (isset($_POST['sub'])) {
    $npwd = $_POST['npwd'];
    $rpwd = $_POST['rpwd'];
    $peid = $_POST['peid'];

    if(strcmp($npwd,$rpwd)!=0){

        $error ="! Your New and Re-type Passwords do not match";
        $errval = true;
        //exit();
    }

    if ( $errval != true) {
        $sqlQuery="SELECT * FROM members WHERE  pri_email='$peid'";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
        if( mysqli_num_rows($result) > 0){

            if($rsmember=mysqli_fetch_array($result)){
                $mail=$rsmember['pri_email'];
                $sqlQuery1="update members set pwd=md5('$npwd') WHERE pri_email='$mail' ";
                $result1=mysqli_query($CCIHCon,$sqlQuery1)or die("Unable connect to the table");
                if($result1)
                    $msg="Your password has been changed successfully!";
            }
        }
        else{
            $error="Invalid email ID, Please try once again"."<br/>";
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

    .btn-radus {
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
            <div class="ccih-header" style="background-color:#f2f2f2; border-bottom: 3px solid #d9d9d9;">    <!--#1d4e8b -->
                    <div class="container-lg wide-xl">
                        <div class="ccih-header-wrap">
                            <div class="ccih-header-brand">
                                <a href="#" class="logo-link">
                                    <img class="logo-img" src="./images/_30x30_logo-sm.png" srcset="./images/_30x30_logo-sm.png 3x" alt="logo">
                                </a>
                            </div>
                           </div>
                        <!-- .ccih-header-wrap -->
                    </div>
                    <!-- .container-fliud -->
                </div>
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
                                                <h4 class="ccih-block-title fw-normal"><em
                                                        class="icon ni ni-blank"></em> Change Password</h4>
                                            </div>
                                        </div>
                                    </div>
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
                                        <div class="alert alert-light mt-2">
                                            <div class="col-sm-12 mb-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="default-03">New Password </label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="npwd" name="npwd" required>
                                                        <input type="hidden" class="form-control" name="peid" value="<?if($eid!='')echo $eid; else echo $peid ?>">
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="default-03">Re-type new Password
                                                    </label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="rpwd" name="rpwd" required>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                            </div>
                                            <div class="alert alert-bi-file bg-gray-200  rounded-0">
                                                <div class="col-md-12">
                                                    <div class="form-group text-right ">
                                                        <button type="submit" name="sub" class="btn btn-lg btn-primary">Change Password</button>
                                                        <a class="btn btn-lg btn-danger text-white" href="<?=$Relink?>" >Exit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

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

</body>

</html>