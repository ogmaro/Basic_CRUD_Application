<?php

// Initialize the session
session_start();

// Unset all of the session variables
unset($_SESSION["email"]);

// Destroy the session.
session_destroy();
header("location: login.php");
exit();
