<?php
session_start();
if(empty($_SESSION['isLoggedIn']))
  $_SESSION['isLoggedIn'] = false;
$_SESSION['onpage'] = 'home';
?>
<?php

$mysqli = mysqli_connect("localhost","root","","ipldb");
if (!empty($_POST['username']) 
               && !empty($_POST['password'])) {
  
  $_SESSION['user']=$_POST['username'];
  $_SESSION['pass']=$_POST['password'];


  $sql="select * from users where username='".$_SESSION['user']."' and password='".$_SESSION['pass']."'  ";

  $result=mysqli_query($mysqli,$sql);

  if($row=mysqli_fetch_array($result,MYSQLI_NUM)){
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['username'] = $row['name'];
    header('Location: '.$_SERVER['REQUEST_URI']);

  }
  else{
    echo "You have entered wrong credentials";

  }
}
if (!empty($_POST['name']) ) {
  
  $uname1=$_POST['username'];
  $pass1=$_POST['password'];
  $name1=$_POST['name'];
  $email1=$_POST['email'];

  $sql="insert into users(username,password,name,email) values('".$uname1."','".$pass1."','".$name1."','".$email1."')";

  mysqli_query($mysqli,$sql);

  
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['user'] = $_POST['name'];
    header('Location: '.$_SERVER['REQUEST_URI']);

  
}

$yep=mt_rand(1,8);

$sql1="select * from teams where pid_teams='".$yep."' ";

$result1=mysqli_query($mysqli,$sql1);

$values=mysqli_fetch_array($result1);

$image="css/images/".$values[0].".png";

$yep2=mt_rand(1,56);

$status=array("Not-Happened","Already-Happened");

$sql2="select * from matches where pid_matches='".$yep2."' ";

$result2=mysqli_query($mysqli,$sql2);

$values1=mysqli_fetch_array($result2);

$teams=array("","Mumbai Indians","Chennai Super Kings","Royal Challengers Bangalore","Kolkata Knight Riders","Sunrisers Hyderabad","Rajasthan Royals","Kings XI Punjab","Delhi Daredevils");


$image1="css/images/".array_search(strtolower($values1[2]),array_map('strtolower', $teams)).".png";
$image2="css/images/".array_search(strtolower($values1[3]),array_map('strtolower', $teams)).".png";

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/mynavigation.css">
    <!-- Your custom styles (optional) -->

    <link rel="stylesheet" href="css/home.css">
    

    <title>IPL</title>
    <link rel="icon" href="css/images/ipl-logo1.jpg">
</head>
<body>

   
  <!-- always include one </div> elements before </body> -->
    <?php include 'mynavigation.php';?>

        <div id='content' class="col-md-10 main">
            <div class="row" >


              <div class="col-md-12">
                <div class="card cd" >
                    <div class="row" style="margin-left: 10vw">
      	          	  <div class="col-md-4">
      	               	<img class="card-img-top" style="text-align: right;" src="<?php echo $image1 ?>" >
      	              </div>
      	              <div class="col-md-1 vstext" >
      	               	 <b>v/s</b> 
      	              </div>
      	              <div class="col-md-7">
    	                  <img class="card-img-top" style="text-align: left;" src="<?php echo $image2 ?>" >
                      </div>
                    </div>
                    <div class="card-body row text-center" style="margin-right: 5vw;">
                      <h4 class="card-title team-name"><?= $values1[2] ?> v/s <?= $values1[3] ?>
                      <h4 class="card-title team-name"><?= $values1[1] ?>
                      <h4 class="card-title team-name"><?= $values1[4] ?>
                      <h4 class="card-title team-name"><?= $status[$values1[5]] ?>
                    </div>
                </div>
              </div>

            </div>

            <div class="row">

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/1zfSKRqh1Vs" width="420" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of MI
                  </div>
                </div>
              </div>

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/igSHFeysDXo" width="400" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of CSK
                  </div>
                </div>
              </div>

            </div>

            <div class="row">

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/aIjpJPDCIaI" width="420" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of RCB
                  </div>
                </div>
              </div>

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/fz7w_K0akxk" width="400" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of KKR
                  </div>
                </div>
              </div>

              <div class="row">

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/ygSfV9uh5NA" width="420" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of SRH
                  </div>
                </div>
              </div>

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/vPGkqGszzGs" width="400" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of RR
                  </div>
                </div>
              </div>

            </div>

            <div class="row">

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/asOKH8_8Eac" width="420" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of KXIP
                  </div>
                </div>
              </div>

              <div class="col-md-5 cd">
                <div class="card text-center">
                  <iframe src="https://www.youtube.com/embed/isZA9PeTrWg" width="400" height="315"></iframe>
                  <div class="card-body">
                    <h5 class="card-title team-name">Probable Playing XI of DD
                  </div>
                </div>
              </div>

            </div>

          
      </div>
    </div>
  </div>
  
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    

</body>
</html>
