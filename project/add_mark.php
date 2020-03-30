<?php
	include"conn.php";
	session_start();
	if(!isset($_SESSION["s_id"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
	
	
	$sql="SELECT * FROM teacher_data WHERE t_id={$_SESSION["s_id"]}";
		$res=$a->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update marks</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
	
			<div id="section">
				<?php include"sidebar.php";?><br>
					<h3 class="text">Welcome <?php echo $_SESSION["s_name"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Add Marks</h3><br>
					
					 <?php
						if(isset($_GET["err"]))
						{
							echo "<div class='error'>{$_GET["err"]}</div>";
						}
					?>
					<form  method="get" action="mark.php">
					<div class="lbox1">	
					
						<label>Enter Roll No</label><br>
						<input type="text" class="input3" name="rno"><br><br>
					</select>
					
					</div>
			
					<button type="submit" class="btn" name="view"> View Details</button>
				
					</form>
			
				</div>
			</div>
	
			
	</body>
</html>