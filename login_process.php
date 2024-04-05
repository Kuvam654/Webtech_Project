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
} else {
    echo "Connected successfully";
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if user exists in the database
$sql = "SELECT * FROM table1 WHERE USER_NAME='$username' AND PASSWORD ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, redirect to a welcome page or perform further actions
    header("Location: welcome.php");
    exit;
} else {
    // User not found, display error message or redirect to login page
    echo "Invalid username or password";
}

$conn->close();
?>
