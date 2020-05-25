<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_4";


$connect = mysqli_connect($serverName, $userName, $password, $databaseName);

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE aptech_php_22_4.users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if (mysqli_query($connect, $sql)) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($connect);
}

mysqli_close($connect);