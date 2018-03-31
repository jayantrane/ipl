<?php
session_start();
	$_SESSION['onpage']="schedule";
	$id = $_GET['id'];



?>
<!DOCTYPE html>

<html>
	<head>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/mynavigation.css">
    
    <link type="text/css" rel="stylesheet" href="css/schedule.css">
    <link type="text/css" rel="stylesheet" href="css/scorecard.css">
	<title>IPL</title>
</head>

<body>
	<!-- always include one </div> elements before </body> -->
    <?php include 'mynavigation.php';?>
    		<div id='content' class="col-md-10 main">		
				<div class="container">
					  <div class="row myrow">
					  	<h1><?php echo $fid_team1; ?></h1>
					    <table class="table myrow">
					      
					    </table>
					  </div>


					  <div class="row myrow">
					  	<h1><?php echo $fid_team2; ?></h1>
					    <table class="table myrow">
					      
					    </table>
					  </div>
					 
				</div>
    		</div>
 	</div>
</body>
</html>