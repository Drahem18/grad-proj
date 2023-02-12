<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=sms", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}