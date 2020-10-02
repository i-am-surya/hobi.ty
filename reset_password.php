<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Reset Passsword</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link href="css/all.css" rel="stylesheet" type="text/css" media="all" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body class="bg-info">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 align-center">
                <div class="p-5" style="background: #20232e;">
                  <div class="text-center">
                    <h1 class="h4 text-white mb-4">Reset your password</h1>
                  </div>
                  <form class="user" action="" method="POST">

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="New Password" name="password" id="password" required />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Confirm password" name="cpassword" id="cpassword" required />
                    </div>
                    <button type="submit" name="reset_pwd_btn" class="btn btn-primary btn-user btn-block">
                      Save password
                    </button>

                  </form>
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php

// include 'dbcon.php';

// if(isset($_POST['submit'])){

//   if(isset($_GET['token'])){

//   $token = $_GET['token'];    

//   $newpassword = mysqli_real_escape_string($con, $_POST['password']);
//   $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

//   $pass = password_hash($newpassword, PASSWORD_BCRYPT);
//   $cpass = password_hash($cpassword, PASSWORD_BCRYPT);



//   if($newpassword === $cpassword){

//     $updatequery = " update users set password='$pass' where token='$token' ";

//     $iquery = mysqli_query($con, $updatequery);


//     if($iquery){

//       $_SESSION['msg'] = "Your password has been updated !";
//       header('location:index.php');

//     }else {
//       $_SESSION['passmsg'] = "Password failed to update !";
//       header('location:reset_password.php');
//     }
//    } else {
//     $_SESSION['passmsg'] = "Password not matching!";
//    }
//   }else {
//     echo "No token found !";
//   }
// }

?>

<!-- <img class="bgimage-reg" src="img/mirrorwave.png" >

  <div class="main">
    <div class="bg-layer">
    <h1><i class="fas fa-icons"></i> hobi.ty</h1>
      <div class="header-main">
        <div class="main-icon">
          <h2>Reset your password</h2>
        </div> 
        <div class="header-left-bottom">

          <p>
            <?php

            // if(isset($_SESSION['passmsg'])){
            // echo $_SESSION['passmsg']; 
            // }else{
            //   echo $_SESSION['passmsg'] = "";
            // }
            ?>
          </p>
          <form name="form1" id="form1" class="register-form" method="POST" action="" autocomplete="off">
            
            <div class="icon1">
              <span class="fa fa-lock" style="color: #333; padding-right: 5px; font-size:18px;"></span>
              <input type="password" placeholder="New Password" name="password" id="password" required />
            </div>
            <div class="icon1">
              <span class="fa fa-lock" style="color: #333; padding-right: 5px; font-size:18px;"></span>
              <input type="password" placeholder="Confirm password"   name="cpassword" id="cpassword" required />
            </div>
            <div class="bottom">
              <button type="submit" name="submit" class="btn">Update Password</button>
            </div>
          </form>
        </div>
      </div>
      
    </div> 
  </div>

</body> -->