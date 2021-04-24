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
        <form action="php/create.php" method="post">

            <h4 class="display-4 text-center">Add Course</h4>
            <?php if (isset($_SESSION['full_name'])) { ?>
                <div>
                    <h2><?php echo $_SESSION['full_name'] ?></h2>
                    <h2><?php echo $_SESSION['email'] ?></h2>
                </div>
            <?php } ?>
            <hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="name">Course name</label>
                <input type="name" class="form-control" id="name" name="name" value="<?php if (isset($_GET['name']))
                                                                                            echo ($_GET['name']); ?>" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="email">Course unit</label>
                <input type="email" class="form-control" id="email" name="unit" value="<?php if (isset($_GET['Unit']))
                                                                                            echo ($_GET['Unit']); ?>" placeholder="Enter Unit">
            </div>

            <button type="submit" class="btn btn-primary" name="create">Add</button>
            <a href="view.php" class="link-primary">View</a>

            <div class="container signin">
                <p>Don't have an account? <a href="php/logout.php">logout</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>