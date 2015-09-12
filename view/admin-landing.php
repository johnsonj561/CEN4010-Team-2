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
      <div class="row btn-row">
        <div class="col-med-12">
          <div class="col-md-3 text-center">
            <div class="btn-border">
              <a class="btn btn-primary btn-lg" href="view/contact.php">Check In</a>
              <p class="btn-description">Check in up to 24 hours before your scheduled delivery time</p>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="btn-border">
              <a class="btn btn-primary btn-lg" href="view/contact.php">Plan Route</a>
              <p class="btn-description">Select a new route or make changes to existing route.</p>
            </div>
          </div>

          <div class="col-md-3 text-center">
            <div class="btn-border">
              <a class="btn btn-primary btn-lg" href="view/contact.php">Report Concerns</a>
              <p class="btn-description">Report any significant health or safety concerns.</p>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="btn-border">
              <a class="btn btn-primary btn-lg" target="_blank"
                 href="http://mealsonwheelspalmbeaches.org/contact/">Contact Us</a>
              <p class="btn-description">Contact Meals on Wheels with any questions or suggestions</p>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <?php require_once('../template/footer.html'); ?>
  </body>
</html>
