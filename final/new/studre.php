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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO student(fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password= "";
    $dbname   ="tnp2";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['login']))
    {

    	$eemail=$_POST['eemail'];
         $ppassword=$_POST['ppassword'];
         $sql="SELECT *from student where email='$eemail' and password='$ppassword'";
         //$var_value=$_POST['$eemail'];
    
    if($result = $conn->query($sql))
         	{

                 if($result->num_rows > 0)
         {

            $row = $result->fetch_assoc();
            $_SESSION['login_user']=$eemail;
      header('Location:studprof.php');
  }
}
else
{
	//<script type=> alert("sorry check your id and password")</script>
	echo"hey";
}

}
?>
