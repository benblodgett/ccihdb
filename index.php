<?
require("config.php");
$today1 = date("F j, Y, g:i:s a");

if(isset($_POST['sub']))
   {
$emailid=$_POST["emailid"];
$password=md5($_POST["password"]);

if(strlen($emailid)==0 )
   	{
   	$error=$error. "Enter your email address"."<br />";
    $errval=true;
    }
	
if(strlen($password)==0 )
   	{
   	$error=$error. "Enter your password"."<br />";
    $errval=true;
    }

	
	if($error!=TRUE)
	{
	$flaa = mysqli_query($CCIHCon, "select * from members where pri_email='$emailid' and pwd='$password'") or die(mysqli_error($CCIHCon));
	
	if (mysqli_num_rows($flaa) >0){
		$rsmember = mysqli_fetch_array($flaa);
		
			 
		if($rsmember['suspended']!=1){
        $name = $rsmember['name'];
        $pri_email = $rsmember['pri_email'];
		$center_id = $rsmember['center_id'];
        $center_name = $rsmember['center_name'];
        $previ = $rsmember['previlege'];
			setcookie("uname", $name);
            setcookie("eid", $pri_email);
            setcookie("cid", $center_id);
            setcookie("cname", $center_name);
            setcookie("previ", $previ);
			session_start();
             $_SESSION["username"]=$name;
             $_SESSION["DBload"]=0;
			if (strcmp($previ, "User") == 0 || strcmp($previ, "OA") == 0) {
				session_start();
             $_SESSION["username"]=$name;
            $redirect ="c".$center_id.".php";
			$url = $hostname.$redirect;  
			header("Location:$url");  
			exit();  
			}else if (strcmp($previ, "SA") == 0) {
				session_start();
             $_SESSION["username"]=$name;
            $redirect ="ahome.php";
			$url = $hostname.$redirect;  
			header("Location:$url");  
			exit();  
			}
		}else{
		$error="Your account is disabled";	
		}
		
	
	}
	else{
	$error="Invalid Email ID/Password";
	}
         				
	
	
	}
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title  -->
    <title>30x30 Health Systems Initiative </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="ccih-body bg-white npc-default pg-auth">
    <div class="ccih-app-root">
        <!-- main  -->
        <div class="ccih-main ">
            <!-- wrap -->
            <div class="ccih-wrap ccih-wrap-nosidebar">
                <!-- content -->
                <div class="ccih-content ">
                    <div class="ccih-split ccih-split-page ccih-split-md">                    
                        <!-- .ccih-split-content -->
                        <div class="ccih-split-content ccih-split-stretch bg-bluectm d-flex" >
                        <!-- <div class="ccih-split-content ccih-split-stretch bg-bluectm d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true"> -->
                        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">                        
                                <div class="slider-item">                                
                                    <div class="ccih-feature ccih-feature-center">   
                                        <div class="ccih-feature-img">                                            
                                            <img class="round" src="./images/_30x30_logo-lg.png" srcset="./images/_30x30_logo-lg.png 2x" alt="">
                                            <!-- <img class="round" src="./images/_30x30_logo-lg-White.png" srcset="./images/_30x30_logo-lg-White.png 2x" alt=""> -->
                                            <!-- <img class="round" src="./images/_30x30_logo-lg-Yellow.png" srcset="./images/_30x30_logo-lg-Yellow.png 2x" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .slider-wrap -->
                        </div>
                        <!-- .ccih-split-content -->


                        <div class="ccih-split-content ccih-block-area ccih-block-area-column ccih-auth-container bg-white tm-30">
                          
                        <!-- <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div> -->
                            <div class="ccih-block ccih-block-middle ccih-auth-body ">
                                <div class="ccih-block-head mt-5">
                                    <div class="ccih-block-head-content">
                                        <h5 class="ccih-block-title">Sign-In</h5>
                                        <div class="ccih-block-des">
                                            <p>Access the 30x30 Health Systems Initiative portal using your email and password.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .ccih-block-head -->
                                <form method="post" action="<?echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-validate">
                                 <?
                                    if($error){
                                    echo "<div class='alert alert-fill alert-danger alert-icon'>";
                                    echo '<em class="icon ni ni-cross-circle"></em> '.$error;
                                    echo "</div>";
                                    }
                                    ?>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <input type="email" class="form-control form-control-lg" name="emailid" placeholder="Enter your email address" required>
                                    </div>
                                    <!-- .foem-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                           <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter your password" required>
                                        </div>
                                    </div>
                                    
                                    <!-- .foem-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" >Sign in</button>
                                    </div>
                                </form>
                                <!-- form -->
                                <div class="form-note-s2 pt-4"> Forgot Password? <a href="forpwd.php">Click here</a>
                                </div>


                            </div>
                            <!-- .ccih-block -->
                            <div class="ccih-block ccih-auth-footer">
                                <div class="mt-3 text-right">
                                    <p>&copy; <?=date("Y"); ?> CCIH. All Rights Reserved.</p>
                                </div>
                            </div>
                            <!-- .ccih-block -->
                        </div>



                    </div>
                    <!-- .ccih-split -->
                </div>
                <!-- wrap -->
            </div>
            <!-- content -->
        </div>
        <!-- main-->
    </div>
    <script src="./assets/js/bundle.js"></script>
    <script src="./assets/js/scripts.js"></script>

</html>