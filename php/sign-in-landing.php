<?php
  require_once("connect.php");    //connect to DB
  $username = strtolower($_POST['username']); //store username/password from form
  $password = $_POST['password'];

  if($username == "admin"){       //if admin user, re-direct to admin page
    echo "<meta http-equiv='refresh' content='0;../view/admin-landing.php'>";
  }
  else{                           //else re-direct to user page
    echo "<meta http-equiv='refresh' content='0;../view/volunteer-landing.php'>";
  }
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
    <div class="container">
      <p>Please wait while we load your preferences</p>
    </div>
    <?php require_once('../template/footer.html'); ?>
  </body>
</html>