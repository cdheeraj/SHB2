<html>
<title>SHB</title>
<head>REGISTRATION</head>
<form name="register"><table>
Name:<input type="text" id="name" name="name"><br>
Email:<input type="text" id="email" name="email"><br>
Contact Number:<input type="text" id="cno" name="cno"><br>
Choose User ID:<input type="text" id="uid" name="uid"><br>
Choose Password:<input type="text" id="pwd" name="pwd"><br>
<input type="button" value="Submit" onclick=Validation()><br>
<input type="button" value="Return to Login Page" onclick=gologin()></table>
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

if(document.getElementById("cno").value.length!=13)
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