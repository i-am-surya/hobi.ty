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

  <title>Edit Profile</title>

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

    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
    </div>

    <!-- Page content -->
    <div class="container-fluid">
      <div class="row" style="margin-top: -40%;">
        <div class="col-xl-10 offset-1" style="margin-bottom: 5%;">
          <div class="card bg-secondary shadow" >
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="username">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="user@user">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Password</label>
                        <input type="password" id="password" class="form-control form-control-alternative" value="User">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Confirm Password</label>
                        <input type="password" id="cpassword" class="form-control form-control-alternative" value="password">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Phone Number</label>
                        <input type="tel" id="phonenumber" class="form-control form-control-alternative" value="Phone Number">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="Coimbatore">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">State</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="Tamil Nadu">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Pin code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">I am user. This is about me.</textarea>
                  </div>
                </div>
              </form>
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
