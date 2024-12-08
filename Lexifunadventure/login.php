<?php

$username = $_POST["username"];
$pass = $_POST["password"];
// echo ("Hrllo");

$host = "localhost";
$user = "root"; // Payal 
$password = "root";
$dbname = "dylsexia";
$conn = new mysqli($host, $user, $password, $dbname);

// Check if username is empty

        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            
            $username = test_input($_POST["username"]);
           // Check if username contains only alphanumeric characters and underscores
           if (!preg_match("/^[a-zA-Z0-9_-]*$/", $username)) {
               $usernameErr = "Only letters, numbers, underscores and hyphens are allowed";
            }
        }

        // Check if password is empty
         if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
            // Check if password contains at least one letter and one number
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/", $password)) {
                $passwordErr = "Password must contain at least one letter and one number, and be at least 8 characters long.";
            }
        }



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0 ) {
        header('Location: index.php'); //changes
    }


// Validate username and password
 $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0 ) {
    
    // Login successful
    header("location: C:/xampp/htdocs/Sigin/index.php"); //changes
}
else {
    // Login failed
    $username = "";
    $password = "";
    $usernameErr = "Invalid username or password";
    $passwordErr = "";
} 
}
// echo("Bye");
// Function to clean input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// $usernameErr = $passwordErr = "";
// $username = $password = "";

// Function to clean input data
// function test_input($data) {
    // $data = trim($data);
    // $data = stripslashes($data);
    // $data = htmlspecialchars($data);
    // return $data;
// }
 // $host = "localhost";
        // $user = "root";
        // $password = "root";
        // $dbname = "dylsexia";
        // $conn = new mysqli($host, $user, $password, $dbname);

// Form Validation
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if (empty($_POST["username"])) {
        // $usernameErr = "Username is required";
    // } else {
        // $username = test_input($_POST["username"]);
        // Check if username contains only alphanumeric characters and underscores
        // if (!preg_match("/^[a-zA-Z0-9_-]*$/", $username)) {
            // $usernameErr = "Only letters, numbers, underscores and hyphens are allowed";
        // }
    // }

    // if (empty($_POST["password"])) {
        // $passwordErr = "Password is required";
    // } else {
        // $password = test_input($_POST["password"]);
        // Check if password contains at least one letter and one number
        // if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/", $password)) {
            // $passwordErr = "Password must contain at least one letter and one number, and be at least 8 characters long.";
        // }
    // }

    // Proceed to user authentication if there are no validation errors
    // if (empty($usernameErr) && empty($passwordErr)) {
        // User Authentication
        // $host = "localhost";
        // $user = "root";
        // $password = "root";
        // $dbname = "dylsexia";
        // $conn = new mysqli($host, $user, $password, $dbname);

        // if (!$conn) {
            // die("Connection failed: " . mysqli_connect_error());
        // } else {
            // $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
            // $result = mysqli_query($conn, $sql);
            // if (mysqli_num_rows($result) > 0) {
                // header('Location: index.php'); // Redirect to index.php if authentication succeeds
            // } else {
				// echo "helo";
                // Invalid username or password
                // $username = "";
                // $password = "";
                // $usernameErr = "Invalid username or password";
                // $passwordErr = "";
            // }
            // mysqli_close($conn);
        // }
    // }
// }
?>

