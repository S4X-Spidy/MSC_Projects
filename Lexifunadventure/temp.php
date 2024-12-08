<?php
//include('function.php'); // You need to include or define test_input() function

$username = $_POST["username"];
$pass = $_POST["password"];
//echo ("Hello");

$host = "localhost";
$user = "root"; // Payal 
$password = "root";
$dbname = "dylsexia";
$conn = new mysqli($host, $user, $password, $dbname);

// Check if there is a connection error
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Variables to store error messages
$usernameErr = $passwordErr = "";

// Check if username is empty
if (empty($username)) {
    $usernameErr = "Username is required";
} else {
    $username = test_input($username);
    // Check if username contains only alphanumeric characters and underscores
    if (!preg_match("/^[a-zA-Z0-9_-]*$/", $username)) {
        $usernameErr = "Only letters, numbers, underscores and hyphens are allowed";
    }
}

// Check if password is empty
if (empty($pass)) {
    $passwordErr = "Password is required";
} else {
    $pass = test_input($pass);
    // Check if password contains at least one letter and one number
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/", $pass)) {
        $passwordErr = "Password must contain at least one lowercase letter, one uppercase letter, one number, and be at least 8 characters long.";
    }
}

// If there are no errors, proceed with checking the credentials
if (empty($usernameErr) && empty($passwordErr)) {
    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Login successful
        header('Location: index.php'); // Redirect to index.php upon successful login
        exit(); // Stop further execution
    } else {
        // Login failed
        $usernameErr = "Invalid username or password";
        $passwordErr = "";
    }
}

// Close the database connection
mysqli_close($conn);

// If we are here, it means there were errors, so we include the form
include("login_form.php");
?>
