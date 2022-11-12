<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "hostel_proj";
// $conn = new mysqli($server, $user, $password, $db);
$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn)
{
    // echo "Connected";
    echo "Error".mysqli_connect_error();
}
else
{
 $user = $user;   
}
?>