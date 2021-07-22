<html>
<title>SHB</title>
<form name="add">

Choose Category:<select name="cat" id="cat">
  <option value="Child">Children</option>
  <option value="Novel">Novel</option>
  <option value="Science and Technology">Science and Tech</option>
  <option value="History">Hisory</option>
</select><br>


Book Name:<input type="text" id="name" name="name"><br>
Language:<input type='text' id='lang' name='lang'><br>
Author Name:<input type='text' id='author' name='author'><br>
Original MRP:<input type='text' id='oprice' name='oprice'><br>
Your Price:<input type='text' id='price' name='price'><br>
Published Year:<input type='text' id='year' name='year'><br>
<input type='button' value='Submit' onclick=validation()>

<script>
function validation()
{
if(document.getElementById("name").value==""){
alert("Enter Book Name");
return 0;
}
if(document.getElementById("lang").value==""){
alert("Enter Book Name");
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
</script></form>


</html>