<?php
$username = $_POST["username"];
$email = $_POST["email"];
$number = $_POST["number"];
$password = $_POST["password"];

$host = "localhost";
$user = "root";
$dbPassword = "root"; // Changed to dbPassword to avoid conflict with the variable name
$dbname = "dylsexia";
$conn = new mysqli($host, $user, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming 'registration' is the name of your table
$sql = "INSERT INTO registration (username, email, number, password) VALUES ('$username', '$email', '$number', '$password')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully
    header("Location: login.html");
} else {
    // Error inserting data
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
