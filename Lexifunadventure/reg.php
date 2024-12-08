<?php
// Define validation error messages
$usernameErr = $emailErr = $numberErr = $passwordErr = "";
$username = $email = $number = $password = "";

// Connect to the database
$host = "localhost";
$user = "root"; // Payal 
$dbpassword = "root";
$dbname = "dylsexia";
       

// Establish database connection
$conn = new mysqli($host, $user, $dbpassword, $dbname);
// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        // Validate username length
        if (strlen($username) < 3 || strlen($username) > 16) {
            $usernameErr = "Username must be between 3 and 16 characters.";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate number
    if (empty($_POST["number"])) {
        $numberErr = "Number is required";
    } else {
        $number = test_input($_POST["number"]);
        // Validate number length
        if (strlen($number) < 10 || strlen($number) > 13) {
            $numberErr = "Number must be between 10 and 13 characters.";
        }
    }

    // Validate password
    if (empty($_POST["Password"])) {
        $passwordErr = "Password is required";
    } else {
        $password= test_input($_POST["Password"]);
        // Validate password length
        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters long.";
        }
    }

    // Check if all fields are valid
    // if ($usernameErr == "" && $emailErr == "" && $numberErr == "" && $passwordErr == "") {
        // Save user data to database
        // Assuming your database table name is 'users'
        $sql = "INSERT INTO registration (username, email, number, password) VALUES ('$username', '$email', '$number', '$password')";
        if (mysqli_query($conn, $sql)) {
            // Redirect user to success page
            header("Location: sigin.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    // }
}

// Function to clean input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Close connection
mysqli_close($conn);
?>