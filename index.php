<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <?php include './includes/head.php' ?>
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <div class="container">
        <?php if (isset($_SESSION['msg'])) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong><?php echo $_SESSION['msg']; ?></strong>
            </div>
        <?php unset($_SESSION['msg']);
        endif ?>


        <div class="jumbotron">
            <?php if (isset($_SESSION['user']) && isAdmin()) : ?>
                <h1 class="display-3">Welcome <?php echo $_SESSION['user']['username']; ?></h1>
                <p>You'r an admin go to the dashboard</p>
                <a href="./dashboard.php" class="btn btn-raised btn-danger mt-3">Dashboard</a>
                
            <?php elseif (isset($_SESSION['user'])) : ?>
                <h1 class="display-3">Welcome <?php echo $_SESSION['user']['username']; ?></h1>

            <?php else : ?>
                <h1 class="display-3">Welcome please login or register</h1>
                <a href="./login.php" class="btn btn-raised btn-success mt-5">Sign In</a>
                <a href="./register.php" class="btn btn-success mt-5">Register</a>
            <?php endif ?>
        </div>
    </div>

    <?php include './includes/footer.php' ?>
</body>

</html>