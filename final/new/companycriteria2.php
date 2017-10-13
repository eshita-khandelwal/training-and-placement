
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
$name=$_POST['name'];
$email=$_POST['email'];
$agg=$_POST['agg'];
$active_backlog=$_POST['active_backlog'];
$passive_backlog=$_POST['passive_backlog'];
$dateofvisit=$_POST['dateofvisit'];
if(isset($_POST['submit']))
{

	if($dateofvisit==("SELECT dateofvisit from company_criteria where name='$name'"))
	{
     echo'<script type="text/javascript">alert("please enter another date")</script>';
	}
	else
	{
 $sql="INSERT INTO company_criteria(email,name,agg,active_backlog,passive_backlog,dateofvisit) VALUES('$email','$name','$agg','$active_backlog','$passive_backlog','$dateofvisit')";  

if ($conn->query($sql) === TRUE) 
{
    echo "Record updated successfully";
    header('location:comp.php');
} 
else
 {
    echo "Error updating record: " . $conn->error;
    //header('location:comp.php');
}
}
$conn->close();
}



?>