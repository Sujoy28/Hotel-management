<?php
session_start();
date_default_timezone_set('Asia/Kolkata'); 
$host = "localhost";
$username = "root";
$password = "";
$database = "hotel";

$conn = mysqli_connect($host,$username,$password,$database)or die(mysqli_error($conn));
?>
