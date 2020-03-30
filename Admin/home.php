<?php 
  
  include "database.php";
  // include "errors.php";
  session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="home.css">

<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!--Navbar-->

<div class="w3-top">
	<div class="w3-bar w3-theme-d2 w3-left-align">
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>
		<a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
		<a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
		<a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
		<a href="#signup" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Signup</a>
		<div class="w3-dropdown-hover w3-hide-small">
	    <button class="w3-button" title="Notifications">Login<i class="fa fa-caret-down"></i></button>     
	    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
	      <a href="admin_login.php" class="w3-bar-item w3-button">AdminLogin</a>
	      <a href="teacher_login.php" class="w3-bar-item w3-button">Teacher Login</a>
	    </div>
  	</div>
  	<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
</div>

<!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Contact</a>
    <a href="#signup" class="w3-bar-item w3-button">Signup</a>
    <a href="#login" class="w3-bar-item w3-button">Login</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="sailboat.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">School Management System</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Welcome To School Management Software</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Hope You enjoy the software</p>
      <p>Go to our <a class="w3-text-teal" href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a> for your valuable feedback</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Have a Nice Day</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="img_avatar2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Abhik Naskar</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="img_avatar2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Alpesh Kaushal</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="img_avatar2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Harshit Soora</h3>
  <p>Boss man</p>
</div>

<div class="w3-quarter">
  <img src="img_avatar2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Naimesh Pramanik</h3>
  <p>Web Designer</p>
</div>
</div>
</div>


<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Our Work</h2>
<p>School management software is a tool that is specifically designed to streamline the paperless administration of schools and educational institutions. It consists of various modules that greatly help the teachers and staff in maintaining student records, academic history, and other essential student information.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="admin.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>Module 1</h3>
  <h4>Administration</h4>
  <p>CLass Details</p>
  <p>Subject Details</p>
  <p>Staff Details</p>
  <p>Exam Details</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="teacher.jpg" alt="Lights" style="width:100%">
  <div class="w3-container">
  <h3>Module 2</h3>
  <h4>Teacher</h4>
  <p>Student Registration</p>
  <p>Exam</p>
  <p>Marks</p>
  <p>Personal Info</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="staff.jpg" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <h3>Module 3</h3>
  <h4>Staff</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>
</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="signup">
    <h2>Signup</h2>
    <p>Choose a module to sign up</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Administration</p>
        </li>
        <li class="w3-padding-16"><b>Class Details</b></li>
        <li class="w3-padding-16"><b>Subject Details</b></li>
        <li class="w3-padding-16"><b>Staff Details</b></li>
        <li class="w3-padding-16"><b>Exam Details</b></li>
        <!-- <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
          <span class="w3-opacity">per month</span>

        </li> -->
        <li class="w3-theme-l5 w3-padding-24">

        	<!-- <form action="" style="border:1px solid #ccc"> -->
        		<!--Button to open the modal-->
        		<div class="signup">
        		<button class="w3-button w3-teal w3-padding-large" onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-check"></i> Sign Up</button>

        		<!--The Modal containing the sign up form-->
        		<div id="id02" class="modal">
        			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>

              <?php 

                if(isset($_POST["register"]))
                {
                  $sql = "insert into users(username, email, password) values ('{$_POST["username"]}', '{$_POST["email"]}', '{$_POST["psw"]}')";
                  $result = $db->query($sql);
                  if($result)
                  {
                    // echo "<div class = 'success'>Insert Successful...</div>";
                    echo "<script>window.open('home.php','_self');</script>";
                  }
                  else
                  {
                    echo "<div class ='error'>Invalid Username or Password</div>";
                  }
                }

               ?>


        			<form class="modal-content" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        				<div class="container">
        					<h1>Sign Up</h1>
        					<p>Please fill this form to create an account.</p>
        					<hr>
        					<label for="username"><b>Username</b></label>
        					<input type="text" name="username" placeholder="Enter username" required>

                  <label for="email"><b>Email</b></label>
                  <input type="text" name="email" placeholder="Enter email" required>

        					<label for="psw"><b>Password</b></label>
        					<input type="password" name="psw" placeholder="Enter Password" required>

        					<label for="psw-repeat"><b>Repeat Password</b></label>
        					<input type="password" name="psw-repeat" placeholder="Repeat Password" required>

        					<label>
        						<input type="checkbox" name="remember" checked="checked" style="margin-bottom: 15px">Remember Me
        					</label>

        					<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        					<div class="clearfix">
        						<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        						<button type="submit" class="signup" name="register">Sign Up</button>
        					</div>
        				</div>
        			</form>
        		</div> 
        	</div>
        	<!-- </form> -->
         
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Teacher</p>
        </li>
        <li class="w3-padding-16"><b>Student Registration</b></li>
        <li class="w3-padding-16"><b>Exam</b></li>
        <li class="w3-padding-16"><b>Marks</b></li>
        <li class="w3-padding-16"><b>Personal Info</b></li>
        <!-- <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
          <span class="w3-opacity">per month</span>
        </li> -->
        <li class="w3-theme-l5 w3-padding-24">
          <div class="signup">
            <button class="w3-button w3-teal w3-padding-large" onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-check"></i> Sign Up</button>

            <!--The Modal containing the sign up form-->
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>

              <form class="modal-content" action="#">
                <div class="container">
                  <h1>Sign Up</h1>
                  <p>Please fill this form to create an account.</p>
                  <hr>
                  <label for="email"><b>Email</b></label>
                  <input type="text" name="email" placeholder="Enter email" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" name="psw" placeholder="Enter Password" required>

                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" name="psw-repeat" placeholder="Repeat Password" required>

                  <label>
                    <input type="checkbox" name="remember" checked="checked" style="margin-bottom: 15px">Remember Me
                  </label>

                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signup" name="register">Sign Up</button>
                  </div>
                </div>
              </form>
            </div> 
          </div>
          <!-- </form> -->
         
        </li>
      </ul>
    </div>
          
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Staff</p>
        </li>
        <li class="w3-padding-16"><b>Module1</b></li>
        <li class="w3-padding-16"><b>Module2</b></li>
        <li class="w3-padding-16"><b>Module3</b></li>
        <li class="w3-padding-16"><b>MOdule4</b></li>
        <!-- <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
          <span class="w3-opacity">per month</span>
        </li> -->
        <li class="w3-theme-l5 w3-padding-24">
          <div class="signup">
            <button class="w3-button w3-teal w3-padding-large" onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-check"></i> Sign Up</button>

            <!--The Modal containing the sign up form-->
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>
              <form class="modal-content" action="#">
                <div class="container">
                  <h1>Sign Up</h1>
                  <p>Please fill this form to create an account.</p>
                  <hr>
                  <label for="email"><b>Email</b></label>
                  <input type="text" name="email" placeholder="Enter email" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" name="psw" placeholder="Enter Password" required>

                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" name="psw-repeat" placeholder="Repeat Password" required>

                  <label>
                    <input type="checkbox" name="remember" checked="checked" style="margin-bottom: 15px">Remember Me
                  </label>

                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signup" name="register">Sign Up</button>
                  </div>
                </div>
              </form>
            </div> 
          </div>
          <!-- </form> -->
         
        </li>
      </ul>
    </div>
</div>
<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Kharagpur, IN</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
      <?php 

        if(isset($_POST["send"]))
        {
          require 'PHPMailerAutoload.php';
          require 'credential.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->IsSMTP();                                      // Set mailer to use SMTP
        $mail->Host = gethostbyname('smtp.gmail.com');  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom(EMAIL, 'Abhik');
        $mail->addAddress($_POST["Email"]);     // Add a recipient
       // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo(EMAIL);
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['Name'];
        $mail->Body    = '<div style = "border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
        $mail->AltBody = $_POST['Message'];

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
                }

       ?>
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="<?php echo $_SERVER["PHP_SELF"]; ?>"  method = "post">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme" name="send">Send</button>
      </form>
    </div>
  </div>
</div>
<!-- Image of location/map -->
<img src="kgp.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="home.html" target="_blank">sms software</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>


<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>