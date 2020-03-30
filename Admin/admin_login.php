<?php 
	
	include "database.php";
	session_start();

 ?>	

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" type="text/css" href="admin_login.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body class="back">		
		<!-- <img src="pic1.jpg" style="width: 100%"> -->
		<div class="login">
			<h1 class="heading">Admin Login</h1>
			<div class="log">

				<?php 

					if(isset($_POST["login"]))
					{
						$sql  = "select * from users where username = '{$_POST["uname"]}' and password = '{$_POST["psw"]}'";
						$res = $db->query($sql);
						if($res->num_rows > 0)
						{
							$ro = $res->fetch_assoc();
							$_SESSION["id"] = $ro["id"];
							$_SESSION["username"] = $ro["username"];
							echo "<script>window.open('admin_home.php','_self');</script>";

						}
						else
						{
							echo "<div class ='error'>Invalid Username or Password</div>";
							// echo "<div class ='error'>Don't have an account?.. Please Sign Up</div>";
						}
					}

				 ?>

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
					<div class="imgcontainer">
						<img src="img_avatar.jpg" alt="Avatar" class="avatar">
					</div>

					<div class="container">
						<label for="uname"><b>Username</b></label>
						<br>
						<input type="text" placeholder="Enter Username" name="uname" class="input" required><br><br>

						<label for="psw"><b>Password</b></label><br>
						<input type="password" placeholder="Enter Password" name="psw" class="input" required><br><br>

						<button type="submit" name="login">Login</button><br><br>
						<label>
							<input type="checkbox" checked="checked" name="remember">Remember Me
						</label>
					</div>
					<div class="container" style="background-color:#663b95">
						<button type="button" class="cancelbtn">Cancel</button>
						<span class="psw"> Forgot <a href="#">password?</a></span>
					</div>
				</form>
			</div>
			

			<!-- <div class="navbar">
				<a href="#home" class="active">Home</a>
				<a href="#contact">Contact Us</a>
				<a href="#Sign Up">Sign Up</a>
			</div> -->

		</div>

			<div class="navbar">
				  <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
				  <a href="home.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
				  <a href="home.php"><i class="fa fa-fw fa-user"></i> Sign Up</a>
			</div>

	<script src="js/jquery.js"></script>
     <script>
	    $(document).ready(function(){
	      $(".error").fadeTo(1000, 100).slideUp(1000, function(){
	          $(".error").slideUp(1000);
	      });
	      
	      $(".success").fadeTo(1000, 100).slideUp(1000, function(){
	          $(".success").slideUp(1000);
	      });
	    });
	</script>

	</body>
</html>
