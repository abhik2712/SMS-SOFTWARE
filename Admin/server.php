<?php 
	
	session_start();

	$username = "";
	$email = "";
	$errors = array();

	include "database.php";

	if(isset($_POST['register']))
	{
		//recieve all inputs from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysql_real_escape_string($db, $_POST['psw']);
		$password_2 = mysqli_real_escape_string($db, $_POST['psw-repeat']);

		//form validation: ensure that the form is correctly filled...

		if(empty($username)){
			array_push($errors, "Username is Required");
		}
		if(empty($email)){
			array_push($errors, "Email is Required");
		}
		if(empty($password_1)){
			array_push($errors, "Password is Required");
		}
		if($password_1 != $password_2){
			array_push($errors, "Password do not match");
		}

		//first check the database to make sure a user doesn't already exists

		$user_check_query = "SELECT * FROM users WHERE username = 
		'{$_POST["username"]}' OR email = '{$_POST["email"]}' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if($user){
			if($user['username'] === $username)
			{
				array_push($errors, "Username Already Exists!!");
			}

			if($user['email'] === $email)
			{
				array_push($errors, "Email Already Exists!!");
			}
		}

		//Finally register user if there are no errors
		if(count($errors) == 0)
		{
			$password = md5($password_1); //encrypt the password before saving in the database

			$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: admin_login.php');
		}

	}

 ?>