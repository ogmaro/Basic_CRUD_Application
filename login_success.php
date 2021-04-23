<?php
session_start();

?>

<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/success.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Login Successful</h1>
        <h2><?php echo $_SESSION['full_name'] ?></h2>
        <h2><?php echo $_SESSION['email'] ?></h2>
        <h2><?php echo $_SESSION['phone'] ?></h2>
    </div>
    <div class="container signin">
        <p>Don't have an account? <a href="logout.php">logout</a>.</p>
    </div>
</body>

</html>