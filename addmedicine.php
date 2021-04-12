<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

$conn= new mysqli('localhost','root','','pharmacy');

$conn->query("INSERT into medicinetable values('$a','$b','$c')");
header("location: adminmenu.html");

?>