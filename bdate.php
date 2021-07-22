<?php session_start();
if(!isset($_SESSION['uid']) || $_SESSION['uid']==""){
	echo "<script>window.location='login.php';</script>";
}

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
  color:white;
  font-weight:bold;
}

.button {
  background-color: #17252a;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
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
  
  
input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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
<script>
function go()
{
document.udate.action='bdate.php?view=yes';
document.udate.method='post';
document.udate.submit();
}

function exc()
{
document.udate.action='bexdate.php';
document.udate.method='post';
document.udate.submit();
}
</script>

<form name='udate'>
<div class="t">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>

<div class="topnav">
<?php /*&nbsp&nbsp&nbspWelcome&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*/?>
 <input type="button" value='Submit' class="button" onclick='go()'>
 <input type="button" value='Export to Excel' class="button" onclick='exc()'>
 </div>
From:
  <input type="date" id="udate1" name="udate1">
  To:
  <input type="date" id="udate2" name="udate2">
 
  
<table border="1" cellpadding="6" cellspacing="1">

  <?php
 include "dbconnect.php";

 
if(isset($_GET['view']))
{

$from=$_POST['udate1'];
$to=$_POST['udate2'];
$_SESSION['ufrom']=$from;
$_SESSION['uto']=$to;
$c="select category, Name, lang, author, price, upld_on from book WHERE upld_on BETWEEN '$from' AND '$to'";
 $d=$link->query($c);


echo "<tr><th>Category</th><th>Name</th><th>Language</th><th>author</th><th>price </th><th>uploaded date</th></tr>";
 while($s=mysqli_fetch_array($d))
 {
echo "<tr><td>$s[0]</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td><td>$s[4]</td><td>$s[5]</td></tr>";

}
}

 echo "</table>";
 
 
 /*......................................................................................................................................
 ..........................................................................................................................................
 .......................................................................................................................................*/


?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </form>
 </html>