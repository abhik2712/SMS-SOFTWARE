<?php 
	
	include "database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo "<script>window.open('admin_home.php?mes=Access Denied...','_self');</script>";
	}

 ?>


<!DOCTYPE html>
<html lang="en">
<title>Class</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="class.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Welcome<br>Admin</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="admin_home.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Add Class Details</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">View Class Details</a> 
    <!-- <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a> -->
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Class Details</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Add Details</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!--class details add form-->
  	<div class="w3-row-padding">
  		<div class="w3-half">
  			<div class="content1">
				<!-- <h3>Add Class Details</h3> -->

				<?php 

					if(isset($_POST['submit'])){

						$sq = "insert into class(CNAME, CSEC) values ('{$_POST["cname"]}', '{$_POST["sec"]}')";
						$result = $db->query($sq); 
						if($result)
						{
							echo "<div class = 'success'>Insert Successful...</div>";
						}
						else
						{
							echo "<div class = 'error'>Insert Failed...</div>";
						}
					}

				 ?>

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
					<label>Class Name</label><br>
				<select name="cname" required class="input2">
					<option value="">Select</option>
					<option value="I">I</option>
					<option value="II">II</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
					<option value="V">V</option>
					<option value="VI">VI</option>
					<option value="VII">VII</option>
					<option value="VIII">VIII</option>
					<option value="IX">IX</option>
					<option value="X">X</option>

				</select><br><br>
				<label>Section</label><br>
				<select name="sec" required class="input2">
					<option value="">Select</option>
					<option value="-">-</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
					<option value="F">F</option>
				</select>
				<br>
				<button type="submit" class="btn" name="submit">Add Class Details</button>
				</form>
			</div>
  		</div>
  	</div>

  	<!--view class details-->
  		<div class="w3-container" id="services" style="margin-top: 75px;">
  			<h1 class="w3-xxxlarge w3-text-red"><b>View Details</b></h1>
  			<hr style="width: 50px;border:5px solid red" class="w3-round">
  			<div class="tbox">
				<h3 style="margin-top: 30px; margin-left: 100px;">Class Details</h3>
				<table border="1px">
					<tr>
						<th>S.No</th>
						<th>Class Name</th>
						<th>Section</th>
						<th>Delete</th>
					</tr>

					<?php 

						$s = "select * from class";
						$res = $db->query($s);
						if($res->num_rows > 0)
						{
							$i = 0 ;
							while($r = $res->fetch_assoc())
							{
								$i++;
								echo "
									<tr>
										<td>{$i}</td>
										<td>{$r["CNAME"]}</td>
										<td>{$r["CSEC"]}</td>
										<td><a href='delete.php?id={$r["CID"]}' class='btn'>Delete</a></td>
									</tr>
									";
							}
						}

					 ?>

				</table>
			</div>
  		</div>
  	</div>


  		<!-- W3.CSS Container -->
		<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="home.html" title="SMS" target="_blank" class="w3-hover-opacity">sms-software</a></p></div>

		<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

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
