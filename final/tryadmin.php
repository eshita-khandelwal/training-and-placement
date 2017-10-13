<html>
<head>
</head>
<body>
<form action="tryadmin.php"   method="POST">
<input type='text' name='mis' required/>
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
	echo"heyy";
	$mis=$_POST['mis'];
 $query = mysqli_query($conn,"SELECT * FROM student WHERE mis = '$mis'");
 $row = mysqli_fetch_array($query);

 
	//echo"<center>";
	echo"<div class='col-md-14'>";
	//echo"<center>";
	echo"<label> Name:</label>    "  ;
	echo "".  $row['fname'] . "";
	echo"                                    " .  $row['lname'] ."";
	echo"<br><br><hr>";
	echo"<label> contact number:</label>";
	echo"".$row['phone']."";
	echo"<br><br><hr>";
	echo"<label> email id :</label>";
	echo"".$row['email']."";
	echo"<br><br><hr>";
	echo"<label> branch:</label>";
	echo"".$row['br']."";
	echo"<br><br>";
	echo"<label> gender:</label>";
	echo"".$row['gender']."";
	echo"<br><br>";
	echo"<label> address:</label>";
	echo"".$row['address']."";
	echo"<br><br>";
	echo"<label> city:</label>";
	echo"".$row['city']."";
	echo"<br><br>";
	echo"<label> state:</label>";
	echo"".$row['state']."";
	echo"<br><br>";
	echo"<label> pin code:</label>";
	echo"".$row['pin']."";
	echo"<br><br>";
	echo"<label> bday date:</label>";
	echo"".$row['bday']."";
	echo"<br><br>";
	echo"<label> achievement:</label>";
	echo"".$row['ach']."";
	echo"<br><br>";
	echo"<label> preference:</label>";
	echo"".$row['preference']."";
	echo"<br><br>";
	echo"<label> skills:</label>";
	echo"".$row['skills']."";
	echo"<br><br>";
	echo"<label> intresets:</label>";
	echo"".$row['intrests']."";
	echo"</div>";


// 	//$conn = new mysqli('', 'username', 'password', 'database');
// $stmt = $conn->prepare("SELECT * FROM student WHERE mis = '$mis'");
//  $stmt->bind_param("s", $mis);
//  $stmt->execute();
//  $result = $stmt->get_result();
//  $row = $result->fetch_assoc();

//  print_r($row);
// 	$resource = $db->query("SELECT * FROM student WHERE mis='$mis'");
// $row = $resource->fetch_assoc();
// echo "{$row['field']}";
// $resource->free();
// $db->close();
	mysqli_close($conn);
}

?>