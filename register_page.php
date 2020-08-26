<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/all.css" rel="stylesheet" type="text/css" media="all" />

  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

</head>
<body>

<img class="bgimage-reg" src="img/mirrorwave.png" >

  <div class="main">
    <div class="bg-layer">
    <h1><i class="fa fa-eercast" aria-hidden="true"></i> hobi.ty</h1>
      <div class="header-main">
        <div class="main-icon">
          <h2>Register your account</h2>
        </div> 
        <div class="header-left-bottom">
          <form name="form1" id="form1" class="register-form" method="POST" action="registration.php" autocomplete="off">
            <div class="icon1">
              <input type="email" placeholder="Enter your email address" name="email" id="email"/>
            </div>
            <div class="icon1">
              <input type="password" placeholder="Enter password" name="password" id="password"/>
            </div>
            <div class="icon1">
              <input type="password" placeholder="Re-enter your password"   name="confirmPassword" id="confirmPassword"/>
            </div>
            <div class="bottom">
              <button type="submit" class="btn">Sign Up</button>
            </div>
          </form>
        </div>
      </div>

      <div class="copyright">
			  <p>© 2020  All rights reserved | Design by <a href="https://github.com/i-am-surya/">Surya <i class="fas fa-spider"></i></a></p>
      </div>
      
    </div> 
  </div>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>