<html>
<body>
<form method="POST" enctype="multipart/form-data" action="try22.php">
<br>
MIS NO:
<input type="text" name="mis" required/>
<input type="file" name="image" >
<br><br>
<input type="submit" name="submit1" value="submit" /><br><br>
<input type="submit" name="submit2" value="display"/>
</form>
</body>
</html>
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
if(isset($_POST['submit'])&&isset($_POST['submit1']))
{
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$qry="UPDATE  student(image) VALUES('$image') where mis='$mis'";

if ($conn->query($qry) === TRUE) 
{
     echo"okay";  
} 
else 
{
    echo "Error: " . $qry . "<br>" . $conn->error;
}
$conn->close();
}

?>