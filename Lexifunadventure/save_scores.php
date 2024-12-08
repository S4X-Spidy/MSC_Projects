<?php

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "dylsexia";


$score = isset($_POST['score']) ? intval($_POST['score']) : 0;
$difficulty = isset($_POST['difficulty']) ? $_POST['difficulty'] : '';


$mysqli = new mysqli($host, $user, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}


$stmt = $mysqli->prepare("INSERT INTO game (difficulty, score) VALUES (?, ?)");
$stmt->bind_param("is", $difficulty, $score);


if ($stmt->execute()) {
   
    echo "Score saved successfully";
} else {
    
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();
?>
