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
              <a class="btn btn-primary btn-lg" href="#">Edit Recipients</a>
              <p class="btn-description">Add new or remove old recipients from the program.</p>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="btn-border">
              <a class="btn btn-primary btn-lg" href="#">Today's Schedule</a>
              <p class="btn-description">View schedule and check that recipients have assigned volunteers.</p>
            </div>
          </div>

          <div class="col-md-3 text-center">
            <div class="btn-border">
              <a class="btn btn-primary btn-lg" href="#">View Concerns</a>
              <p class="btn-description">View a list of recipients that volunteers are concerned about.</p>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="btn-border">
              <a class="btn btn-primary btn-lg" target="_blank"
                 href="#">Change Routes</a>
              <p class="btn-description">View a volunteer's route and make changes to that route.</p>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <?php require_once('../template/footer.html'); ?>
  </body>
</html>
