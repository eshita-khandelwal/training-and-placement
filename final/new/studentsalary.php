<html>
<head>
<title>STUDENT SALARY</title>
</head>
<body>
<form action="studentsalary.php" method="POST">
<input type="text" name="salary" required >
<input type="submit" name="submit1" value="submit">
</form>
</body>
</html>
<?php

require_once('session1.php');
$user = $_SESSION['login_user'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tnp2";

 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit1']))
 {
  $salary=$_POST['salary'];
echo " so the salary package provided to student is  $salary";
 // if($salary==5)
 //  {
 //      $sal='UPDATE selected_student set salary=$salary where status2=3';
 //      $resultsal=$conn->query($sal); 
 //  }
 //  else if($salary==6)
 // {
 //     $sal='UPDATE selected_student set salary=$salary  where status2=3';
 //     $resultsal=$conn->query($sal); 
 // }
 //  else if($salary==10)
 //  {
 //      $sal='UPDATE selected_student set salary=$salary where status2=3';
 //      $resultsal=$conn->query($sal); 
 // }
 //  else if($salary==18)
 //  {
 //      $sal='UPDATE selected_student set salary=$salary where status2=3';
 //      $resultsal=$conn->query($sal); 
 //  }
$var=$_SESSION['id'];
$sal="UPDATE selected_student set salary=$salary where status2=3 and cid='$var'";
       
        if ($conn->query($sal) === TRUE) {
     //echo "Record updated successfully";
 } 
 else {
    echo "Error updating record: " . $conn->error;
} 
$sal='UPDATE company set cstatus=1 where email=\''.$user.'\';';
       
        if ($conn->query($sal) === TRUE) {
     //echo "Record updated successfully";
 } 
 else {
    echo "Error updating record: " . $conn->error;
} 


 }
 echo '<a href="companyprof.php"><input type="submit" name="back" value="BACK"></a>';
        mysqli_close($conn);
?>