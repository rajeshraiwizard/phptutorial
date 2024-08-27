<?php
$servername = "localhost";
$username = "root"; // If MySQL username is different we can change this
$password = ""; // If MySQL password is set, we can change this

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
