<?php
//Connect to database using the include function
include "../db/config.php";
if (isset($_POST["submit"])) {
    // This function Validate input from user
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Check input 
    $name = validate($_POST["name"]);
    $email = validate($_POST["email"]);
    $phone = validate($_POST["phone"]);
    $password = validate($_POST["psw"]);

    //Check if Registration details were provided
    if (empty($name)) {
        header("Location: index.php?error=Name is Required");
    } else if (empty($email)) {
        header("Location: index.php?error=Email is Required");
    } else if (empty($phone)) {
        header("Location: index.php?error=Phone Number is Required");
    } else if (empty($password)) {
        header("Location: index.php?error=Password is Required");
    } else {
        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_e = mysqli_query($conn, $sql_e);

        if (mysqli_num_rows($res_e) > 0) {
            header("Location: ../index.php?error=User $name already exist");
        } else {
            $sql = "INSERT INTO users (name, email, phone, psw)
                    VALUES ('$name', '$email', '$phone', '$password')";
            $result =  mysqli_query($conn, $sql);
            if ($result) {
                header("Location: success.php");
            } else {
                header("Location: ../index.php?error=Unexpected error");
            }
        }
    }
}
