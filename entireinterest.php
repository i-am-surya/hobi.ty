<?php

include('security.php');

if(!$_SESSION['cusername'])
{
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Entire Interest</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/css.css">

    
</head>
<body>


  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
  </div>  
  <!-- ***** Preloader End ***** -->


  <!-- Header -->
  <header class="position-relative">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="user.php"><h2>hobi<em>.</em>ty</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="user.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#">Your Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Notifications</a>
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-none d-lg-inline">
                  
                <?php echo $_SESSION['cusername']; ?>

                </span>
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="userprofile.php">
                  <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout_modal">
                  <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- LOGOUT MODAL -->
      <div class="modal fade" id="logout_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="code.php" method="POST">
              <div class="modal-body">
                <p class="lead">
                  Are you sure to logout ?
                </p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- END OF LOGOUT MODAL -->
    </nav>
  </header>
  
  <!-- Page Content -->

  <section class="call-to-action" style="margin-top: -22px;" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="background: #20232e;">
          <div class="main-content">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8 text-center">
                <span>Find your events here !</span>
                <form>
                  <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Search your event" style="border-radius: 30px 0px 0px 30px;">
                    <input type="text" class="form-control" placeholder="Enter your location" style="border-right:none;">
                    <div class="input-group-btn">
                      <button type="submit" class="btn" style="border-radius: 0px 30px 30px 0px; background: #f48840; padding-left:30px; padding-right:30px;">
                        <i class="fa fa-search text-white text-center"></i>
                      </button>
                    </div>
                  </div>  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="display-4 " style="margin-top:-65px;">
        Interests
      </div>
      <?php

        $query = "SELECT * FROM interests ORDER BY id  ";
        $query_run = mysqli_query($connection,$query);

      ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="all-blog-posts">
            <div class="row">
              <?php
                if($query_run)
                {
                  foreach($query_run as $row)
                  {
              ?>
              <div class="col-lg-6">
                <div class="blog-post" style="background:rgba(32,35,46,1);">
                  
                  <div class="down-content">
                    <span><?php echo $row['name']; ?></span>
                    <p class="post-info">
                      <?php echo $row['description']; ?>
                    </p>
                  </div>
                  
                </div>
              </div>
              <?php
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    
  <!-- FOOTER -->
  <footer class="position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Github</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright &copy; hobity 2020 &nbsp;|&nbsp; Designed by <a rel="nofollow" href="https://github.com/i-am-surya/" target="_blank">SURYA</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END OF FOOTER -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>