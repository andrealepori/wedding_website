<?php
// Database configuration
// Database locale
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName     = "codexworld";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



?>

<?php
//DB online!
// Database configuration
/*
$dbHost     = "localhost:3306";
$dbUsername = "andrealepori";
$dbPassword = ".Piumino1997!";
$dbName     = "uploadfoto";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



