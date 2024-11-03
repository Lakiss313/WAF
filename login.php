<?php
$servername = "abasswaf.mysql.database.azure.com";
$username = "Abass@abasswaf";
$password = "lakiss@1@2@3";
$dbname = "waf";
// Create connection
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "/home/site/wwwroot/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
// Connect with SSL verification
mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
// Check connection
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
