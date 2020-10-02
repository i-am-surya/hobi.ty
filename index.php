<?php

include('security.php');
ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page | hobity</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-info">

  <div class="container">
    <h1 class="font-weight-bold text-center pt-50px" style="padding-top:5%; color: #1e1e1e;">hobi<em style="font-size:60px; color: #f48840;">.</em>ty</h1> 
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 align-center">
                <div class="p-5" style="background: #20232e;">
                  <div class="text-center">
                    <h1 class="h3 text-white mb-4">Login Here !</h1>
                  </div>
                  <form class="user" action="code.php" method="POST">
                    
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" placeholder="Email Address..." autocomplete="off" value="<?php if(isset($_COOKIE['emailcookie']))
                      {
                        echo $_COOKIE['emailcookie'];
                      } ?> ">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password..." autocomplete="off" value="<?php if(isset($_COOKIE['passwordcookie']))
                      {
                        echo $_COOKIE['passwordcookie'];
                      } ?>">
                    </div>
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="rememberme" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label text-white" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="row">
                    <div class="col-lg-6 text-center">
                      <a class="small text-white" href="forgot_password.php">Forgot Password?</a>
                    </div>
                    <div class="col-lg-6 text-center">  
                      <a class="small text-white" href="create_account.php">Create an Account!</a>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Footer -->
  <footer class="sticky-footer" style="color: #1e1e1e; font-weight:bold; font-size:14px;">
    <div class="container my-auto">
      <div class="copyright text-center text-black my-auto">
        <span>Copyright &copy; hobity 2020</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  <?php

  include('includes/scripts.php');

  ?>

</body>

</html>