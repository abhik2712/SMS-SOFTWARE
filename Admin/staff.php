<?php 

  include "database.php";
  session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<title>Staff</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="staff.css">
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
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Add Staff Details</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">View Staff Details</a> 
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
    <h1 class="w3-jumbo"><b>Staff Details</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Add Details</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!--class details add form-->
  		
  		<div id="section">
		<!-- <h1 class="text"> Welcome Admin</h1><br><hr><br> -->
		<div class="content1">
				<!-- <h3 style="margin-left: 200px;">Add Staff Details</h3> -->

        <?php 

          if(isset($_POST['submit']))
          {
            $sql = "insert into staff(TNAME, TPASS, QUAL, SAL) values('{$_POST["sname"]}', 1234, '{$_POST["qual"]}', '{$_POST["sal"]}')";
            $result = $db->query($sql);
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

				<form method="post" style="margin-left: 100px; width: 100%" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
					<label>Staff Name</label><br>
					<input type="text" name="sname" required class="input" placeholder="Add Staff Name"><br><br>
					<label>Qualification</label><br>
					<input type="text" name="qual" required class="input" placeholder="Add Staff Qualification"><br><br>
					<label>Salary</label><br>
					<input type="text" name="sal" required class="input" placeholder="Add Staff Salary"><br><br>
					<button type="submit" class="btn" name="submit">Add Staff Details</button>
				</form>
			</div>
		</div>

  	<!--view class details-->
  		<div class="w3-container" id="services" style="margin-top: 75px;">
  			<h1 class="w3-xxxlarge w3-text-red"><b>View Details</b></h1>
  			<hr style="width: 50px;border:5px solid red" class="w3-round">
  			<div id="section">
				<!-- <h1 class="text">Welcome Admin</h1><br><hr><br> -->
				<div class="content1">
					<h3>View Staff Details</h3><br>
          <form id = "frm" autocomplete="off" action =  "<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="text" id = "txt" class = "input">
          </form>
          <br>
					<div id="box"></div>
				</div>
			</div>


  		<!-- W3.CSS Container -->
		<!-- <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="home.html" title="SMS" target="_blank" class="w3-hover-opacity">sms-software</a></p></div> -->

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

<script type="text/javascript">
  $(document).ready(function()
  {
    $("#txt").keyup(function(){
      var txt = $("#txt").val();
      if(txt!="")
      {
        $.post("search.php", {s:txt},function(data){

          $("#box").html(data);

        });
      }
    });
  });
</script>

</body>
</html>
