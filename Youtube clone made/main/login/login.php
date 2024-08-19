<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);

// Execute statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login successful!";
    header("Location: http://localhost/main/youtube1.html");
    exit();
} else {
    echo "Invalid email or password.";
}

$stmt->close();
$conn->close();
?>
