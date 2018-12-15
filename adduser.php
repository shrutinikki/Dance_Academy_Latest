<?php
	include 'dbcredtionals.inc.php'; #has details of the host, user, password and database
	#database connection
	$dbconnect=mysqli_connect($host,$user,$pass,$db);
	$name=$_POST["uname"];
	$joindate=$_POST["jdate"];
	$classtime=$_POST["classtime"];
	$dancetype=$_POST["dancetype"];
	$email=$_POST["email"];
	$password=$_POST["pass"];
	$role=$_POST["role"];
	#inserting into class registration table 
	$crquery="INSERT INTO classregistration(name, joindate, classtiming, dancetype) VALUES('".$name."','".$joindate."','".$classtime."','".$dancetype."');";		
	#Executing the userquery 
	mysqli_query($dbconnect,$crquery);
	/*if statement for checking the type of role
	role 20=> admin, 22=> teacher, 24=> generic
	*/
	if ($role=='student') 
	{
		# inserting where role is generic user
		$userquery1="INSERT INTO user(name, email, role, password) VALUES('".$name."','".$email."',24,'".$password."');";		
		#Executing the userquery1 
		mysqli_query($dbconnect,$userquery1);
	}
	elseif ($role=='teacher') 
	{
		# inserting where role is teacher user
		$userquery1="INSERT INTO user(name, email, role, password) VALUES('".$name."','".$email."',22,'".$password."');";
		$teacherquery="INSERT INTO danceteacher(Tname, dance, classtime, day) VALUES('".$name."','".$dancetype"','".$classtime."','".$joindate."');";
		#Executing the queries
		mysqli_query($dbconnect,$userquery1);
		mysqli_query($dbconnect,$teacherquery);
	}
	#closing the query 
	mysqli_close($dbconnect);
	header("Location:login.php");
?>