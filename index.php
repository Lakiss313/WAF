#<!DOCTYPE html>
#<html lang="en">
#<head>
#    <meta charset="UTF-8">
#    <title>Login</title>
#</head>
#<body>
#    <h2>Login Page</h2>
#    <form action="login.php" method="post">
#        <label for="username">Username:</label>
#        <input type="text" id="username" name="username" required><br><br>
#        <label for="password">Password:</label>
#        <input type="password" id="password" name="password" required><br><br>
#        <button type="submit">Login</button>
#    </form>
#</body>
#</html>


<?php
$servername = "abasswaf.mysql.database.azure.com";
$username = "Abass@abasswaf";
$password = "lakiss@1@2@3";
$dbname = "waf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
?>




