<?php
$servername = "localhost";
$username = "root"; // can be changed
$password = ""; // can be changed if MySQL password is set
$dbname = "myDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Rajesh', 'RAI', 'rajeshrai.wizard@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
