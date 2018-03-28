<?php
	session_start();

	$ipldb = new mysqli("localhost", "root", "", "ipldb");
	$id=$_GET['id'];
	/*Query Strings */
	$tq="SELECT name,captain,venue FROM teams where pid_teams=$id";
	$cap="SELECT captain FROM teams where pid_teams=$id";

	/*Query executed */
	$result=mysqli_query($ipldb,$tq);
	$res_cap=mysqli_query($ipldb,$cap);

	/*Query output */
	$title=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$captain=mysqli_fetch_array($res_cap,MYSQLI_NUM);

	$icon="css\images\\".$id . ".png";
?>

<!DOCTYPE html>
<html>
	<head>
	<meta name=viewport content="width=device-width, initial-scale=1"> 

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/mynavigation.css">
    <link rel="stylesheet" href="css/teams.css">
	<title>IPL</title>
</head>

<body>
	<!-- always include two </div> elements before </body> -->
    <?php include 'mynavigation.php';?>
    		<div class="col-md-10 main">
				<div class="row">
					<div class="card col-md-4 text-center"><img class="card-img-top-team" src="<?php echo $icon; ?>"></div>
					<div class="card col-md-6 teaminfofont" style="margin-top: 4vh; margin-left: 2vh;">
						<h1><?php echo $title['name']; ?></br></br></h1>
						<h3>Captain:   <?php echo $title['captain'];?> </br></h3>
						<h3>Venue  :    <?php echo $title['venue'];?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</body>
</html>
