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
						$sql  = "select * from admin where ANAME = '{$_POST["uname"]}' and APASS = '{$_POST["psw"]}'";
						$res = $db->query($sql);
						if($res->num_rows > 0)
						{
							$ro = $res->fetch_assoc();
							$_SESSION["AID"] = $ro["AID"];
							$_SESSION["ANAME"] = $ro["ANAME"];
							echo "<script>window.open('admin_home.html','_self');</script>";

						}
						else
						{
							echo "<div class ='error'>Invalid Username or Password</div>";
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
				  <a class="active" href="home.html"><i class="fa fa-fw fa-home"></i> Home</a>
				  <a href="home.html"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
				  <a href="home.html"><i class="fa fa-fw fa-user"></i> Sign Up</a>
			</div>

	</body>
</html>
