
<html>
<head>
<title>STUDENTS FOR TECHNICAL</title>
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
    $id=$_GET["mis"];
    $sql2="UPDATE  selected_student SET status2=3 where mis='$id'";
    $result2=$conn->query($sql2);

}
$sql='SELECT * FROM selected_student,company where selected_student.status1=2 and company.cid=selected_student.cid and company.email=\''.$user.'\';' ;
$result = mysqli_query($conn, $sql);
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



while($row_select = mysqli_fetch_array($result))
{
echo '</tr>';

                                                    echo'<tbody';
                                                    echo'<tr>';
                                                   echo'<td>'.$row_select["mis"].'</td>';
                                                    echo'<td>'.$row_select['fname'].'</td>';
                                                    echo'<td>'.$row_select["lname"].'</td>';
                                                    echo'<td>'.$row_select["email"].'</td>';
                                                    echo'<td>'.$row_select["agg"].'</td>';

                                                    echo'<td><form action="studentsfortech.php?mis=';echo $row_select["mis"];echo'"';echo' method="post"><button type="submit" name="submit">Submit</button></form></td>';
                                                    
                                                    echo'</tr>';
}



echo'</tbody>';
echo'</table><br><br><br><br><BR><BR><BR><br><br><br>';    



echo '<a href="companyprof.php"><input type="submit" name="back" value="BACK"></a>';


mysqli_close($conn);




?>