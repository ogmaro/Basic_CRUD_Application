<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <form action="./php/register.php" method="post">
        <div class="container">
            <h1>Zuri - Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php } ?>
            <label for="name"><b>Full Name</b></label>
            <input type="text" placeholder="Enter Full Name" name="name" ">

            <label for=" email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email">

            <label for="phone"><b>Phone Number</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phone">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw">

            <button type="submit" name="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Login </a></p>
        </div>
    </form>

</body>

</html>