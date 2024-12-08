<?php
$username = $_POST["username"];

$host = "localhost";
$user = "root";
$dbPassword = "root";
$dbname = "dylsexia";
$conn = new mysqli($host, $user, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if username exists in the registration table
$sql = "SELECT * FROM registration WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User found, implement your password reset functionality here
    // For example, you could send an email with a link to reset the password
    echo "<script>alert('Password reset link sent to your email');</script>";
} else {
    // User not found
    echo "<script>alert('Username not found');</script>";
}

$conn->close();
?>
