<?php
	include "conn.php";
	session_start();
	$s="delete from hclass where HID={$_GET["id"]}";
	$a->query($s);
	echo "<script>window.open('handle_class.php?mes=Data Deleted..','_self');</script>";


?>