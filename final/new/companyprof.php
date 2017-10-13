 


 <?php
 require_once("session1.php");
 ?>

<html>
<head>
<title>COMPANY PROFILE</title>
</head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/linkibs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  .profile
{
	background-color: #f8f8f8;
	width:900px;
	height:600px;
	align-self: center;
   text-align: left;
   padding-left: 60px;
   padding-top: 40px;

}

div {
    border-radius: 5px;
    background-color: #2d3d5a;
    width: auto;
    padding: 25px;
}


h1 {
	font-family: 'Raleway', Helvetica, Arial, sans-serif;
	font-size: 56px;
	line-height: 80px;
	color: grey;
    text-shadow: 2px 2px 4px #000000;
}

input[type=submit]
{
	width:200px;
	height:50px;
	background-color: #2d3d5a;
	color: white;
}

input[type=submit]:focus
{
	width:200px;
	height:50px;
	border:none;
	background-color:#2d3d5a;
	border:solid steelblue;
	color:steelblue;
}
input[type=submit]:hover
{
	opacity: 0.8;
}



</style>





 <?php


$user = $_SESSION['login_user'];

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

//$_SESSION['iid']=$id;
//echo "$user";
//$var_value=$_GET['$eemail'];
// $sql = "SELECT mis, fname, lname FROM student where email='$var_value'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0)
//  {
//     // output data of each row
//     while($row = $result->fetch_assoc())
//      {
//         echo "id: " . $row["mis"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
//$sql = "SELECT mis, fname, lname FROM student where email='$user'";
// $select = 'SELECT student.mis,student.fname,student.lname,student.br,student.email,student.phone,student.address,student.agg FROM student,company_criteria WHERE student.agg >= company_criteria.agg and company_criteria.email=\''.$user.'\';';
 $result = mysqli_query($conn,"SELECT * FROM company where email='$user'");
 $result1=mysqli_query($conn,"SELECT *FROM company_criteria where email='$user'");
 $sql_acccess='SELECT caccess from company where email=\''.$user.'\';';
 $result_access = $conn->query($sql_acccess);
 $row_access=$result_access->fetch_assoc();
 $var=$row_access["caccess"];
               echo'</tr>';
 echo'</tbody>';
                                             echo'</table>';

?> 
<html>
<head>
<title>COMPANY PROFILE</title>
</head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/linkibs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.profile
{
	background-color: #ecf0f1;
	width:900px;
	height:600px;
	align-self: center;
   text-align: left;
   padding-left: 60px;
   padding-top: 40px;

}
div
{
	 padding-left: 60px;

}
</style>
<body>
<?php 
 while($row = mysqli_fetch_array($result))
{
	echo"<div class='header'>
		<h1 style='color:white;text-align: center;''>Welcome       "      .    $row['name']   .   " ! </h1><br>
		</div><br><br><br>";



echo"<h4 style='text-align: right;''>
	<a href='logout1.php'><input type='submit' name='logout' value='Logout'/></a></h4><br>
		</div><br>";


		echo"<div1 class='col-md-6'>";
	//echo"<center>";
	echo"<label> Name:</label>    "  ;
	echo "".  $row['name'] . "";

	echo"<br><br><hr>";
	echo"<label> email id :</label>";
	echo"".$row['email']."";
	echo"<br><br><hr>";
	echo"<label> url:</label>";
	echo"".$row['url']."";
     echo"</div1>";
     echo"<br><br><hr>";
}

     
	//echo"</center>";
    

//echo "welcome " . $row['fname'] .;
   
while($row1=mysqli_fetch_array($result1))
{
	echo"<label> DATE OF VISIT:</label>    "  ;
	echo "".  $row1['dateofvisit'] . "";

	echo"<br><br><hr>";
	echo"<label> AGGREGATE:</label>    "  ;
	echo "".  $row1['agg'] . "";

$_SESSION['id']=$row1['cid'];
	
	echo"<br><br><hr>";
	echo"</div1>";
}
    
    if($var==1)
    {
echo "<center>";
echo'

<a href="studentagg.php"><input type="submit" name="studappear" value="View Qualified Students"></a><br><hr>
<a href="studentsforapti.php"><input type="submit" name="studapti" value="ROUND : 1"></a>
<a href="studentsfortech.php"><input type="submit" name="studapti" value="ROUND : 2 "></a>
<a href="studentsforinterview.php"><input type="submit" name="studtech"  value="Round : 3"></a><br><hr>

<a href="studentsalary.php"><input type="submit" name="salary" value="salary"></a><br><hr>

';
echo "</center>";
}
else
{
	echo'<script>alert("cannot access")</script>';
}
mysqli_close($conn);
?>


</body>
</html>
