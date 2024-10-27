<?php
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'livelymydb';

// Amazon RDS
$host = 'livelymy.czgaq2ekg3ad.us-east-1.rds.amazonaws.com';
$username = 'admin';
$password = 'Password0123';
$database = 'livelymydb';

// Create connection
$database = new mysqli($host, $username, $password, $database);

// Check connection
if ($database->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
