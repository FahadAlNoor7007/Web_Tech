<?php
$host="localhost";
$user="root";
$pass="";
$db="university_library";

$conn=mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection Error: ". mysqli_connect_error());
}
// echo "Connection Successfull" 
?>