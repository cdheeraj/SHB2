<html>
<head>
<?php 
session_start();
$user=$_SESSION['uid'];
?>



<form name="v">
<script>

function edit()
{
var i,f=0;
	var rdboxs=document.getElementsByName('sel');
	for(i=0;i<rdboxs.length;i++)
	{
		if(rdboxs[i].checked)
		{ 
		f=1;
		break;
		}
	}
	if(f==0)
	{
		alert("Please select atleast one option");
		return false;
	} 
document.v.action="pedit.php";
document.v.method="post";
document.v.submit();
}

function del()
{
 var i,f=0;
	var rdboxs=document.getElementsByName('sel');
	for(i=0;i<rdboxs.length;i++)
	{
		if(rdboxs[i].checked)
		{ 
		f=1;
		break;
		}
	}
	if(f==0)
	{
		alert("Please select atleast one option");
		return false;
	} 
 var c=confirm('Are you sure to delete?');
 if(c)
 {
document.v.action="delete.php";
document.v.method="post";
document.v.submit();
}
}





</script>
<table  border="1" cellpadding="6" cellspacing="1">
<tr>
<td></td>
<td><font color="green"><i>Category</td>
<td><font color="green"><i>Book Name</td>
<td><font color="green"><i>Language</td>
<td><font color="green"><i>Author</td>
<td><font color="green"><i>Original Price</td>
<td><font color="green"><i>Your Price</td>
<td><font color="green"><i>Year</td>
</tr>
<?php
include "dbconnect.php";
$q="select * from book where uid='$user' order by category,name";
$r=$link->query($q);
while($row=mysqli_fetch_array($r))
{
echo "<tr>";
	echo "<td>";
	echo "<input type='radio' name='sel' value='$row[0]'>";
	echo "</td>";
	echo "<td>";
	echo $row[1];
	echo "</td>";
	echo "<td>";
	echo $row[2];
	echo "</td>";
	echo "<td>";
	echo $row[3];
	echo "</td>";
	echo "<td>";
	echo $row[4];
	echo "</td>";
	echo "<td>";
	echo $row[5];
	echo "</td>";
	echo "<td>";
	echo $row[6];
	echo "</td>";
	echo "<td>";
	echo $row[7];
	echo "</td>";
	echo "</tr>";
}
?>

</table>



<input type='button' value='Edit' onclick=edit()>
<input type='button' value='Delete' onclick=del()>

</form>

</body>
</head>

</html>