<!-- <?php
ini_set('mysql.connection_timeout',300);
ini_set('default_socket_timeout',300);

?>
<html>
<body>
<form method="POST" enctype="multipart/form-data">
<br>
MIS NO:
<input type="text" name=mis />
<input type="file" name="image" >
<br><br>
<input type="submit" name="submit" value="upload" />
</form>
<?php
if(isset($_POST['submit']))
{
	if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
	{
		echo"please insert an image";
	}
	else
	{
		$mis=$_POST['mis'];
		 $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
		 $name=addslashes($_FILES['image']['name']);
		 $image=file_get_contents($image);
		 $image=base64_encode($image);
		 saveimage($name,$image);
	}
}
function saveimage($name,$image)
{

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
$qry="UPDATE student SET
image='$image'
where mis='$mis'";
$result=mysqli_query($qry,$conn);
if($result)
{
	echo"image uploaded";
}
else
{
	echo"image not  uploaded";
}
}
?>
</body>
</html>
 -->

<!DOCTYPE html>
<html>
<body>

<form action="studimage.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tnp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{ 
$fileToUpload=$_POST['fileToUpload'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES['$fileToUpload']["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else 
{
	 move_uploaded_file($file_tmp,"upload/".$fileToUpload);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
     {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $qry="INSERT INTO studentimage(image) values('$fileToUpload')";
$result=mysqli_query($conn,$qry);
if($result)
{
	echo"image uploaded in database";
}
else
{
	echo"image not  uploaded in database ";
}

    } 
    else
     {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
