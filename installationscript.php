<?php
	$host='localhost';
	$user='nikki';
	$pass='nikki';
	$db='danceacamey';
	$tbl_prefix='shruti_';

	$dbcon=mysqli_connect('localhost','nikki','nikki','danceacamey');
	/*if(! $dbcon ) 
	{
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully<br />';*/

	$usertablecreate=mysqli_query($dbcon,"create table user(uid int AUTO_INCREMENT PRIMARY KEY, name varchar(25), email varchar(25), role int, password varchar(20), cid int);");
	$inquiretablecreate=mysqli_query($dbcon,"create table inquire(iid int AUTO_INCREMENT PRIMARY KEY, name varchar(25), email varchar(100), dancetype varchar(25), class varchar(30), question varchar(40));");
	$danceteachertablecreate=mysqli_query($dbcon,"create table danceteacher(tid int AUTO_INCREMENT PRIMARY KEY, Tname varchar(25), dance varchar(25), classtime TIME, day DATE, uid int);");
	$dancetablecreate=mysqli_query($dbcon,"create table dance(did int AUTO_INCREMENT PRIMARY KEY, dform varchar(25), timing TIME, tid int);");
	$showstablecreate=mysqli_query($dbcon,"create table shows(sid int AUTO_INCREMENT PRIMARY KEY, sname varchar(25), dform varchar(25), date DATE, uid int);");
	$batchtablecreate=mysqli_query($dbcon,"create table batch(bid int AUTO_INCREMENT PRIMARY KEY, dform varchar(25), fromdate DATETIME, todate DATETIME, timing TIME, seats int, tid int);");
	$classregistrationtablecreate=mysqli_query($dbcon,"create table classregistration(cid int AUTO_INCREMENT PRIMARY KEY, name varchar(25), joindate DATETIME, classtiming TIME, dancetype varchar(25));");
	mysqli_close($dbcon);
?>

