<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>