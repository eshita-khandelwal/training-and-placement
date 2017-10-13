<?php 
	session_start();
    unset($_SESSION["email"]);
   unset($_SESSION["password"]);
	session_destroy();
    //unset($_SESSION["email"]);
   //unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = newlogin.php');
?>
