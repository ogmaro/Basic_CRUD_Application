<?php
if (isset($_SESSION['full_name']) && isset($_SESSION['email'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Check input 
    $name = validate($_POST["name"]);
    $email = validate($_POST["unit"]);

    if (empty($name)) {
        header("Location: add_course.php?error=Name is Required");
    } else if (empty($unit)) {
        header("Location: add_course.php?error=Unit is Required");
    } else {
        include "./db/config.php";
        $query = "INSERT INTO users(name, email) 
               VALUES('$name', '$email')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location: ../read.php?success=successfully created");
        } else {
            header("Location: ../add_course.php?error=Unexpected error occured while creating data");
        }
    }
}
