 


 <?php
 require_once("session1.php");
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
//  //echo $select;
// $res_select = mysqli_query($conn, $select);
// //$row_select = mysqli_fetch_array($res_select);
// echo'<table class="table table-bordered" align="left">
//                                                     <thead>
//                                                       <tr>
//                                                         <th>mis ID</th>
//                                                         <th>Name</th>
//                                                         <th>surname</th>
//                                                         <th>Email</th>
//                                                         <th>Phone Number</th>
//                                                         <th>Address</th>
//                                                         <th>aggregate</th>
//                                                       </tr>
//                                                     </thead>
//                                                 ';
// while($row_select = mysqli_fetch_array($res_select))
// {
// //echo"NAME :".$row_select['fname']."";
// echo '</tr>';
                                           
//                                                     echo'<tbody';
//                                                     echo'<tr>';
//                                                    echo'<td>'.$row_select["mis"].'</td>';
//                                                     echo'<td>'.$row_select['fname'].'</td>';
                                                    // echo'<td>'.$row_select["lname"].'</td>';
                                                    // echo'<td>'.$row_select["email"].'</td>';
                                                    // echo'<td>'.$row_select["phone"].'</td>';
                                                    //  echo'<td>'.$row_select["address"].'</td>';
                                                    //  echo'<td>'.$row_select["agg"].'</td>';
//                                                     //echo'<td>'.$row["state"].'</td>';
//                                                     //echo'<td>'.$row["pin"].'</td>';
//                                                     //echo'<td>'.$row["br"].'</td>';
                                                    echo'</tr>';
//}
 echo'</tbody>';
                                             echo'</table>';
mysqli_close($conn);
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
	echo"<h1><marquee>  welcome              "    .    $row['name']   .   "</marquee></h1>";
	//echo"<center>";
	echo"<div class='col-md-14'>";
	//echo"<center>";
	echo"<label> Name:</label>    "  ;
	echo "".  $row['name'] . "";

	echo"<br><br><hr>";
	echo"<label> email id :</label>";
	echo"".$row['email']."";
	echo"<br><br><hr>";
	echo"<label> url:</label>";
	echo"".$row['url']."";
     echo"</div>";
     
	//echo"</center>";
    

//echo "welcome " . $row['fname'] .;
   
} 
while($row1=mysqli_fetch_array($result1))
{
	echo"<div class='col-md-14'>";
	//echo"<center>";
	echo"<label> DATE OF VISIT:</label>    "  ;
	echo "".  $row1['dateofvisit'] . "";

	echo"<br><br><hr>";
	echo"<label> AGGREGATE:</label>    "  ;
	echo "".  $row1['agg'] . "";

	echo"<br><br><hr>";
	echo'</div>';
}

?>
<a href="studentagg.php"><input type="submit" name="studappear" value="qualified students"></a><br>
<a href="studentsforapti.php"><input type="submit" name="studapti" value="qualifiedforapti"></a><br>
<a href="studentsfortech.php"><input type="submit" name="studapti" value="qualified for technical "></a><br>
<a href="studentsforinterview.php"><input type="submit" name="studtech"  value="qualified for interview"></a><br>
<a href="logout1.php"><input type="submit" name="logout" value="logout"/></a>
</body>
</html>
