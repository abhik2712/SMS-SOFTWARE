<?php
function OpenCon()
 {
 $dbhost = "localhost:3307";
 $dbuser = "root";
 $dbpass = "";
 $db = "school_system";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
 $a = OpenCon();
 if (!$a)
 {
     echo "connection failed";
 }
   
?>
