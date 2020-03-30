<?php
	include"database.php";
	session_start();
	
	$s="delete from subject where SID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('subject.php?mes=Data Deleted.','_self');</script>"
?>
