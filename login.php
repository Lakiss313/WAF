<?php
$servername = "abasswaf.mysql.database.azure.com";
$username = "Abass@abasswaf";
$password = "lakiss@1@2@3";
$dbname = "waf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the PHP Test Site!</h1>
    <p>You have successfully logged in.</p>
</body>
</html>
