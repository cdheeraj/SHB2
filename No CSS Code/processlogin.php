<html>
<body>
<?php
session_start();
include"dbconnect.php";
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$query="SELECT uid, upswd FROM user where uid='$uname'";
$result=$link->query($query);
$row=mysqli_fetch_array($result);
$dbpwd=$row[1];



if($dbpwd==$pwd)
{
$_SESSION['uid']=$uname;
echo "<script>window.location='home.php';</script>";
}
else
{
echo "<script>window.location='login.php?err=1';</script>";
}
?>
</body>
</html> 
