<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form method="post">
        <div class="container">
            <h1>Zuri - Reset</h1>
            <p>Reset your password</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>New Password</b></label>
            <input type="password" placeholder="Enter New Password" name="psw" id="psw" required>

            <button type="submit" name='reset' class="registerbtn">Reset</button>

        </div>
        <div class="container signin">
            <p>Don't have an account? <a href="index.php">Register</a></p>
            <p>Do you already have an account? <a href="login.php">Login</a></p>
        </div>
</body>

</html>