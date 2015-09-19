<?php
//Create a new random password for user
$newPassword = "XYZ123";

//Update that user's database with new password
//get row with username where email == email; update password field

//Email user new password with link to login page  -->
$testvar = 1;
$email = strip_tags($_POST['email']);
$headers = "From: Meals On Wheels Routing\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$emailMessage = 
  "<table class='form-email-message'>
      <tr>
        <td>Meals On Wheels Routing Password Updated</td>
      </tr>
      <tr>
        <td>Your new password: $newPassword</td>
      </tr>
      <tr>
        <td><a href='meals-on-wheels-routing.mybluemix.net/'>Click to Login</a></td>
      </tr>
    </table>";
$result = mail($email, "Meals On Wheels Routing", $emailMessage, $headers);
?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Volunteer Controls</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom-css.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('../template/navbar.html'); ?>
    <!-- Page Content -->
    <div class="container">
      <h1 class="intro-text text-center">Password Updated</h1>
      <h3 class="intro-text text-center">Please check your email for your updated password</h3>

      <div class="col-med-12">
        <div class="col-md-3 text-center"></div>
        <div class="col-md-3 text-center">
          <div class="btn-border">
            <a class="btn btn-primary btn-lg" href="../index.php">Login</a>
            <p class="btn-description">Return to home page and login using your new password</p>
          </div>
        </div>
        <div class="col-md-3 text-center">
          <div class="btn-border">
            <a class="btn btn-primary btn-lg" target="_blank"
               href="http://mealsonwheelspalmbeaches.org/contact/">Contact Us</a>
            <p class="btn-description">For technical support if you continue to have trouble signing in</p>
          </div>
        </div>
        <div class="col-md-3 text-center"></div>
      </div>



    </div>
    <hr>
    </div>
  <?php require_once('../template/footer.html'); ?>
  <script src = "../js/validate-registration.js"></script>
  </body>
</html>