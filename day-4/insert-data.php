<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_4";


$connect = new mysqli($serverName, $userName, $password, $databaseName);

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

$sql = "INSERT INTO aptech_php_22_4.users (email, password)
VALUES ('nam@gmail.com','123456'),
('nu@gmail.com','123456')";

if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();