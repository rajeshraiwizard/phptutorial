<?php
$servername = "localhost";
$username = "root"; // Can be changed if MySQL username is different
$password = ""; // Can be changed if MySQL password is set
$dbname = "myDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select data
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. " - Registered: " . $row["reg_date"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
