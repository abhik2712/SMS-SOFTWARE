<?php
	include "conn.php";
	session_start();
	
	unset ($_SESSION["a_id"]);
	unset ($_SESSION["a_name"]);
	unset ($_SESSION["s_id"]);
	unset ($_SESSION["s_name"]);
	
	session_destroy();
	echo "<script>window.open('teacher_login.php','_self');</script>";
?>