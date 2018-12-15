<?php
	include 'dbcredtionals.inc.php'; #has details of the host, user, password and database
	#database connection
	$dbconnect=mysqli_connect($host,$user,$pass,$db);
	#query for the inquery
	$inquery="INSERT INTO (name, email, dancetype, class, question) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['classes']."','".$_POST['questions']."');";		
	#Executing the userquery 
	mysqli_query($dbconnect,$inquery);
	#dbclose
	mysqli_close($dbconnect);
?>