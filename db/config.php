<?php
$servername = "https://www.remotemysql.com";
$username = "root";
$password = "";
$database = "schooldb";
$port = "3306";

$conn = mysqli_connect($servername, $username, $password, $database, $port);

if (!$conn) {
    echo "Connection Failled";
}
