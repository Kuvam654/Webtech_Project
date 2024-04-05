<?php
// Database connection
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert data into table1
$sql = "INSERT INTO table1 (FIRST_NAME, LAST_NAME, USER_NAME, PASSWORD) VALUES ('$first_name', '$last_name', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    // Success message
    echo "New record created successfully";
    // Redirect to login page
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
