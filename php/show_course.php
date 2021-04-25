<?php

include "db/config.php";

$sql = "SELECT * FROM courses ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
