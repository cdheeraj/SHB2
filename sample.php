<html>
<title>SHB</title>


<form name="loginform">

<table>
<tr><td>
<div class="books">
    <img class="blogin" src="blogin.jpg">
  </div></td><td>

 <div class="imgcontainer">
    <img src="login.jpg" alt="Avatar" class="avatar">
  </div>


<div class="container">
<b>Login Id:
<input type="text" id="uname" name="uname" placeholder="Enter Username"><br>
Password:</b>
<input type="Password" id="pwd" name="pwd" placeholder="Enter Password"><br>
<button type="button" class="login" onclick=validation()> Login <br>


  
  </div><br>
  
   <div class="container" style="background-color:#f1f1f3">
    <button type="button" class="register" onclick=register()>Sign Up</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  <style>
  
  </td></tr>
  </table>
 
form {
  border: 3px solid #f1f1f1;
}


input[type=text], input[type=password], input[type=button] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  
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

/* Add padding to containers */
.container {
  padding: 0px;
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