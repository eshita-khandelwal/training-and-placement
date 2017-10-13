<?php
//image display hoga 
require_once('connect.php');
  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  
  $sql = "SELECT image FROM student WHERE email='$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  header("Content-type: image/jpeg");
  echo $row['image'];
?>