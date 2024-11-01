<?php
// Sample username and password for testing
$valid_username = "user";
$valid_password = "password";

// Check if username and password match
if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    // Redirect to the welcome page
    header("Location: welcome.php");
    exit();
} else {
    echo "Invalid username or password. Please try again.";
}
?>
