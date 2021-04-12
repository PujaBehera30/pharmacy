
<?php
    $conn = new mysqli('localhost','root','','pharmacy');

// Grab User submitted information
$email = $_POST["user"];
$pass = $_POST["password"];

// Connect to the database
// Make sure we connected successfully
if(!$conn)
{
    die('Connection Failed'.mysqli_error());
}




$result = $conn-> query("SELECT * FROM admin WHERE user = '$email' and Password='$pass'");

$row = mysqli_fetch_assoc($result);

if($row["user"]==$email && $row["Password"]==$pass)
    header("location: adminmenu.html");
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>