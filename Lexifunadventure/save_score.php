<?php
$score = $_POST['score'];
$difficulty = $_POST['difficulty'];
// Connect to the database

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "dylsexia";

$conn = new mysqli($host, $user, $password, $dbname);

if (isset($_POST["score"]) && isset($_POST["difficulty"])) {
    $score = $_POST["score"];
    $difficulty = $_POST["difficulty"];

    // Insert the data into the game table
    $sql = "INSERT INTO game (score, difficulty) VALUES ('$score','$difficulty')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>