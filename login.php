<?php
$servername = getenv('abasswaf.mysql.database.azure.com');
$username = getenv('Abass@abasswaf');
$password = getenv('lakiss@1@2@3');
$dbname = getenv('waf');

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "/home/site/wwwroot/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$conn->close();
?>
