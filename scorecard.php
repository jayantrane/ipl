<?php 
	session_start();
	$_SESSION['onpage']="schedule";
	$id = $_GET['id'];
	$status = $_GET['status'];

	if ($status == 1) {
		header('Location : /scorecard.php?id='.$id);
	}

	$ipldb = new mysqli("localhost", "root", "", "ipldb");

	$query1="SELECT fid_team1, fid_team2 FROM matches where pid_matches = $id";
	

	$result1=mysqli_query($ipldb,$query1);
	while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
		$fid_team1=$row['fid_team1'];
		$fid_team2=$row['fid_team2'];
	}
	echo $fid_team1." ".$fid_team2;
	$query2="SELECT name FROM players where fid_team = (select pid_teams from teams where name = '$fid_team1')";
	$query3="SELECT name FROM players where fid_team = (select pid_teams from teams where name = '$fid_team2')";

	$result2=mysqli_query($ipldb,$query2);
	$result3=mysqli_query($ipldb,$query3);

	$team1 = array();
	$team2 = array();

	while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
		$team1[]=$row;
	}
	while($row=mysqli_fetch_array($result3,MYSQLI_ASSOC)){
		$team2[]=$row;
	}


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
	<title>IPL</title>
</head>

<body>
	<!-- always include one </div> elements before </body> -->
    <?php include 'mynavigation.php';?>
    		<div id='content' class="col-md-10 main">		
				<div class="container">
					<form action='/scorecard'>
					  <div class="row myrow">
					  	<h1><?php echo $fid_team1; ?></h1>
					    <table class="table myrow">
					      <thead>
					        <tr>
					          <th class="col-md-3">Player Name</th>
					          <th class="col-md-1">Runs</th>
					          <th class="col-md-1">Balls</th>
					          <th class="col-md-1">Sr Rate</th>
					          <th class="col-md-1">Overs</th>
					          <th class="col-md-1">Wickets</th>
					          <th class="col-md-1">Runs Conceded</th>
					          <th class="col-md-1">Economy</th>
					        </tr>
					      </thead>
					      <tbody>
					      	<?php for($i=0; $i<mysqli_num_rows($result2); $i++) { 
			    				
				    		?>
							        <tr>
							          <td>
							            <p class="form-control-static"><?php echo $team1[$i]['name']; ?></p>
							              
							          </td>
							          <td>
							            <input type="number" class="form-control" size="4" value="0" >
							          </td>
							          <td>
							            <input type="number" class="form-control" size="4" value="0" >
							          </td>
							          <td>
							            <input type="number" class="form-control" size="4" value="0" >
							          </td>
							          <td>
							            <input type="number" class="form-control" size="4" value="0" >
							          </td>
							          <td>
							            <input type="number" class="form-control" size="4" value="0" >
							          </td>
							          <td>
							            <input type="number" class="form-control" size="4" value="0" >
							          </td>
							          <td>
							            <input type="number" class="form-control" size="4" value="0" >
							          </td>
							          
							        </tr>
					        <?php } ?>
					      </tbody>
					    </table>
					  </div>
					</form>
				</div>
    		</div>
 		</div>
		
</body>
</html>

