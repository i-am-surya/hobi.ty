<?php

include('security.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create Account</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-info">

  <div class="container">
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
                    <h1 class="h4 text-white mb-4">Create an Account!</h1>
                  </div>
                  <form class="user" action="code.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="password" name="cpassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" required>
                      </div>
                    </div>
                    <input type="hidden" name="usertype" value="user">
                    <button type="submit" name="create_account_btn" class="btn btn-primary btn-user btn-block">
                      Register Account
                    </button>
                    </form>
                    <hr>
                    <div class="row">
                      <div class="col-lg-6 text-center">
                        <button type="button" id="googlebtn" onclick="GoogleLogin();" class="btn btn-google btn-user btn-block text-white border-0">
                          <i class="fab fa-google fa-fw"></i> Login with Google
                        </button>
                      </div>
                      <div class="col-lg-6 text-center">
                        <button type="button" id="facebookbtn" onclick="FacebookLogin();" class="btn btn-facebook btn-user btn-block text-white border-0">
                          <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                        </button>
                      </div>
                    </div>
                  <hr>
                  <div class="text-center">
                    <a class="small text-white" href="forgot_password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small text-white" href="index.php">Already have an account? Login!</a>
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

  <?php

  include('includes/scripts.php');
  include('includes/firebaseLogin.php');

  ?>

</body>

</html>