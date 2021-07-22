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

<form name="loginform">


<div class="title">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>
<div class="topnav">Welcome...</div><body>
<div>
<img src='blogin.jpg' class="bgimg" width="70%" height="100%"> </div>
<div class="container">
<b style="color:black">Login Id:
<input type="text" id="uname" name="uname" placeholder="Enter Username"><br>
Password:</b>
<input type="Password" id="pwd" name="pwd" placeholder="Enter Password"><br>
<button type="button" class="login" onclick=validation()> Login <br>
 
  </div><br>
  
   <div class="container1" style="background-color:#f1f1f3">
    <button type="button" class="register" onclick=register()>Sign Up</button>
    <span class="psw">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspForgot <a href="#">password?</a></span>
  </div>
  </body>
  
  <style>
  
body {
  margin: 0;
  background-color: #d9b08c;
}

.bgimg
{
float: left;


background-image: url("blogin.jpg"); 
  padding: 0px;
  
    top: 23.5%;
    bottom: 0%;
	right:50%;
	left:0%;
}

.title
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
  padding:10px 0px 10px 0px;
  color:white;
  font-weight: bold;
  font-variant: small-caps;
}
/* Add padding to containers */
.container {
float: left;
overflow: hidden;
color: black;
  padding: 5px;
  position: absolute;
   top: 34%;
   right: 0px;
	width: 28%;
}
.container1 {
  padding: 0px;
  position: absolute;
    top: 70%;
    right: 0px;
	width: 30%;
}
input[type=text], input[type=password], input[type=button] {
  width: 70%;
  padding: 10px 0px;
  margin: 18px 10px;
  position: top right;
  display: inline-block;
  border: 1px solid #ccc;
  position: right;
  
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}



.register {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

button:hover {
  opacity: 0.8;
}


/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}






.books {
 height: 0px;
  width: 0%;
  padding: 0px;
  background: blue;
}


  </style>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

<script>

function validation()
{
if(document.getElementById("uname").value=="")
{
alert("Please enter User Name");
return 0;
}
if(document.getElementById("pwd").value=="")
{
alert("Please enter Password");
return 0;
}
document.loginform.action="processlogin.php";
document.loginform.method="post";
document.loginform.submit();
}

function register()
{
document.loginform.action="register.php";
document.loginform.submit();
}

</script>



</form>


</html>