<?php
$username = $_POST["username"];
$password = $_POST["password"];

$host = "localhost";
$user = "root";
$dbPassword = "root";
$dbname = "dylsexia";
$conn = new mysqli($host, $user, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if username and password exist in the registration table
$sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Insert username and password into the login table
    $insertSql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
    if ($conn->query($insertSql) === TRUE) {
        // Redirect to index.php or any other page after successful login
        header("Location: index1.php");
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
} else {
    // Invalid username or password
    echo "<script>alert('Invalid username or password');</script>";
	header("Location: login.html");
}

$conn->close();
?>
