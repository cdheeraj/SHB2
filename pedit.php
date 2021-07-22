<?php session_start();
if(!isset($_SESSION['uid']) || $_SESSION['uid']==""){
	echo "<script>window.location='login.php';</script>";
}

?>


<html>

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

select[id=cat]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
select[id=lan]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
</style>
<form name='edit'>
<div class="t">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>
<div class="topnav">&nbsp&nbsp&nbspEdit details&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type='button' class='button' value='Back' onclick=back()><input type='button' class='button' value='Home' onclick=home()><input type='button' class='button' value='Save' onclick=validation()></div>


<?php  
include 'dbconnect.php';
$id=$_POST['sel'];
$q="select * from book where ID='$id'";
$c=$link->query($q);
$row=mysqli_fetch_array($c);
?>
<div class="container">
<?php
echo "<div class='row'>
    <div class='col-25'>Category:</div>
    <div class='col-75'><select name='cat' id='cat'>";
	$ca='select * from cat';
$qa=$link->query($ca);

while($rowa=mysqli_fetch_array($qa))
{


  echo "<option value='$rowa[0]'>$rowa[0]</option>";
}
  echo "</select><br></div></div>";
echo "<div class='row'>
    <div class='col-25'>Book Name:</div>
    <div class='col-75'><input type='text' name='name' id='name' value='$row[2]'><br></div>";
echo "<div class='row'>
    <div class='col-25'>Language:</div>
    <div class='col-75'><select name='lan' id='lan'>"; 
	$cal='select * from lan';
$qal=$link->query($cal);

while($rowal=mysqli_fetch_array($qal))
{


  echo "<option value='$rowal[1]'>$rowal[1]</option>";
}
  echo "</select><br></div></div>";
echo "<div class='row'>
    <div class='col-25'>Author</div>
    <div class='col-75'><input type='text' id='author' name='author' value='$row[4]'><br></div>";
echo "<div class='row'>
    <div class='col-25'>Original MRP:</div>
    <div class='col-75'></td><td><input type='text' id='oprice' name='oprice' value='$row[5]'><br></div>";
echo "<div class='row'>
    <div class='col-25'>Your Price:</div>
    <div class='col-75'></td><td><input type='text' id='price' name='price' value='$row[6]'><br></div>";
echo "<div class='row'>
    <div class='col-25'>Published Year:</div>
    <div class='col-75'></td><td><input type='text' id='year' name='year' value='$row[7]'><br></div>";
echo "<input type='hidden' id='id' name='id' value='$row[0]'></td></tr>";





?>

<script>
function validation()
{
if(document.getElementById("name").value==""){
alert("Enter Book Name");
return 0;
}
if(document.getElementById("lan").value==""){
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
document.edit.action='editsave.php';
document.edit.method='post';
document.edit.submit();
}


function home()
{
document.edit.action="home.php"
document.edit.submit();
}
function back()
{
document.edit.action="edit.php"
document.edit.submit();
}
</script>

</form>
</html>