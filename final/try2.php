<html>
<body>
<form method="POST" enctype="multipart/form-data">
<br>
MIS NO:
<input type="text" name="mis" required/ >
<input type="file" name="image" >
<br><br>
<input type="submit" name="submit" value="upload" /><br><br>
<input type="submit" name="submit2" value="display"/>
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
//$mis=$_POST['mis'];
if(isset($_POST['submit']))
{
	$mis=$_POST['mis'];
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$qry="INSERT INTO studentimage(image,mis) VALUES('$image','$mis')";

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
<?php
$query="SELECT *FROM studentimage ORDER BY mis";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
	echo"<img src=''" . $rows['image'] . "/>"
}
?>