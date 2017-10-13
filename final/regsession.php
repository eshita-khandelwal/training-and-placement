
<?php
require_once("connect.php");
session_start();
$user=$_SESSION['id'];
$sql="select mis from student where mis='$user'";
$result = $conn->query($sql);


 $row = $result->fetch_assoc();
 $login_session =$row['mis'];
 if(!isset($login_session))
 {
 	$conn->close();
 	//header('Location: studprof.php');
}
?>
