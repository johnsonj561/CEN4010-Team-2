<?php require_once('../php/connect.php'); 

//if not logged in as administrator, redirect to home page
if((isset($_SESSION['username']) && strtolower($_SESSION['username']) != "admin")){
  echo"<meta http-equiv='refresh' content='0; url=../index.php?error=session-ended'>"; 
}

//placeholder variable for table
$table1 = "";

//populate table with concerns
//incomplete, need to only get clients that are flagged with a concern
$query = "SELECT FirstName, LastName FROM Clients"; //also get concerns

$result = mysqli_query($link, $query);

//
?>
<!DOCTYPE html>
<html lang="en">
  <head><a name="top"></a>
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
  	<h1 class="text-center header-spacing">Client Concerns</h1>
    <?php require_once('../template/navbar.html'); ?>
    <div class="container">
    	<div class="col-lg-12">
		    <table class="recipient-table">
			    <th>First Name</th>
			    <th>Last Name</th>
				<?php 
				  echo $table1;
				?>
			</table>
		</div>
  	</div>
  	 <?php require_once('../template/footer.html'); ?>
  </body>
	  
</html>