<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form action="php/reset_password.php" method="post">
        <div class="container">
            <h1>Zuri - Reset</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php } ?>
            <p>Reset your password</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email">

            <label for="psw"><b>New Password</b></label>
            <input type="password" placeholder="Enter New Password" name="psw" id="psw">

            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Confirm Password" name="re-psw" id="psw">

            <button type="submit" name='reset' class="registerbtn">Reset</button>

        </div>
        <div class="container signin">
            <p>Don't have an account? <a href="index.php">Register</a></p>
            <p>Do you already have an account? <a href="login.php">Login</a></p>
        </div>
</body>

</html>