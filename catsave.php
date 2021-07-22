<?php
session_start();
include 'dbconnect.php';
$cat=$_POST["cat"];
$q="insert into cat(category) values ('$cat')";
$r=$link->query($q);
echo "<script>window.location='catdefine.php';</script>";
