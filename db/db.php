<?php
$servername = "remotemysql.com";
$username = "jMIc9WLst8";
$password = "3g2b3EZ1V4";
$database = "jMIc9WLst8";
$port = "3306";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password, $port);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
