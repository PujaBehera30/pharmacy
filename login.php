<?php
$user=$_POST["user"];
$pass=$_POST["password"];

$conn = new mysqli('localhost','root','','pharmacy') or die("Unable to connect");

   
    if($sql= $conn->query("SELECT * from registration where Pharmacy_id= '$user'"))
    {
       echo $user,"  ",$pass."<br>" ;
    }
else
{
    echo "Error: " .$conn->error;
}
echo $sql->num_rows;
while($row= $sql->fetch_assoc())
{   $s1=$row["paswrd"];
    $s2=$row["Pharmacy_id"];
}

if($pass == $s1)
{ echo "hello";

    echo $s2;
   $conn-> query("INSERT into loggedin(pharmacy_id) values('$s2')");
    header("location: phm.php");
}
else
{
     header("location: login2.html");
}
?>