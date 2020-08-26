<?php
	session_start();
	if(isset($_SESSION['logincust']))
	{
		header('Location: Home.php');
	}
	else
	{
		session_unset();
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/all.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

</head>
<body>

<img class="bgimage" src="img/wave.png">
<!-- main -->
<div class="main"> 
	<div class="bg-layer">
	
		<h1><i class="fa fa-eercast" aria-hidden="true"></i> hobi.ty</h1>
		<!---728x90--->
		
		<div class="header-main">
      
			<div class="main-icon">
				
        <h2>LOGIN FORM</h2>
			</div>
			<div class="header-left-bottom">
				<form action="#" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Email Address" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required=""/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox"> Keep me logged in</label>
					</div>
					<div class="bottom">
						<button class="btn">Log In</button>
					</div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						<p class="right"><a href="register_page.php">New User? Register</a></p>
						
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or login using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		<!---728x90--->
		<!-- copyright -->
		<div class="copyright">
			<p>© 2020  All rights reserved | Design by <a href="https://github.com/i-am-surya/">Surya <i class="fas fa-spider"></i></a></p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

<script type="text/javascript" src="js/main.js"></script>

</body>
</html>