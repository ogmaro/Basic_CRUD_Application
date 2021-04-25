<?php
session_start();
if ($_SESSION['name'] == NULL) {
    header("Location: index.php?error=Please sign");
}
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="card">
        <div>
            <i class="checkmark">✓</i>
        </div>
        <h1>Registration Success <?php echo $_SESSION['name']; ?></h1>
    </div>
    <div class="container signin">
        <h5> <a href="add_course.php" class="btn btn-success">Add Course</a></h5>
    </div>
    <div class="container signin">
        <h5> <a href="show_course.php" class="btn btn-success">View All Course</a></h5>
    </div>
    <div class="container signin">
        <h5> <a href="logout.php">Logout</a></h5>
    </div>

</body>

</html>