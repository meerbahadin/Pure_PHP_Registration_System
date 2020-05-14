<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Create new account
    </title>
    <?php include './includes/head.php';

    if (isLoggedIn()) {
        header('location: index.php');
    }


    ?>
</head>

<body class="register-page">
    <?php include './includes/navbar.php' ?>
    <div class="wrapper">
        <section class="section section-shaped section-lg">
            <div class="container pt-lg-7">
                <?php echo display_error(); ?>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-light shadow border-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <form role="form" method="POST" action="register.php">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="username" type="text" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group focused">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Password" type="password" name="password_one">
                                        </div>
                                    </div>
                                    <div class="form-group focused">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Confim Password" type="password" name="password_two">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-raised btn-primary mt-5 btn-block" name="register_submit">Create An Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <small>Already have account ?</small>
                        <a href="login.php" class="btn btn-raised btn-dark btn-block mt-1"><small>Login</small></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include './includes/footer.php' ?>
</body>

</html>