<div class="navbar">

			<ul class="list">
				<b style="color:black;float:left;line-height:50px;margin-left:15px;font-family:Cooper Black;font-size:25px ">
				School Management System-</b>
			<?php
				if(isset($_SESSION["a_id"]))
				{
					echo'
				
						<li><a href="admin_home.php">Admin Home</a></li>
				<li><a href="change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["t_id"]))
				{
					echo'
				
						<li><a href="teacher_home.php">Teacher Home</a></li>
				<li><a href="teacher_change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				else{
					echo'
					
					<b><li><a href="index.php" style="color:black">Admin</a></li>
				<li><a href="teacher_login.php"  style="color:black">Teacher</a></li>
				<li><a href="contact.php" style="color:black">Contact Us</a></li></b>';
				}
			?>
				
			</ul>
		</div>
		