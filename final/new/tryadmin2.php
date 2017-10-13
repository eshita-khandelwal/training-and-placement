<html>
<head>
</head>
<body>
<form action="tryadmin2.php"   method="POST">
<input type="text" name="name" required/>
<input type='submit' value='submit' name='submit'>
</form>
</body>
</html>


<?php
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
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
 $query = mysqli_query($conn,"SELECT * FROM company WHERE name = '$name'");
 $row = mysqli_fetch_array($query);
 echo"<div class='col-md-14'>";
 echo"<label> Name:</label>    "  ;
	echo "".  $row['name'] . "";
	echo"<br><br><hr>";
	echo"<label> email id :</label>";
	echo"".$row['email']."";
	echo"<br><br><hr>";
	echo"</div>";
	mysqli_close($conn);

}
?>