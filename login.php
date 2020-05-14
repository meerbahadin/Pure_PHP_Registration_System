<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Login into your account
  </title>
  <?php include './includes/head.php';

  if (isLoggedIn()) {
    header('location: index.php');
  }


  ?>

</head>

<body>
  <?php include './includes/navbar.php' ?>
  <section class="section section-shaped section-lg">
    <div class="container pt-lg-7">
      <?php echo display_error(); ?>
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="alert alert-primary" role="alert">
            <strong>
              <small>test</small> <br>
              admin@gmail.com & admin
            </strong>
          </div>
          <div class="card shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="POST" action="login.php">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter Your Email Address" type="email" name="email">
                  </div>
                </div>
                <div class="form-group focused">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-raised btn-primary mt-5 btn-block" name="login_submit">Sign In</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <small>You dont have account ?</small>
              <a href="register.php" class="btn btn-raised btn-dark btn-block mt-1"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include './includes/footer.php' ?>
</body>

</html>