<?php
$conn =new mysqli("localhost" , "utf8mb4_general_ci" , "" , "we");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>