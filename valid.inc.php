<?php session_start();?>
<?
  if (isset($_SESSION['username']))
     {}
     else {
         $redir1="index.php";
         $url=$hostname.$redir1;
         header("Location:$url");
         }
?>