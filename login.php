<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <form action="../Basic_CRUD_Application/php/auth.php" method="post">
        <div class="container">
            <h1>Zuri - Login</h1>
            <p>Sign in your account here</p>
            <hr>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php } ?>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw">

            <button type="submit" name="login" class="registerbtn">Login</button>
        </div>
        <div class="container signin">
            <p>Don't have an account? <a href="index.php">Register</a>.</p>
            <p>Forgot password? <a href="reset_password.php">Reset Password</a>.</p>
        </div>


    </form>

</body>

</html>