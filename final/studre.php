<?php

$servername = "localhost";
$username = "root";
$pass= "";
$dbname = "tnp2";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 if(isset($_POST['signup']))
{
//$fname=$_POST['fname'];
//$lname=$_POST['lname'];
//$email=$_POST['email'];
$mis=$_POST['mis'];
$password=$_POST['ppassword'];

$sql="INSERT INTO student(mis,password) VALUES('$mis','$password')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('location:studdre.php');
} else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

