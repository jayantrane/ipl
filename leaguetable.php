<!DOCTYPE html>

<html>

<head>
	<meta name=viewport content="width=device-width, initial-scale=1"> 

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/leaguetable.css">

	<title>leaguetable</title>
</head>

<body>

	<div class="main">

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">IPL</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
            	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          	</ul>
		</div>
	</div>

	<div class="row-offcanvas row-offcanvas-left">
		<div id="sidebar" class="sidebar-offcanvas">
			<div class="col-md-12">
				<h3>Menu</h3>
				<ul class="nav nav-stacked">
					<li class="active"><a href="home.php">Home</a></li>
					<li><a href="leaguetable.php">Points Table</a></li>
                  	<li><a href="#">Schedule</a></li>
                  	<li><a href="#">Player Stats</a></li>
                  	<li><a href="#">Teams</a></li>
                  	<li><a href="#">About Us</a></li>
                  </ul>
			</div>	
	</div>
	
	<div class="container-fluid bg">

		<div class="container ">

				<div class="table-responsive">

					<table class="table table-bordered table-striped table-hover table-container">

						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>MatchesPlayed</th>
							<th>Wins</th>
							<th>Losses</th>
							<th>Draws</th>
							<th>Points</th>
						</tr>

						<tr >
							<td>1</td>
							<td><img src="css/images/mi.png" class="miimage"><span class="tab">Mumbai Indians</span></img></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>

						<tr >
							<td>2</td>
							<td><img src="css/images/csk.png" class="miimage"><span class="tab">Chennai Super Kings</span></img></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>

						<tr >
							<td>3</td>
							<td><img src="css/images/rcb.png" class="miimage"><span class="tab">Royal Challengers Banglore</span></img></td><
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>

						<tr >
							<td>4</td>
							<td><img src="css/images/srh.png" class="miimage"><span class="tab">Sunrisers Hyderabad</span></img></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>

						<tr >
							<td>5</td>
							<td><img src="css/images/dd.png" class="miimage"><span class="tab">Delhi Daredevils</span></img></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>

						<tr >
							<td>6</td>
							<td><img src="css/images/kkr.png" class="miimage"><span class="tab">Kolkata Knight Riders</span></img></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>

						<tr >
							<td>7</td>
							<td><img src="css/images/kxip.png" class="miimage"><span class="tab">Kings XI Punjab</span></img></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>

						<tr >
							<td>8</td>
							<td><img src="css/images/rr.png" class="miimage"><span class="tab">Rajasthan Royals</span></img></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
					</table>
			</div>

		</div>

	</div>

</body>

</html>