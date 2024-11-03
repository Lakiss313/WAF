<?php
$servername = "abasswaf.mysql.database.azure.com";
$username = "Abass@abasswaf";
$password = "lakiss@1@2@3";
$dbname = "waf";

// Create connection
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "/home/site/wwwroot/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$conn->close();
?>

