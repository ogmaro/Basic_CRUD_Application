<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form action="php/add.php" method="post">
            <h3 class="display-4 text-center">Welcome <?php if ($_SESSION['full_name']) {
                                                            return $_SESSION['full_name'];
                                                        } else {
                                                            echo "";
                                                        } ?></h3>
            <h4 class="display-4 text-center">Add Course</h4>
            <hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" value="<?php if (isset($_GET['name']))
                                                                                            echo ($_GET['name']); ?>" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="text">Unit</label>
                <input type="unit" class="form-control" id="email" name="unit" value="<?php if (isset($_GET['unit']))
                                                                                            echo ($_GET['unit']); ?>" placeholder="Enter unit">
            </div>

            <button type="submit" class="btn btn-primary" name="create">Add</button>
            <a href="show_course.php" class="link-primary">View</a>
        </form>
    </div>
</body>

</html>