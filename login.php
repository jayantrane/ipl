<?php

$mysqli = mysqli_connect("localhost","root","","ipldb");

@$user=$_POST['Username'];
@$pass=$_POST['Password'];

$sql="select * from user where username='".$user."' and password='".$pass."'  ";

$result=mysqli_query($mysqli,$sql);

if(mysqli_num_rows($result)){
	echo "You have successfully registered";
}
else{
	echo "You have entered wrong credentials";
}

 ?>

<!DOCTYPE html>

<html>

<head>
	<meta name=viewport content="width=device-width, initial-scale=1"> 

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/login.css">

	<title>loginpage</title>
</head>

<body>

	<div class="main">

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">IPL</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
            	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-4 col-sm-4 col-xs-12">
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
				
				<form method="post" class="form-container" action="#" autocomplete="off">

					
					
					<!--<center><h1>Administrator Login</h1></center>-->

					<div class="form-group">
						<label for="exampleInputUsername">Username</label>
						<input type="text" class="form-control" id="exampleInputUsername" placeholder="Username" name="Username" required>

						<label for="exampleInputPassword">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="Password" required>

						<!--<label for="exampleInputFile">File Input</label>
						<input type="file" id="exampleInputFile">*/-->
						<br>
						<center><a href="frogotpass.php" class="help-block">Forgot Password</a></center>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox">Remember me
						</label>
					</div>

					<center><button type="submit" class="btn btn-success btn-block" name="Login">Log In</button></center>

				</form>

			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
			</div>

		</div>

	</div>

	</div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>