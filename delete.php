<html><?php
include "dbconnect.php";
$id=$_POST["sel"];

$sel="delete from book where ID='$id'";
$del=$link->query($sel);
echo "<script>window.location='edit.php';</script>";
?>
</html>