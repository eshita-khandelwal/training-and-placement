<?php
require_once('connect.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$password=$_POST['password'];
$url=$_POST['url'];
$email=$_POST['email'];
$sql = "INSERT INTO company(name,email,password,url) VALUES('$name','$email','$password','$url')";

if ($conn->query($sql) === TRUE) 
{
     header('location:companycriteria.php');   
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<?php
ob_start();
   session_start();
//session_start();
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
         $sql="SELECT * from company where email='$eemail' and password='$ppassword'";
         if($result = $conn->query($sql))
         	{

                 if($result->num_rows > 0)
         {

            $row = $result->fetch_assoc();
            $_SESSION['login_user']=$eemail;
      header('Location: companyprof.php');
  }
}
else
{
	//<script type=> alert("sorry check your id and password")</script>
	echo"hey";
}
}



      ?>