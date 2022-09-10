<style>
  body {
    font-family: system-ui;
  }
</style>
<?php
$host = "127.0.0.1";
$username = "root";
$password = "root";
$database = "todolist";

// Error connection with mysql:8.0.3

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
  die("<p style='color: #ce0c00; font-weight: bold;'>Error: " . $connection->connect_error) . "</p>";
}

// echo "Successfully connection!!<br>";

$sql = "CREATE DATABASE IF NOT EXISTS todolist";
if ($connection->query($sql) === true) {
  // echo "Database create successfully!!<br>";
} else {
  die("Error to create database: " . $connection->error);
}

$sql = "CREATE TABLE IF NOT EXISTS todo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    text VARCHAR(100) NOT NULL,
    status BOOLEAN NOT NULL,
    `timestamp` TIMESTAMP
)";
if ($connection->query($sql) === true) {
  // echo "Table create successfully!!";
} else {
  die("Error: " . $connection->error);
}

function getConnection() {
  global $connection;
  return $connection;
}