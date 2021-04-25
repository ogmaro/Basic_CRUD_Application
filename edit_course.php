<?php
session_start();
if ($_SESSION['name'] == NULL) {
    header("Location: login.php?error=Please sign in to Edit course");
}
include "php/edit_course.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="container signin">
            <h5> <a href="logout.php">Logout</a></h5>
        </div>
        <form action="php/edit_course.php" method="post">

            <h4 class="display-4 text-center">Update by <?php echo $_SESSION['name']; ?></h4>
            <hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" value="<?= $row['name'] ?>">
            </div>

            <div class="form-group">
                <label for="unit">Unit</label>
                <input type="unit" class="form-control" id="unit" name="unit" value="<?= $row['unit'] ?>">
            </div>
            <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="show_course.php" class="link-primary">View</a>
        </form>
    </div>
</body>

</html>