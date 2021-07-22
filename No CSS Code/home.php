<?php session_start();
$user=$_SESSION['uid'];
?>



<html>
<title>SHB</title>
<head>HOME</head>

<style>
<body>

</body></style>


<form name="home">
<input type='button' value='Upload' onclick=add()><br>
<input type='button' value='Your Books' onclick=edit()><br>

</script>

<table  border="1" cellpadding="6" cellspacing="1">
<tr>
<td></td>
<td><font color="green"><i>Category</td>
<td><font color="green"><i>Book Name</td>
<td><font color="green"><i>Language</td>
<td><font color="green"><i>Author</td>
<td><font color="green"><i>Price</td>
<td><font color="green"><i>Year</td>
</tr>
<?php
include "dbconnect.php";
$q="select * from book order by category,name";
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
	echo $row[6];
	echo "</td>";
	echo "<td>";
	echo $row[7];
	echo "</td>";
	echo "</tr>";
}
?>


<script> 
function add()
{
document.home.action="add.php";
document.home.submit();
}
function edit()
{
document.home.action="edit.php";
document.home.submit();
}
function detail()
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
	
	
	
document.home.action='detail.php';
document.home.method="post";
document.home.submit();
}
function logout()
{
document.home.action='logout.php';
document.home.method="post";
document.home.submit();
}

</script>

<input type='button' value='View' onclick='detail()'>
<input type='button' value='Logout' onclick='logout()'>






</form>


</html>