
<?php
	include"conn.php";
	session_start();
	if(!isset($_SESSION["s_id"]))
	{
		echo"<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
		
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
		<title>dashboard</title>
                <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
        <body bgcolor="whitesmoke">
            <?php include"navbar.php";?><br>
		<br>
                    <?php include"sidebar.php";?><br>
			<div id="section">
                        <br>
			<h1 class="text">Welcome <?php echo $_SESSION["s_name"]; ?></h1><hr>
				<div class="content">
                                        <div class="lbox1">
					<h3>Add/Update Profile-------------------------------------------</h3><br>
					
					<?php
						if(isset($_POST["submit"]))
						{
							$target="staff/";
							$target_file=$target.basename($_FILES["img"]["name"]);
							
							if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file))
                                                        //if(copy($_FILES['img']['tmp_name'], $target_file))
                                                        {
                                                                //echo "query initiated";
								$sql="update teacher_data set ph_no='{$_POST["pno"]}',email='{$_POST["mail"]}',address='{$_POST["addr"]}',image='{$target_file}' where t_id={$_SESSION["s_id"]}";
								$a->query($sql);
								echo "<div class='success'>Profile Updated</div>";
							}
							
						}
					
					
					?>
					
					
					
					
						
					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
							<label>  Phone No</label><br>
							<input type="text" maxlength="10" required class="input3" name="pno"><br><br>
							<label>  E - Mail</label><br>
							<input type="email"  class="input3" required name="mail"><br><br>
							<label>  Address</label><br>
							<textarea rows="5" name="addr"></textarea><br><br>
							<label> Image</label><br>
                                                        <input type="file" required class="input3" name="img"><br><br>
						<button type="submit" class="btn" name="submit">Add Profile Details</button>
						</form>
					</div>
					
					
					
					
					<div class="rbox1">
					<h3> Profile</h3><br>
						<table border="3px">
							<tr><td colspan="2" style="text-align:center" ><img src="<?php echo $row["image"] ?>" height="180" width="150" alt="upload Pending"></td></tr>
							<tr><th>Name </th> <td><?php echo $row["t_name"] ?> </td></tr>
							<tr><th>Qualification </th> <td><?php echo $row["t_qualification"] ?>  </td></tr>
							<tr><th>Salary </th> <td> <?php echo $row["t_salary"]?>  </td></tr>
							<tr><th>Phone No </th> <td> <?php echo $row["ph_no"] ?> </td></tr>
							<tr><th>E - Mail </th> <td> <?php echo $row["email"] ?> </td></tr>
							<tr><th>Address </th> <td> <?php echo $row["address"] ?> </td></tr>
						</table>
					</div>
				</div>
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