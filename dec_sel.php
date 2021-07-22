<html>
<?php include 'dbconnect.php';
$id=$_POST['id'];
$q="update user set seller_status='declined' where ID='$id'";
$c=$link->query($q);
echo "<script>window.location='approve.php';</script>";
?>

</html>