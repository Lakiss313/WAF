<?php
$servername = "abasswaf.mysql.database.azure.com";
$username = "Abass@abasswaf";
$password = "lakiss@1@2@3";
$dbname = "waf";

$conn = mysqli_init();
// Set the SSL certificate
mysqli_ssl_set($conn, NULL, NULL, "/path/to/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
// Attempt to connect
mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);

// Check for connection errors
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$conn->close();
