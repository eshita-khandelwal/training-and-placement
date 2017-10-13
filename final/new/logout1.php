<?php 
	session_start();
	//header('location:comp.php');
	unset($_SESSION["email"]);
   unset($_SESSION["password"]);
	session_destroy();
    //unset($_SESSION["email"]);
   //unset($_SESSION["password"]);
   
   echo '<script>alert("you have successfully logged out")</script>';
   header('Refresh: 2; URL = newlogin.php');
	//header('location:comp.php');
?>
