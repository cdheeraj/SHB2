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
<title>SHB</title>
<div class="t">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>
<div class="topnav">&nbsp&nbsp&nbspEnter details of your book&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type='button' class='button' value='Return to Login' onclick=gologin()><input type='button' class='button' value='Submit' onclick=Validation()></div>
<form name="register">
<div class="container">
<div class="row">
<div class="col-25">Name:</div>
    <div class="col-75"><input type="text" id="name" name="name"><br></div></div> 
<div class="row">
<div class="col-25">Email:</div>
    <div class="col-75"><input type="text" id="email" name="email"><br></div></div> 

<div class="row">
<div class="col-25">Contact Number:</div>
    <div class="col-75"><input type="text" id="cno" name="cno"><br></div></div> 

<div class="row">
<div class="col-25">Choose User ID:</div>
    <div class="col-75"><input type="text" id="uid" name="uid"><br></div></div> 

<div class="row">
<div class="col-25">Choose Password:</div>
    <div class="col-75"><input type="text" id="pwd" name="pwd"><br></div></div> 
</div>
</form>
<script>
function Validation()
{
if(document.getElementById("name").value=="")
{
alert("Please enter Your Name");
return 0;
}

if(document.getElementById("email").value=="")
{
alert('Please enter your Email ID');
return 0;
}

if(document.getElementById("cno").value=="")
{
alert('Please enter Your Contact Number');
return 0;
}

if(isNaN(document.getElementById("cno").value))
{
alert('Enter Only Digit');
return 0;
}

if(document.getElementById("cno").value.length!=10)
{
alert('Enter 10 Digit Number');
return 0;
}

if(document.getElementById("uid").value=="")
{
alert('Please Choose Your User ID');
return 0;
}

if(document.getElementById("pwd").value=="")
{
alert('Please Choose Your Password');
return 0;
}
alert(1);
document.register.action="regform.php";
document.register.method="post";
document.register.submit();
}

function gologin()
{document.register.action="login.php";
document.register.submit();}

</script>

</html>