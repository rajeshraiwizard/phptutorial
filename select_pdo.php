<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "myDb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Select data
    $stmt = $conn->prepare("SELECT id, firstname, lastname, email, reg_date FROM MyGuests");
    $stmt->execute();

    // Set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach($stmt->fetchAll() as $row) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. " - Registered: " . $row["reg_date"]. "<br>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
