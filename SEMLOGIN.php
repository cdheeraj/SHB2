<html>
<head>
<title>Smart Event Management</title>
<script>
function validation()
{
if(document.getElementById("uname").value == "")
{
	alert("Please enter username");
	return 0;
}
if(document.getElementById("pwd").value == "")
{
	alert("Please enter password");
	return 0;
}
document.loginform.action="processlogin.php";
document.loginform.method="post";
document.loginform.submit();
}
function GoNext()
{
document.loginform.action="registration.php";
document.loginform.submit();
}

</script>
</head>
<body background="log.jpg">


<?php
if(isset($_GET['err']))
{
echo "<font color='red'><b><h1>invalid Username/Password</h1></font>";
}
?>

<form name="loginform"><br><br>
<p align="right"><img src="1.png" height="120" width="650"></p>
<br><br><br><br><br><br><br><br><br><br>

<table align="right" cellpadding="10" cellspacing="1">
<tr>
<td><font face="lucida fax" size="5"><i><b>Login Id:</b></i></td>
<td><input type="text" id="uname" name="uname"></td>
</tr>
<tr>
<td><font face="lucida fax" size="5"><i><b>Password:</b></i></td>
<td><input type="Password" id="pwd" name="pwd"></td>
</tr>
<tr>
<td colspan="2"><img src="login1.jpg" height="40" width="150" onclick="validation()"></td></tr>
<tr><td colspan="2"><img src="register.png" height="40" width="150" onclick="GoNext()"></td>
<tr><td colspan="2"><a href="forgot.php" title="Click here">Forgot password?</a></td>

</tr>
</table>
</form>
</body>
</html> 