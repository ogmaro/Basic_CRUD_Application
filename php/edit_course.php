<?php
if (isset($_GET['id'])) {
    //Connect to database
    include "db/config.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM courses WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: show_course.php");
    }
} else if (isset($_POST['update'])) {
    //Connect to database
    include "../db/config.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $unit = validate($_POST['unit']);
    $id = validate($_POST['id']);

    if (empty($name)) {
        header("Location: ../edit_course.php?id=$id&error=Name is required");
    } else if (empty($unit)) {
        header("Location: ../edit_course.php?id=$id&error=unit is required");
    } else {

        $sql = "UPDATE courses
               SET name='$name', unit='$unit'
               WHERE id=$id ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../show_course.php?success=successfully updated");
        } else {
            header("Location: ../edit_course.php?id=$id&error=unknown error occurred&$user_data");
        }
    }
} else {
    header("Location: show_course.php");
}
