
<?php
require_once("connect.php");
session_start();
$user=$_SESSION['login_user'];
$sql="select email from student where email='$user'";
$result = $conn->query($sql);


 $row = $result->fetch_assoc();
 $login_session =$row['email'];
 if(!isset($login_session))
 {
 	$conn->close();
 	header('Location: studprof.php');
}
?>
