
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
  </head>

 </html>
 <?php

require_once('session.php');
$user = $_SESSION['login_user'];
$mis_id=$_SESSION['id'];

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


if(isset($_GET["cid"]))
{
  
if(isset($_POST["submit1"]))
{

  $id1=$_GET["cid"];
  $sql_insert="INSERT INTO apply(mis,cid) VALUES('$mis_id','$id1')";
  $conn->query($sql_insert);
}
$id=$_GET["cid"];
  $sql2="UPDATE  apply SET apply_status=1 where mis='$mis_id' and cid=$id";
  $result2=$conn->query($sql2);

}


// if(isset($_GET["cid"]))
// {
  

// $idcomp=$_GET["cid"];
// $sql_insert="INSERT INTO apply(mis,cid) VALUES('$mis_id','$idcomp')";
// 	if ($conn->query($sql) === TRUE) 
// {
//     echo "Record updated successfully";
// }
//   $sql2="UPDATE  apply SET apply_status=1 where mis='$mis_id' and cid=$idcomp";
//   $result2=$conn->query($sql2);

// }


$sql_apply='SELECT company_criteria.cid,company_criteria.name from company_criteria,student where student.agg>=company_criteria.agg and student.email=\''.$user.'\'' ;
$result = mysqli_query($conn, $sql_apply);

echo'<table class="table table-bordered" align="left">
                                                    <thead>
                                                      <tr>
                                                        
                                                        <th>cid</th>
                                                        <th>NAME</th>
                                                        <th>APPLY</th>
                                                      </tr>
                                                    </thead>
                                                ';
while($row=mysqli_fetch_array($result))
{
	
 echo'<tbody';
                                                    echo'<tr>';
                                                   echo'<td>'.$row["cid"].'</td>';
                                                   echo'<td>'.$row["name"].'</td>'; 
                                                   echo'<td><form action="studapply.php?cid=';echo $row["cid"];echo'"';echo' method="post"><button /type="submit" name="submit1">Submit</button></form></td>';
                                                    
                                                    echo'</tr>';

}
echo'</tbody>';
echo'</table><br><br><br><br><BR><BR><BR><br><br><br>';                             
echo '<a href="studprof.php"><input type="submit" name="back" value="BACK"></a>';
mysqli_close($conn);
?> 