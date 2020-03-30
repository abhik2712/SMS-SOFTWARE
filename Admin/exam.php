<?php 
	
	include "database.php";
	session_start();

	if(!isset($_SESSION["id"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	

 ?>

<!DOCTYPE html>
<html lang="en">
<title>Exam</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="exam.css">
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
    <a href="admin_home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Add Exam Details</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">View Exam Details</a> 
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
    <h1 class="w3-jumbo"><b>Exam Details</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Add Details</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!--class details add form-->
  	
  	<div id="section">
		<!-- <h1 class="text">Welcome Admin</h1><br><hr><br> -->

		<div class="content">
			<!-- <h3 style="margin-left: 200px;">Set Exam Time Table Details</h3><br> -->

			<?php 

				if(isset($_POST["submit"]))
				{
					$edate = $_POST["da"].'-'.$_POST["mo"].'-'.$_POST["ye"];
					$sq = "insert into exam(ENAME, ETYPE, EDATE, SESSION,CLASS, SUB) values('{$_POST["ename"]}', '{$_POST["etype"]}', '{$edate}', '{$_POST["ses"]}', '{$_POST["cla"]}', '{$_POST["sub"]}' )";
					if($db->query($sq))
					{
						echo "<div class = 'success'>Insert Success.. </div>";
					}
					else
					{
						echo "<div class = 'error'>Insert Failure.. </div>";
					}
				}

			 ?>

			<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
				<div class="lbox">
					<label>Exam Name</label><br>
					<input type="text" name="ename" class="input3" placeholder="Enter exam name" style="font-size:20px;"><br><br>
					<label>Select Term</label><br>
						<select name="etype" required class="input3">
							<option value="">Select</option>
					      	<option value="I-Term">I-Term</option>
					      	<option value="II-Term">II-Term</option>
					       	<option value="III-Term">III-Term</option>
						</select>
					<br><br>

					<label>Exam Date</label><br>
						<select name="da" class="input5">
							<option value="">Date</option>
							<option value="1">1 </option>
							<option value="2">2 </option>
							<option value="3">3 </option>
							<option value="4">4 </option>
							<option value="5">5 </option>
							<option value="6">6 </option>
							<option value="7">7 </option>
							<option value="8">8 </option>
							<option value="9">9 </option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>

						<select name="mo" class="input5">
							<option> Month</option>
							<option value="01">Jan</option>
							<option value="02">Feb</option>
							<option value="03">Mar</option>
							<option value="04">Apr</option>
							<option value="05">May</option>
							<option value="06">Jun</option>
							<option value="07">Jul</option>
							<option value="08">Aug</option>
							<option value="09">Sep</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
						</select>

						<select name="ye" class="input5">
							<option value="">Select Year</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
						</select>
				</div>

				<div class="rbox">
					<label>Session</label>
						<select name="ses" required class="input3">
							<option value="">Select</option>
							<option value="FN">FN</option>
							<option value="AN">AN</option>
						</select>
					<br><br>

					<label>Class</label>
						<select name="cla" required class="input3">
							
							<?php 

								$sl = "select DISTINCT(CNAME) from class";
								$r = $db->query($sl);
								if($r->num_rows > 0)
								{
									echo "<option value = ''>Select</option>";
									while($ro = $r->fetch_assoc())
									{
										echo "<option value ='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
									}
								}

							 ?>

						</select>

					<br><br>

					<label>Subject</label>
						<select name="sub" required class="input3">

							<?php 

								$s = "select * from subject";
								$re = $db->query($s);
								if($re->num_rows > 0)
								{
									echo "<option value = ''>Select</option>";
									while($ro = $re->fetch_assoc())
									{
										echo "<option value ='{$ro["SNAME"]}'>{$ro["SNAME"]}</option>";
									}
								}

							 ?>
							
						</select>
					<br><br>
				</div>

					<button type="submit" class="btn" name="submit" style="margin-top: 100px; margin-left: 2px;">Add Exam Details</button>

			</form>

		</div>
	</div>


  	<!--view class details-->
  		<div class="w3-container" id="services" style="margin-top: 75px;">
  			<h1 class="w3-xxxlarge w3-text-red"><b>View Details</b></h1>
  			<hr style="width: 50px;border:5px solid red" class="w3-round">
  			<div id="section">
				<!-- <h1 class="text" style="margin-left: 550px; margin-top: 20px;">Welcome Admin</h1><br><br> -->

				<div class="content1">
					<h3 style="margin-left: 35px;">View Exam Time Table Details</h3>
					<?php
							if(isset($_GET["mes"]))
								{
									echo"<div class='error'>{$_GET["mes"]}</div>";	
								}
					
						?>

					<table border="1px">
						<tr>
							<th>S.No</th>
							<th>Class</th>
							<th>Subject</th>
							<th>Exam Name</th>
							<th>Term</th>
							<th>Date</th>
							<th>Session</th>
							<th>Delete</th>
						</tr>
						<?php
								$s="select * from exam";
								$res=$db->query($s);
								if($res->num_rows>0)
								{
									$i=0;
									while($r=$res->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$i}</td>
												<td>{$r["CLASS"]}</td>
												<td>{$r["SUB"]}</td>
												<td>{$r["ENAME"]}</td>
												<td>{$r["ETYPE"]}</td>
												<td>{$r["EDATE"]}</td>
												<td>{$r["SESSION"]}</td>
												<td><a href='exam_delete.php?id={$r["EID"]}' class='btn'>Delete</a></td>
											</tr>
										
										
										
										";
										
									}
								}
								else
								{
									echo "No Record Found";
								}
							
							?>
						
					</table>

				</div>

			</div>


  		<!-- W3.CSS Container -->
		<!-- <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:200px;padding-right:58px"><p class="w3-right">Powered by <a href="home.html" title="SMS" target="_blank" class="w3-hover-opacity">sms-software</a></p></div> -->

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
