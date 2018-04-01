<?php
session_start();
if(empty($_SESSION['isLoggedIn']))
  $_SESSION['isLoggedIn'] = false;
$_SESSION['onpage'] = 'home';

$mysqli=mysqli_connect("localhost","root","","ipldb");

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
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>IPL</title>
</head>
<body>

   
  <!-- always include one </div> elements before </body> -->
    <?php include 'mynavigation.php';?>

        <div id='content' class="col-md-10 main">
          
          <div class="row">

            <div class="col-md-4">
              <div class="card text-center">
                  <img class="card-img-top" src="<?php echo $image ?>">
                  <div class="card-body">
                    <h5 class="card-title team-name"><?= $values[1] ?>
                  </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card text-center cd">
                  <img class="card-img-top" src="<?php echo $image1 ?>" > <b class="vstext">v/s</b> 
                  <img class="card-img-top" src="<?php echo $image2 ?>" >
                  <div class="card-body">
                    <h5 class="card-title team-name"><?= $values1[2] ?> v/s <?= $values1[3] ?>
                    <h5 class="card-title team-name"><?= $values1[1] ?>
                    <h5 class="card-title team-name"><?= $values1[4] ?>
                    <h5 class="card-title team-name"><?= $status[$values1[5]] ?>
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
                <iframe src="https://www.youtube.com/embed/" width="420" height="315"></iframe>
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
  
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
    </script>

</body>
</html>
<?php

$mysqli = mysqli_connect("localhost","root","","ipldb");
if (!empty($_POST['username']) 
               && !empty($_POST['password'])) {
  
  $_SESSION['user']=$_POST['username'];
  $_SESSION['pass']=$_POST['password'];

  $sql="select * from users where username='".$_SESSION['user']."' and password='".$_SESSION['pass']."'  ";

  $result=mysqli_query($mysqli,$sql);

  if(mysqli_num_rows($result)){
    echo "You have successfully registered";
    $_SESSION['isLoggedIn'] = true;
    Header('Location: '.$_SERVER['PHP_SELF']);
    Exit(); //optional

  }
  else{
    echo "You have entered wrong credentials";

  }
}

 ?>
