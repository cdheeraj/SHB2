<?php session_start();
if(!isset($_SESSION['uid']) || $_SESSION['uid']==""){
	echo "<script>window.location='login.php';</script>";
}

?>


<!DOCTYPE html>
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
  width: 20%;
  
}

td {
  color: black;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<div class="t">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>
<div class="topnav">&nbsp&nbsp&nbspDetails&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type='button' class='button' value='Home' onclick=home()></div>
<form name="v">
<table border="1">

<?php
include 'dbconnect.php';
$sel=$_POST['sel'];

$q="select * from book b, user u where b.ID='$sel'";
$l=$link->query($q);
$row=mysqli_fetch_array($l);


echo "<tr>";
echo "<th><i>&nbsp&nbsp&nbsp&nbsp&nbspCategory</th><td>";
echo $row[1];
echo "</td></tr>";

echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspBook Name</th><td>";
echo $row[2];
echo "</td></tr>";

echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspLanguage</th><td>";
echo $row[3];
echo "</td></tr>";

echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspAuthor</th><td>";
echo $row[4];
echo "</td></tr>";


echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspPrice</th><td>";
echo $row[6];
echo "</td></tr>";

echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspYear</th><td>";
echo $row[7];
echo "</td></tr>";

echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspSeller name</th><td>";
echo $row[11];
echo "</td></tr>";

echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspSeller Contact Number</th><td>";
echo $row[13];
echo "</td></tr>";

echo "<tr><th><i>&nbsp&nbsp&nbsp&nbsp&nbspSeller Email ID</th><td>";
echo $row[12];
echo "</td></tr>";
?>
</tr>
</table>
</form>
<script>
function home()
{
document.v.action="home.php";
document.v.submit();
}
</script>
</html>