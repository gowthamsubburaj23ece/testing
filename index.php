<?php
$servername = "gserv.database.windows.net";
$username = "gowthams";
$password = "Linux@123";



// Create connection
$conn = new mysqli($servername, $username, $password);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
