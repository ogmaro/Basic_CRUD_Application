<?php
session_start();
// Include dependent database file
include '../db/config.php';

if (isset($_SESSION['full_name'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Check input 
    $name = validate($_POST["name"]);
    $unit = validate($_POST["unit"]);

    if (empty($name)) {
        header("Location: add_course.php?error=Name is Required");
    } else if (empty($unit)) {
        header("Location: add_course.php?error=Unit is Required");
    } else {
        $query = "INSERT INTO courses(name, unit) 
               VALUES('$name', '$unit')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location: ../add_course.php?error=successfully created");
        } else {
            header("Location: ../add_course.php?error=Unexpected error occured while creating data");
        }
    }
} else {
    header("Location: ../add_course.php?error=Please signin to add course");
}
