<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Meals on Wheels Route Planning</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom-css.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="img-logo pull-left"><img src="img/mealsonwheels-logo-55x55.png"/></a>
          <a class="navbar-brand" href="#">Meals on Wheels Routing</a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="http://mealsonwheelspalmbeaches.org/contact/" target="_blank">Contact Meals on Wheels</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <h1 class="intro-text text-center">Palm Beach County Meals on Wheels</h1>
      <h2 class="intro-text text-center">Delivery Services</h2>
      <hr>
      <div class="sign-in-border">
        <form role="form" action="../landing/sign-in-landing.php" method = "post">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-2"></div>

              
                <div class="form-group col-lg-3">
                  <label>Username</label>
                  <input autofocus type="text" class="form-control" name = "username" id = "username" required>
                </div>
                <div class="form-group col-lg-3">
                  <label>Password</label>
                  <input type="password" class="form-control" name = "password" id = "password">
                </div>


              <div class="form-group col-lg-2 text-center">
                <button type="submit" class="btn btn-primary btn-sign-in">Sign In</button>
              </div>
              <div class="col-lg-2"></div>
              <div class="col-lg-12 text-center">
                <h4 class="register-text"><a href="#">Register Here</a> | <a href="#">Forgot Password?</a></h4>
              </div>
            </div>
          </div>
        </form>
      </div>
      <hr>
    </div>
    <footer>
      <div class="row">
        <div class="col-lg-12">
          <p class="text-center">Copyright 2015 &copy; DLT2 Designs, FLorida Atlantic University</p>
        </div>
      </div>
    </footer>
    </div>
  <!-- /.container -->
  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  </body>

</html>
