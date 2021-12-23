<?php 
$servername = 'localhost:1433';
$username = 'root';
$password = '12345';
$db_name = 'bikesystem';

// Create connection
$conn = mysqli_connect($servername,$username,$password,$db_name);

// Ckeck connection

if(!$conn) {
    die("Could not connect to" . mysqli_connect_error());
}






?>