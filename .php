<?php
$users=$_POST["username"];
$pwd=$_POST["password"];
$pid=$_POST["pharmacy"];

$conn= new mysqli('localhost','root','','pharmacy');
mysqli_select_db($conn,"pharmacy");
$sql= $conn-> query("insert into REGISTRATION values('$users', '$pwd','$pid')");
?>