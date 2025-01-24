<?php
// # local db
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'livelymydb';

// Amazon RDS
$host = 'database-1.cvg8yyg0it3z.us-east-2.rds.amazonaws.com';
$username = 'admin';
$password = 'adminadmin';
$database = 'dhandb';

// Create connection
$database = new mysqli($host, $username, $password, $database);

// Check connection
if ($database->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>