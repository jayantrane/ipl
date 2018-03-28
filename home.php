<?php
session_start();
if(empty($_SESSION['isLoggedIn']))
  $_SESSION['isLoggedIn'] = false;
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/home.css">

    <title>IPL</title>
</head>
<body>

   
    <div class="mynavigation">
      <?php include 'mynavigation.php';?>
    </div>

     <!-- Start Your Code Here -->

        <div id="main">


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
