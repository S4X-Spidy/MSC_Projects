<?php
session_start();

// Check if the user is logged in
if(!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page or any other page
    header("Location: login1.php");
    exit();
}
?>
