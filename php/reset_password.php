<?php
include "../db/config.php";
if (isset($_POST['reset'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $psw = validate($_POST['psw']);
    $r_psw = validate($_POST['re-psw']);

    if (empty($email)) {
        header("Location: ../reset_password.php?error=Email is required");
    } else if (empty($psw)) {
        header("Location: ../reset_password.php?error=Password is required");
    } else if (empty($r_psw)) {
        header("Location: ../reset_password.php?error=Confirm password is required");
    } else if ($psw !== $r_psw) {
        header("Location: ../reset_password.php?error=Password doesn't match");
    } else {
        $sql = "UPDATE users
               SET psw='$psw'
               WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../login.php");
        } else {
            header("Location: ../reset_password.php?&error=unknown error occurred $email not found");
        }
    }
}
