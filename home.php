<?php session_start();
if(!isset($_SESSION['uid']) || $_SESSION['uid']==""){
	echo "<script>window.location='login.php';</script>";
}
$user=$_SESSION['uid'];
$role=$_SESSION['role'];
?>


<!DOCTYPE html>
<head>
<title>SHB</title>

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



.dropdown {
  display: inline-block;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 15px 32px;
  background-color: inherit;
font-weight: bold;
  margin: 4px 2px;
  cursor: pointer;
  font-family: arial, arial black;
}

.dropbtn:hover {
  background-color: #474b4f;
  color: white;
  }
  
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<body>
<form name="home">
<div class="t">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>

<div class="topnav">
<?php /*&nbsp&nbsp&nbspWelcome&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*/?>
<button class="button">Home</button>
<?php if($role=='admin'||$role=='seller')
{
echo "<input type='button' class='button' value='Upload' onclick=add()>";



echo "<input type='button' class='button' value='Your Books' onclick=edit()>";
}?>
<input type='button' class='button' value='View' onclick='detail()'>
<?php if($role=='admin')
{
echo "<div class='dropdown'>
    <button class='dropbtn'>Reports 
      <i class='fa fa-caret-down'></i>
    </button>
    <div class='dropdown-content'>
      <a href='udate.php'>User Register Datewise</a>
      <a href='bdate.php'>Books Uploaded Datewise</a>
      
    </div>
  </div> ";}?>

<input type='button' class='button' value='Logout' onclick='logout()'>

<?php if($role=='customer')
{
echo "<input type='button' class='button' value='Become a seller' onclick='request()'>";
}

if($role=='admin')
{
echo "<input type='button' class='button' value='Requests' onclick='approve()'>";
echo "<div class='dropdown'>
    <button class='dropbtn'>Predefined Values 
      <i class='fa fa-caret-down'></i>
    </button>
    <div class='dropdown-content'>
      <a href='catdefine.php'>Category</a>
      <a href='landefine.php'>Language</a>
      
    </div>
  </div> ";
}

?>

<?php
include 'dbconnect.php';
$ss="select seller_status from user where uid='$user'";
$c=$link->query($ss);
$row=mysqli_fetch_array($c);

if($row[0]=='raised')
{
echo "<marquee direction='left'>Seller request raised. You will get seller access once admin grants.</marquee>";
}

?>

</div>



<table border="1" cellpadding="6" cellspacing="1">
<tr>
<th></th>
<th><i>Category</th>
<th><i>Book Name</th>
<th><i>Language</th>
<th><i>Author</th>
<th><i>Price</th>
<th><i>Year</th>
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



</td></tr></table>


</body>
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
 var c=confirm('Are you sure?');
 if(c){
document.home.action='logout.php';
document.home.method="post";
document.home.submit();
}
}

function request()
{
document.home.action='request.php';
document.home.submit();
}

function approve()
{
document.home.action='approve.php';
document.home.submit();
}
function define()
{
document.home.action='define.php';
document.home.submit();
}


</script>








</form>


</html>