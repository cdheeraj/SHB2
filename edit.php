<?php session_start();
if(!isset($_SESSION['uid']) || $_SESSION['uid']==""){
	echo "<script>window.location='login.php';</script>";
}
$user=$_SESSION['uid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SHB</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>


body {
  margin: 0;
}
.t
{

float: left;
 overflow: hidden;
  background-color: #116466;
  text-align: right;
  color:white;
  font-size: 50px;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px 0px 20px 0px;
   font-variant: small-caps;
  font-weight: bold;
  font-family: sans-serif, arial, arial black;

  
}

h2{
float: left;
font-size: 20px;
top: 0;
  left: 0;
  width: 100%;
}

.topnav {
float: left;
  overflow: hidden;
  background-color: #17252a;
  width: 100%;
  top: 0;
  left: 0;
  margin:0;
  font-family: arial, arial black;
  padding:5px 0px 5px 0px;
  color:white;
  font-weight: bold;
  font-variant: small-caps;
}

.button {
  background-color: #17252a;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
  margin: 4px 2px;
  cursor: pointer;
  font-family: arial, arial black;
  
}

.button:hover {
  background-color: #474b4f;
  color: white;
  }


table {
  border-collapse: collapse;
  width: 100%;
  font-family: sans-serif, arial, arial black;
}

th, td {
  text-align: left;
  padding: 8px;
  color:white;
  
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #d9b08c;
  color: white;
}

td {
  color: black;
}




</style>

<div class="t">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>

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


function home()
{
document.v.action="home.php"
document.v.submit();
}



</script>
<div class="topnav">&nbsp&nbsp&nbspYour books to sale&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type='button' class="button" value='Home' onclick=home()>
<input type='button' class="button" value='Edit' onclick=edit()>
<input type='button' class="button" value='Delete' onclick=del()></div>
<table  border="1" cellpadding="6" cellspacing="1">
<tr>
<th></th>
<th><i>Category</th>
<th><i>Book Name</th>
<th><i>Language</th>
<th><i>Author</th>
<th><i>Original Price</th>
<th><i>Your Price</th>
<th><i>Year</th>
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





</form>

</body>
</head>

</html>