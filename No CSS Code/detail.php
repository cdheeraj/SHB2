<html>
<table border="1">

<?php
include 'dbconnect.php';
$sel=$_POST['sel'];

$q="select * from book b, user u where b.ID='$sel'";
$l=$link->query($q);
$row=mysqli_fetch_array($l);


echo "<tr>";
echo "<td><i>Category</td><td>";
echo $row[1];
echo "</td></tr>";

echo "<tr><td><font color='green'><i>Book Name</td><td>";
echo $row[2];
echo "</td></tr>";

echo "<tr><td><font color='green'><i>Language</td><td>";
echo $row[3];
echo "</td></tr>";

echo "<tr><td><font color='green'><i>Author</td><td>";
echo $row[4];
echo "</td></tr>";


echo "<tr><td><font color='green'><i>Price/td><td>";
echo $row[6];
echo "</td></tr>";

echo "<tr><td><font color='green'><i>Year</td><td>";
echo $row[7];
echo "</td></tr>";

echo "<tr><td><font color='green'><i>Seller name</td><td>";
echo $row[10];
echo "</td></tr>";

echo "<tr><td><font color='green'><i>Seller Contact Number</td><td>";
echo $row[12];
echo "</td></tr>";

echo "<tr><td><font color='green'><i>Seller Email ID</td><td>";
echo $row[11];
echo "</td></tr>";
?>
</tr>
</table>