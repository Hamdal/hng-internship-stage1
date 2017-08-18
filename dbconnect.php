<?php
$server = 'localhost'; // server
$username = 'root'; // database username
$password = ''; // database password 
$db = 'intern'; // database name

$connection = mysqli_connect($server, $username, $password, $db)
  or die('Error connecting to MySQL server');
?>