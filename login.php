<?php
session_start();

// Database credentials (for now, replace these placeholders with actual values later)
$host = 'localhost';
$dbname = 'your_database';
$username = 'your_db_username';
$password = 'your_db_password';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form inputs
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Create a connection to the database
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query to check credentials
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);  // "ss" means two string parameters
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows == 1) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $user;
        header("Location: welcome.php");  // Redirect to welcome page
        exit();
    } else {
        echo "Invalid username or password.";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
