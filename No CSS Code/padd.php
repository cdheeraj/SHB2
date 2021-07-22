

<?php
session_start();

$user=$_SESSION['uid'];


include 'dbconnect.php';
$cat=$_POST["cat"];
$name=$_POST["name"];
$lang=$_POST["lang"];
$author=$_POST["author"];
$oprice=$_POST["oprice"];
$price=$_POST["price"];
$year=$_POST["year"];
$user=$user;

$q="insert into book(category, Name, lang, author, oprice, price, year, uid) values ('$cat','$name','$lang','$author','$oprice','$price', '$year', '$user')";

//$q="insert into book(category, Name, lang, author, oprice, price, year) values ('$cat','$name','$lang','$author','$oprice','$price', '$year')";
$r=$link->query($q);



?>
