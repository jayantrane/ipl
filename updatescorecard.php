<?php
	session_start();

	$host = 'localhost'; 
	$db = 'ipldb';
	$user = 'root';
	$pass = '';
	$dsn = "mysql:host=$host;dbname=$db";

	$pdo=new PDO($dsn, $user, $pass);

        $sql = 'CALL add_row_scorecard(:matchid1,:playerid1,:runs1,:balls1,:overs1,:wickets1,:runsconceded1)';
 
        $stmt = $pdo->prepare($sql);


 		for($i=0; $i<11; $i++) {
	        $pid = $_POST['team1id']*100+($i+1);
			$stmt->bindParam(':matchid1', $_POST['id'], PDO::PARAM_INT);
	        $stmt->bindParam(':playerid1', $pid, PDO::PARAM_INT);
	        $stmt->bindParam(':runs1', $_POST['1'.$i.'1'], PDO::PARAM_INT);
	        $stmt->bindParam(':balls1', $_POST['1'.$i.'2'], PDO::PARAM_INT);
	        $stmt->bindParam(':overs1', $_POST['1'.$i.'3'], PDO::PARAM_INT);
	        $stmt->bindParam(':wickets1', $_POST['1'.$i.'4'], PDO::PARAM_INT);
	        $stmt->bindParam(':runsconceded1', $_POST['1'.$i.'5'], PDO::PARAM_INT);
	        $stmt->execute();
	    }
	 
	 	for($i=0; $i<11; $i++) {
	        $pid = $_POST['team2id']*100+($i+1);
			$stmt->bindParam(':matchid1', $_POST['id'], PDO::PARAM_INT);
	        $stmt->bindParam(':playerid1', $pid, PDO::PARAM_INT);
	        $stmt->bindParam(':runs1', $_POST['2'.$i.'1'], PDO::PARAM_INT);
	        $stmt->bindParam(':balls1', $_POST['2'.$i.'2'], PDO::PARAM_INT);
	        $stmt->bindParam(':overs1', $_POST['2'.$i.'3'], PDO::PARAM_INT);
	        $stmt->bindParam(':wickets1', $_POST['2'.$i.'4'], PDO::PARAM_INT);
	        $stmt->bindParam(':runsconceded1', $_POST['2'.$i.'5'], PDO::PARAM_INT);
	        $stmt->execute();
	    }

	    echo "Scorecard updated!!!";
        
 
        $stmt->closeCursor();

    $ipldb = new mysqli("localhost", "root", "", "ipldb");

    $id = $_POST['id'];
    $query ="UPDATE matches SET status = 1 WHERE pid_matches=$id";

    mysqli_query($ipldb,$query);

?>