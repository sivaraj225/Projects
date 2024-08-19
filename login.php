<?php
//$servername = "localhost";
//$username = "root"; // Replace with your MySQL username
//$password = "sivaraj2278@"; // Replace with your MySQL password
//$dbname = "youtube_login"; // Replace with your database name

$a = $_POST['email'];
$b = $_POST['password'];

$con = mysqli_connect("localhost", "root", "sivaraj2278@", "youtube_login");
$sql = "INSERT INTO fine(email,password)values('$a','$b')";

$r= mysqli_query($conn,$sql);
if($r){
    echo 'saved'
}
else{
    echo 'unable to save'
}

// Create connection
/*$conn = new mysqli($servername, $username, $password, $dbname);

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
    // Login successful
    echo "Login successful!";
    // Redirect to a new URL
    header("Location: https://www.example.com"); // Replace with the URL you want to go to
    exit();
} else {
    // Login failed
    echo "Invalid email or password.";
}

// Close connections
$stmt->close();
$conn->close();  */
?>