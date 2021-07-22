<html>
<?php
SESSION_start();
$user=$_SESSION['uid'];

include 'dbconnect.php';
$addr=$_POST['addr'];
$adhar=$_POST['adhar'];
$q="update user set address='$addr', adhar='$adhar', seller_status='raised' where uid='$user'";
$c=$link->query($q);
echo $user;
?>
<script>

window.location='home.php';

</script>

</html>