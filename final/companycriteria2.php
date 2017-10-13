
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
$sql1="SELECT cid from company where email='$email'";
$result1 = mysqli_query($conn, $sql1);
$row_result = mysqli_fetch_array($result1);
 $var=$row_result["cid"];
 echo $var;
if(isset($_POST['submit']))
{

	if($dateofvisit==("SELECT dateofvisit from company_criteria where name='$name'"))
	{
     echo'<script type="text/javascript">alert("please enter another date")</script>';
	}
	else
	{
 $sql="INSERT INTO company_criteria(cid,email,name,agg,active_backlog,passive_backlog,dateofvisit) 
 VALUES('$var','$email','$name','$agg','$active_backlog','$passive_backlog','$dateofvisit')";  

if ($conn->query($sql) === TRUE) 
{
    echo "Record updated successfully";
    header('location:newlogin.php');
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