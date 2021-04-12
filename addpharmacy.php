<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];

$conn= new mysqli('localhost','root','','pharmacy');

$conn->query("INSERT into pharmacy value('$a','$b','$c','$d')");
header("location: admin.php");

?>