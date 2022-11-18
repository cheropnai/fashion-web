<?php
$conn=mysqli_connect("localhost","root","","test2");
if(! $conn){
    die("connection failed".mysqli_connect_error());
}

//echo "connection successful";
$connection = new mysqli("localhost", "root", "", "test2");

?>
