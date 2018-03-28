 <!-- This is Top and right navigation bar. Edit only links -->
<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand" href="#">IPL</a>
        </div>

        <!-- <div class="collapse navbar-collapse s">-->
          <ul class="nav navbar-nav navbar-right">
            <li>
              <?php if(!$_SESSION['isLoggedIn']) { ?>
               <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
             <?php } else {?>
                <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
             <?php } ?>
                 
            </li>
          </ul>
        <!--</div>/.nav-collapse --> 

    </div><!--/.navbar -->
    <div class="row-offcanvas row-offcanvas-left">
      <div id="sidebar" class="sidebar-offcanvas">
          <div class="col-md-12">
                <h3>Menu</h3>
                <ul class="nav  nav-stacked">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="leaguetable.php">Points Table</a></li>
                  <li><a href="#">Schedule</a></li>
                  <li><a href="#">Player Stats</a></li>
                  <li><a href="#">Teams</a></li>
                  <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    

        <!-- End of Navigation bars -->