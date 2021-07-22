<html>
<table>
<form name='edit'>
<?php  
include 'dbconnect.php';
$id=$_POST['sel'];
$q="select * from book where ID='$id'";
$c=$link->query($q);
$row=mysqli_fetch_array($c);
echo "<tr><td>Category:</td><td><select name='cat' id='cat'>
  <option value='Children'>Children</option>
  <option value='Novel'>Novel</option>
  <option value='Science and Technology'>Science and Tech</option>
  <option value='History'>Hisory</option></td></tr>";
echo "<td>Book Name:</td><td><input type='text' name='name' id='name' value='$row[2]'></td></tr>";
echo "<td>Language:</td><td><input type='text' id='lang' name='lang' value='$row[3]'></td></tr>";
echo "<td>Author:</td><td><input type='text' id='author' name='author' value='$row[4]'></td></tr>";
echo "<td>Original MRP:</td><td><input type='text' id='oprice' name='oprice' value='$row[5]'></td></tr>";
echo "<td>Your Price:</td><td><input type='text' id='price' name='price' value='$row[6]'></td></tr>";
echo "<td>Published Year:</td><td><input type='text' id='year' name='year' value='$row[7]'></td></tr>";
echo "<input type='hidden' id='id' name='id' value='$row[0]'></td></tr>";
echo "<input type='button' value='Save' onclick='save()'>"




?>

<script>
function save()
{
document.edit.action='editsave.php';
document.edit.method='post';
document.edit.submit();
}
</script>

</form>
</html>