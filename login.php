<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <form method="post">
        <div class="container">
            <h1>Zuri - Login</h1>
            <p>Sign in your account here</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <button type="submit" name="login" class="registerbtn">Login</button>
        </div>
        <div class="container signin">
            <p>Don't have an account? <a href="index.php">Register</a>.</p>
            <p>Forgot password? <a href="reset_password.php">Reset Password</a>.</p>
        </div>


    </form>

</body>

</html>