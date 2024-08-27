<?php
$servername = "localhost";
$username = "root"; //  If MySQL username is different we can change this
$password = ""; //   If MySQL password is set, we can change this

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
