<?php 
  
  include "database.php";
  session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<title>Subject</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="subject.css">
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
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Add Subject Details</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">View Subject Details</a> 
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
    <h1 class="w3-jumbo"><b>Subject Details</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Add Details</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!--subject details add form-->
  		
  		<div class="content1">
			<!-- <h3>Add Subject Details</h3> -->

        <?php 

          if(isset($_POST['submit']))
          {
            $que = "insert into subject(SNAME) values('{$_POST['sname']}')";
            $res = $db->query($que);

            if($res)
            {
              echo "<div class = 'success'>Insert Successful...</div>";
            }
            else
            {
              echo "<div class = 'error'>Insert Failed...</div>";
            }
          }

         ?>

			<form method="post" action = "<?php echo $_SERVER["PHP_SELF"]; ?>">
				<label>Subject Name</label><br>
				<input type="text" name="sname" required class="input" placeholder="Add Subject Name">
				<button type="submit" class="btn" name="submit">Add Subject Details</button>
			</form>

		</div>

  	<!--view subject details-->
  		<div class="w3-container" id="services" style="margin-top: 75px;">
  			<h1 class="w3-xxxlarge w3-text-red"><b>View Details</b></h1>
  			<hr style="width: 50px;border:5px solid red" class="w3-round">
	  		<div class="tbox">
				<h3 style="margin-top: 30px;">Subject Details</h3><br>
				<table border="1px">
					<tr>
						<th>S.no</th>
						<th>Subject Name</th>
						<th>Delete</th>
					</tr>

          <?php 

            $s = "select * from subject";
            $result = $db->query($s);
            if($result->num_rows > 0)
            {
              $i  = 0;
              while($r = $result->fetch_assoc())
              {
                $i++;
                echo "
                  <tr>
                    <td>{$i}</td>
                    <td>{$r["SNAME"]}</td>
                    <td><a href='sub_delete.php?id={$r["SID"]}' class='btn'>Delete</a></td>
                  </tr>
                ";
              }
            }

           ?>

				</table>
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
