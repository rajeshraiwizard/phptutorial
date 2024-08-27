<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Open MySQL server connection using MySQLi
    $conn = new mysqli("localhost", "root", "", "Office");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO employee (firstname, lastname, address, position) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first, $last, $address, $position);

    // Set parameters and execute
    $first = $_POST['first'];
    $last = $_POST['last'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $stmt->execute();

    echo "Thank you! Information entered.";

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    // Display form
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        First name: <input type="Text" name="first"><br>
        Last name: <input type="Text" name="last"><br>
        Address: <input type="Text" name="address"><br>
        Position: <input type="Text" name="position"><br>
        <input type="Submit" name="submit" value="Enter information">
    </form>
<?php
} // end if
?>
</body>
</html>
