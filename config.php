<?php


$servername = "localhost";
$username = "id14041989_root";
$password = "P@ss1234567890";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("<h1>Connection failed</h1>: " . $conn->connect_error);
}
echo "<h1>Connected successfully</h1>";
?>

