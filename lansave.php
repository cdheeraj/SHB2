<?php
session_start();
include 'dbconnect.php';
$cat=$_POST["cat"];
$q="insert into lan(lan) values ('$cat')";
$r=$link->query($q);
echo "<script>window.location='landefine.php';</script>";
