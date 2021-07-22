<html>
<?php include 'dbconnect.php';
$id=$_POST['id'];
$q="update user set role='seller', seller_status='approved' where ID='$id'";
$c=$link->query($q);
echo "<script>window.location='approve.php';</script>";

?>

</html>