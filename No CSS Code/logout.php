<?php
session_start();
$_POST["uname"]="";
$_POST["pwd"]="";
$_SESSION['uid']="";
echo "<script>window.location='login.php';</script>";
?>