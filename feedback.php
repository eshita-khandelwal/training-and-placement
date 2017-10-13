
<!DOCTYPE html>
<html>
<head>
<title>feedback</title>
<style>
.header
{
   background-color: #2d3d5a;
    padding: 20px;
    text-align: center;
}
.center {
    margin: auto;
    width: 60%;
    border: 25px #2d3d5a;
    padding: 25px;
    background-color: lightgrey;
}
input[type=submit]
{
	width:200px;
	height:50px;
	background-color: #2d3d5a;
	
	color:white;
}
</style>
</head>
<body>
<div class="header"><br><br><br><br><br><br>
<h1 style="color:white">FEEDBACK FORM</h1><br>
</div><br><br><br><br><br><br>
<div class="center">
<center>
<form action="thankyou.php" method="POST">
<p>Your feedback about PICT website below (http://www.pict.edu) will help us to serve all the stakeholders in a better way. Your comment(s)/suggestion(s)/appreciation(s) are always valuable to us. Thank you.</p><br><br><br>
<label for="fname"> FIRST NAME </label>
<input type="text" placeholder="first name.." name="fname" required/><br><br><br>
<label for="lname"> LAST NAME</label>
<input type="text" placeholder="last name.." name="lname" required/><br><br><br>
<label for="email">EMAIL ID</label>
<input type="email" placeholder="anushree@gmail.com"  name="email" required/><br><br><br>
<label for="feed">COMMENTS</label>
<input type="text"   name="comment"   placeholder="your answer.." style="width:1000px  height:400px" required /><br><br><br>
<input type="submit" name="submit" value="submit" />
</form>
</center>
</div>
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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$sql= "INSERT INTO feedback(fname,lname,email,comment) VALUES('$fname','$lname','$email','$comment')";

if($conn->query($sql) === TRUE) 
{
     echo"successful";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>