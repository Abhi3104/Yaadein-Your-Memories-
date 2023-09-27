<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // You should perform more robust validation and authentication here.
    // For simplicity, let's assume a hard-coded username and password.
    
    $valid_username = "your_username";
    $valid_password = "your_password";

    // Check if the provided username and password match the valid credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Successful login, redirect to a welcome page or perform desired actions
        header("Location: welcome.php");
        exit;
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username or password. Please try again.";
    }
}
?>
