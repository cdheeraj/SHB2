
<?php

include 'dbconnect.php';
$c=$_POST['cat'];
$name=$_POST['name'];
$lan=$_POST['lang'];
$author=$_POST['author'];
$op=$_POST['oprice'];
$p=$_POST['price'];
$y=$_POST['year'];
$ids=$_POST['id'];
$q="update book set category='$c', name='$name', lang='$lan', author='$author', oprice='$op', price='$p', year='$y'  where ID='$ids'";
$c=$link->query($q);
echo "<script>window.location='edit.php'</script>";

?>
