<?php
require("config.php");
setcookie("uname", "", time()-3600);
setcookie("eid", "", time()-3600);
setcookie("cid", "", time()-3600);
setcookie("previ", "", time()-3600);

    if (isset($_SESSION['username']))
       {
       session_unset();
       session_destroy();
       }

	$redirect ="index.php";
	$url = $hostname.$redirect;
    header("Location:$url");
    exit();

	?>
