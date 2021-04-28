<?php
$servername = "remotemysql.com";
$username = "jMIc9WLst8";
$password = "3g2b3EZ1V4";
$database = "jMIc9WLst8";
$port = "3306";

$conn = mysqli_connect($servername, $username, $password, $database, $port);

if (!$conn) {
    echo "Connection Failled";
}
