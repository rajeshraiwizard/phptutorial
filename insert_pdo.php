<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "myDb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Ram', 'Shah', 'ramshah@gmail.com')";
    $conn->exec($sql);

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
