<html>
<body>
<form method="POST" enctype="multipart/form-data">
<br>
MIS NO:

<input type="file" name="image" >
<br><br>
<input type="submit" name="submit" value="upload" />
</form>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$pass= "";
$dbname = "tnp";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{
	$imagee=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$qry="INSERT INTO studentimage(image) values('$image')";
}
?>