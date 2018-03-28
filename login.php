<<<<<<< HEAD
<?php 
session_start();
?>
=======
<?php

$mysqli = mysqli_connect("localhost","root","","ipldb");

@$user=$_POST['Username'];
@$pass=$_POST['Password'];

$sql="select * from user where username='".$user."' and password='".$pass."'  ";

$result=mysqli_query($mysqli,$sql);

if(mysqli_num_rows($result)==1){
	echo "You have successfully registered";
}
else{
	echo "You have entered wrong credentials";
}

 ?>

>>>>>>> 8ffcf20ab1a79e45b08f99ecdf28a71937a83c40
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

	

	<div class="mynavigation">
      <?php include 'mynavigation.php';?>
    </div>

    <div class="main">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-4 col-sm-4 col-xs-12">
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
				
				<form method="post" class="form-container" action = "home.php" autocomplete="off">
				<!-- <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post"> -->
					
					
					<!--<center><h1>Administrator Login</h1></center>-->

					<div class="form-group">
						<label for="exampleInputUsername">Username</label>
						<input type="text" class="form-control" id="exampleInputUsername" placeholder="username" name="username" required>

						<label for="exampleInputPassword">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword" placeholder="password" name="password" required>

						<!--<label for="exampleInputFile">File Input</label>
						<input type="file" id="exampleInputFile">*/-->
						<br>
						<center><a href="forgot.php" class="help-block">Forgot Password</a></center>
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
