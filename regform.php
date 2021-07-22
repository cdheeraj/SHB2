<html>
<body>
<?php
include "dbconnect.php";
$name=$_POST["name"];
$email=$_POST["email"];
$cno=$_POST["cno"];
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
$date=date("Y/m/d");
$query="select uid from user where uid='$uid'";
$check=$link->query($query);
$row=mysqli_fetch_array($check);
$uu=$row[0];
if($uu<>$uid)
{
$q="insert into user(uname,uemail,umblno,uid,upswd,rdate)values('$name','$email','$cno','$uid','$pwd', '$date')" ;
$r=$link->query($q);
echo "<script>window.location='login.php ';</script>";
}
else{?>
<script>alert("User ID already exist. Please choose other User ID");</script><?php
echo "<script>window.location='register.php ';</script>";
}
?>
</body>
</html>


