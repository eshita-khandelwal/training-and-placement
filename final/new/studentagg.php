<html>
<head>
<title>ELIGIBLE STUDENTS</title>
</head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

 </html>
 
 <?php

require_once('session1.php');
$user = $_SESSION['login_user'];
$cmid=$_SESSION['id'];
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

if(isset($_GET["mis"]))
{
  
if(isset($_POST["submit1"]))
{

  $id1=$_GET["mis"];
  $sql_insert="INSERT INTO selected_student(cid,mis,fname,lname,email,agg) select cid,mis,fname,lname,email,agg from student where student.mis='$id1'";
  $conn->query($sql_insert);
}
$id=$_GET["mis"];
  $sql2="UPDATE  selected_student SET status=1 where mis='$id' and cid=$cmid";
  $result2=$conn->query($sql2);

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////
// $select = 'SELECT student.mis,student.fname,student.lname,student.email,student.agg FROM student,company_criteria WHERE student.agg >= company_criteria.agg and student.status=0 and company_criteria.email=\''.$user.'\';';
//  //$result = mysqli_query($conn,"SELECT * FROM company where email='$user'");
//  //$result1=mysqli_query($conn,"SELECT *FROM company_criteria where email='$user'");
//  //echo $select;
// $cid='SELECT cid from company_criteria where company_criteria.email=\''.$user.'\'';
// //$res_select = mysqli_query($conn, $select);
// $res_selectid = mysqli_query($conn,$cid);
// $row_selectcid=mysqli_fetch_array($res_selectid);
// $res_select = mysqli_query($conn, $select);
///////////////////////////////////////////////////////////////////////////////////////////////

$sql_apply="SELECT apply.mis,apply.cid from apply,company where apply.apply_status=1 and company.cid=$cmid";
$result = mysqli_query($conn, $sql_apply);
$row_apply = mysqli_fetch_array($result);

$select = "SELECT student.mis,student.fname,student.lname,student.email,student.agg FROM student,apply WHERE student.mis=apply.mis and student.status=0  and apply.cid=$cmid";

$cid='SELECT cid from company_criteria where company_criteria.email=\''.$user.'\'';
//$res_select = mysqli_query($conn, $select);
$res_selectid = mysqli_query($conn,$cid);
$row_selectcid=mysqli_fetch_array($res_selectid);
$res_select = mysqli_query($conn, $select);
echo'<table class="table table-bordered" align="left">
                                                    <thead>
                                                      <tr>
                                                        <th>mis ID</th>
                                                        <th>Name</th>
                                                        <th>surname</th>
                                                        <th>Email</th>
                                                        <th>aggregate</th>
                                                        <th>SELECT STUDENTS</th>
                                                      </tr>
                                                    </thead>
                                                ';

while($row_select = mysqli_fetch_array($res_select))
{

	$sql='INSERT INTO selected_student(cid,mis,fname,lname,email,agg) values('.$row_selectcid["cid"].',\''.$row_select["mis"].'\',\''.$row_select["fname"].'\',\''.$row_select["lname"].'\',\''.$row_select["email"].'\','.$row_select["agg"].')';
 if ($conn->query($sql) === TRUE) 
{
    echo "Record updated successfully";
} 
//echo"NAME :".$row_select['fname']."";
echo '</tr>';
                                           
                                                    echo'<tbody';
                                                    echo'<tr>';
                                                   echo'<td>'.$row_select["mis"].'</td>';
                                                    echo'<td>'.$row_select['fname'].'</td>';
                                                    echo'<td>'.$row_select["lname"].'</td>';
                                                    echo'<td>'.$row_select["email"].'</td>';
                                                    echo'<td>'.$row_select["agg"].'</td>';

                                                    echo'<td><form action="studentagg.php?mis=';echo $row_select["mis"];echo'"';echo' method="post"><button /type="submit" name="submit1">Submit</button></form></td>';
                                                    
                                                    echo'</tr>';
}



echo'</tbody>';
echo'</table><br><br><br><br><BR><BR><BR><br><br><br>';                             
//mysqli_close($conn);

//$sql="SELECT * FROM selected_student where status=1";

//$result=$conn->query($sql); 

//$sql2="INSERT INTO selected_student_aptitude(cid,mis,fname,lname,email,agg,status) SELECT * FROM selected_student WHERE status= 1";
//if ($conn->query($sql2) === TRUE) {
  //  echo "New record created successfully";
//} else {
  //  echo "Error: " . $sql2 . "<br>" . $conn->error;
//}
 
echo '<a href="companyprof.php"><input type="submit" name="back" value="BACK"></a>';

mysqli_close($conn);
?> 