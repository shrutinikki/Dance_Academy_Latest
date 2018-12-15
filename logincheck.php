<?php
   include 'dbcredtionals.inc.php'; #has details of the host, user, password and database
   session_start();
   $dbconnect=mysqli_connect($host,$user,$pass,$db);
   $sql = "SELECT email FROM admin WHERE username = '".$_POST['email']."' and passcode = '".$_POST['pass']."';";
   $result = mysqli_query($dbconnect,$sql);   
   $count = mysqli_num_rows($result);
      
   // If result matched $myusername and $mypassword, table row must be 1 row
		
  if($count == 1) 
  {
      session_register("myusername");
      $_SESSION['login_user'] = $myusername;
         
      header("location: home.php");
   }
   else 
   {
      header("location: login.php")
   }
   mysqli_close($dbconnect);
?>