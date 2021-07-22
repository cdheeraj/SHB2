<html>
<title>SHB</title>
<head>SHB</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {

  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  text-align: center;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

button:hover {
  opacity: 0.8;
}
</style>
<form name="loginform">

<table>
Login Id:
<input type="text" id="uname" name="uname"><br>
Password:
<input type="Password" id="pwd" name="pwd"><br>
<input type="button" value="Login" onclick=validation()><br>
<input type="button" value="Register" onclick=register()><br>
<a href="forgot.php">Forgot password?</a>
</table>

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