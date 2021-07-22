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


input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
select[id=cat]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;	
}

input[type=submit]:hover {
  background-color: #45a049;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-family: Arial, Helvetica, sans-serif;
  font-variant: small-caps;
  font-weight: bold;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
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
<div class="topnav">&nbsp&nbsp&nbspEnter details of your book&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type='button' class='button' value='Home' onclick=home()><input type='button' class='button' value='Submit' onclick=validation()></div>
<form name="add">


<div class="container">
 <div class="row">
    <div class="col-25">

Choose Category:
</div>
    <div class="col-75">
<select name="cat" id="cat">
<?php
include "dbconnect.php";
 $c="select * from cat";
$q=$link->query($c);

while($row=mysqli_fetch_array($q))
{


  echo "<option value='$row[0]'>$row[0]</option>";
}
  ?></select><br></div>
</div>


  
	
	
 <div class="row">
<div class="col-25">
Book Name:
</div>
    <div class="col-75"><input type="text" id="name" name="name"><br></div></div>
 <div class="row">
    <div class="col-25">	
Language:
</div>
    <div class="col-75"><select name="cat" id="cat">
<?php
include "dbconnect.php";
 $c="select * from lan";
$q=$link->query($c);

while($row=mysqli_fetch_array($q))
{


  echo "<option value='$row[1]'>$row[1]</option>";
}
  ?></select><br></div></div>


 <div class="row">
    <div class="col-25">
Author Name:
</div>
    <div class="col-75"><input type='text' id='author' name='author'><br></div>
</div>

 <div class="row">
    <div class="col-25">
Original MRP:
</div>
    <div class="col-75"><input type='text' id='oprice' name='oprice'><br></div></div>


 <div class="row">
    <div class="col-25">
Your Price:
</div>
    <div class="col-75"><input type='text' id='price' name='price'><br></div></div>


 <div class="row">
    <div class="col-25">
Published Year:
</div>
    <div class="col-75"><input type='text' id='year' name='year'><br></div></div>

</div>

<script>
function validation()
{
if(document.getElementById("name").value==""){
alert("Enter Book Name");
return 0;
}
if(document.getElementById("lang").value==""){
alert("Enter Language");
return 0;
}
if(document.getElementById("oprice").value==""){
alert("Enter Original MRP");
return 0;
}
if(document.getElementById("price").value==""){
alert("Enter Book Price");
return 0;
}
if(document.getElementById("year").value==""){
alert("Enter Year of Publication");
return 0;
}
document.add.action="padd.php"
document.add.method="POST";
document.add.submit();
}

function home()
{
document.add.action="home.php"
document.add.submit();
}
</script></form>



</html>