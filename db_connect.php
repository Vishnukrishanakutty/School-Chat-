<?php
$host = 'localhost';  // Database host (usually localhost)
$dbname = 'your_database_name';  // The name of your database
$username = 'your_database_username';  // The username for your database
$password = 'your_database_password'; 
$dsn = "mysql:host=$host;dbname=$dbname;"; 
$db = new PDO($dsn, $username, $password);
?>