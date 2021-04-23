<?php
session_start();
// Include dependent database file
include 'db/config.php';


if(isset($_POST['email']) && isset($_POST['psw'])){
    $email = $_POST['email'];
    $password = $_POST['psw'];
   
    
    if(empty($email)){
        header("Location: login.php?error=Email is Required");
    }
    else if(empty($password)){
        header("Location: login.php?error=Password is Required");
    }
    else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);
        $pass = $conn->prepare("SELECT * FROM users WHERE password=?");
        $pass->execute([$password]);

        if(($stmt->rowCount() === 1) && ($pass->rowCount() === 1)){
            $user= $stmt->fetch();

            //Get data from the database
            $user_full_name =$user['full_name'];
            $user_email =$user['email'];
            $user_phone =$user['phone_number'];
            
            //Create Session
            $_SESSION['full_name'] = $user_full_name;
            $_SESSION['email'] = $user_email;
            $_SESSION['phone'] = $user_phone;
            header("Location: login_success.php");
        }else{
            header("Location: login.php?error=Incorrect username or password");
        }
    }
}
