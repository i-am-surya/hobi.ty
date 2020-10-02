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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <title>User Profile</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/userprofile.css">
</head>


<body>
  <div class="main-content">
    <!-- Top navbar -->
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
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://images5.alphacoders.com/325/325136.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-xl-6 col-md-10">
            <h1 class="display-2 text-white">Hello User</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the events you have joined and created. Also update your profile here !</p>
            <a href="edit_user_profile.php" class="btn btn-info">Edit profile</a>
          </div>
          <div class="col-xl-4 col-md-10 offset-8" style="margin-top: -20%;">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://i.pinimg.com/originals/a6/6b/af/a66baff52f5b94d1245413f6df55f258.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <!-- <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div> -->
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Joined Events</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Your Events</span>
                    </div>
                    <div>
                      <span class="heading">28</span>
                      <span class="description">Like Mates</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Username<span class="font-weight-light">, 27</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Coimbatore, Tamil Nadu
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Sports, Music
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>PSG CAS
                </div>
                <hr class="my-4">
                <p>I am an User. This is about me.</p>
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <footer class="position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright &copy; hobity 2020 &nbsp;|&nbsp; Designed by <a rel="nofollow" href="https://github.com/i-am-surya/" target="_blank">SURYA</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END OF FOOTER -->
  
</body>
</html>
