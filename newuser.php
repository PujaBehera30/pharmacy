<?php
$pwd=$_POST["paswrd"];
$pid=$_POST["pid"];
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["Gender"];
$phno=$_POST["phone_no"];
  $conn= new mysqli('localhost','root','','pharmacy');

$sql= $conn-> query("insert into REGISTRATION values('$pid','$pwd')");
$sq= $conn-> query("insert into users values('$name','$pid','$pwd','$email','$gender','$phno')");
header("location: login.html");
?>