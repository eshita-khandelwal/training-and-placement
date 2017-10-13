 

 <?php
 require_once("session.php");
 ?>
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
//echo "$user";
//$var_value=$_GET['$eemail'];
$sql = "SELECT * FROM student where email='$user'";
 $result = $conn->query($sql);

// $select = 'SELECT company_criteria.name FROM company_criteria,student WHERE student.agg >= company_criteria.agg and student.email=\''.$user.'\';';
//  //$select = 'SELECT student.fname FROM student,company_criteria WHERE student.agg >= company_criteria.agg';
// $res_select = mysqli_query($conn, $select);

// while($row_select = mysqli_fetch_array($res_select))
// {

//  echo"NAME :".$row_select['name']."";
//   }



if ($result->num_rows > 0)
 {
//     // output data of each row
   while($row = $result->fetch_assoc())
     {
        //echo "id: " . $row["mis"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
        echo"<h1><marquee>  welcome              "    .    $row['fname']   .   "</marquee></h1>";
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
	echo"<label> aggregate:</label>";
	echo"".$row['agg']."";
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
	echo"<h1> ELIGIBLE FOR COMPANIES<h1>";
$select = 'SELECT company_criteria.name FROM company_criteria,student WHERE student.agg >= company_criteria.agg and student.email=\''.$user.'\';';
 //$select = 'SELECT student.fname FROM student,company_criteria WHERE student.agg >= company_criteria.agg';
$res_select = mysqli_query($conn, $select);

while($row_select = mysqli_fetch_array($res_select))
{
	
 echo"NAME :".$row_select['name']."";
  }

//scehedule of companies
  echo"<h2>scehedule of companies:<h2>";
  $select1='SELECT company_criteria.dateofvisit,company_criteria.name from company_criteria,student where student.agg>=company_criteria.agg and student.email=\''.$user.'\';';
   $res_select1=mysqli_query($conn,$select1);
   while($row_select1=mysqli_fetch_array($res_select1))
   {      
          echo"".$row_select1['dateofvisit'],$row_select1['name']."<br>";
   }


     echo"</div>";  
      }
 } 
 else {
   echo "0 results";
}
$conn->close();
?> 
<html>
<head>
<title>STUDENT PROFILE</title>
</head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
//echo "$user";
//$var_value=$_GET['$eemail'];
$sql = "SELECT company_criteria.name FROM company_criteria, selected_student WHERE selected_student.cid=company_criteria.cid and selected_student.status2=3 ";
 $result = $conn->query($sql);

if ($result->num_rows > 0)
 {
//     // output data of each row
   while($row = $result->fetch_assoc())
     {
       
	echo"<div class='col-md-14'>";
	//echo"<center>";
	echo"<label> YOU ARE PLACED IN:</label>    "  ;
	echo "<h1>".  $row['name'] . "</h1>";
	}

}
$conn->close();

?>

<button type="submit" value="submit" name="logout"><a href="logout.php"></a>
</button>
<a href="logout.php"><input type="submit" name="logout" value="logout"/></a>
</body>
</html>