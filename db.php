<?php
$conn = mysqli_connect("localhost","root","","leave_system");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>