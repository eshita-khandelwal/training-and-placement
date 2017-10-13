 

 <?php
 require_once("session.php");
 ?>
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
divl{
    padding: 25px;
    width: auto;
    border-radius: 5px;


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

div
{
	 padding-left: 60px;

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
///////////////////////////////////////////////////////







/////////////////////////////////////////////////////////////
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
     	//$_SESSION['id']=$row['mis']
     	$var=$user;
        //echo "id: " . $row["mis"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
        echo"<div class='header'>
<h1 style='color:white;text-align: center;''>Welcome       "      .    $row['fname']   .   " ! </h1><br>
</div><br><br><br>";
	//echo"<center>";

echo"<h4 style='text-align: right;''>
	<a href='logout1.php'><input type='submit' name='logout' value='Logout'/></a></h4><br>
		</div><br>";

        echo"<div1 class='container'>";
	echo"<div1 class='col-md-4'>";

	//echo"<center>";
	 echo "<fieldset> <legend><b>Student Details : </b> </legend></fieldset>";
	echo '<td><body><img class="img-thumbnail" src="getimage.php?id='.$var.'" height="100" width="200px" ></body></td>';
		echo"<hr>";

echo "<h3>";
	echo"<label> Name : </label>    "  ;
	echo "".  $row['fname'] . "";
	echo"                                    " .  $row['lname'] ."";
	echo"<hr>";



	echo"<label> DOB : </label>";
	echo"".$row['bday']."";
	echo"<hr>";

	echo"<label> Email : </label>";
	echo"".$row['email']."";
	echo"<hr>";

	echo"<label> Contact : </label>";
	echo"".$row['phone']."";
	echo"<hr>";

	echo"<label> Address : </label>";
	echo"".$row['address']."";
	echo"<hr>";
	echo "<label>Lives in : </label>".$row['city'].",".$row['state']."";
	echo"<hr>";

	
	echo"<label> Branch : </label>";
	echo"".$row['br']."";
	echo"<hr>";
	echo"<label> Gender : </label>";
	echo"".$row['gender']."";
	echo"<hr>";
	
	echo"<label> Aggregate : </label>";
	echo"".$row['agg']."";
	echo"<hr>";

	echo"<label> Grade : </label>";
	echo"".$row['grade']."";
	echo"<hr>";
	/*echo"<label> State : </label>";
	echo"".$row['state']."";
	echo"<hr>";*/
	echo"<label> Pin Code : </label>";
	echo"".$row['pin']."";
	echo"<hr>";
	
	echo"<label> Achievements : </label>";
	echo"".$row['ach']."";
	echo"<hr>";
	echo"<label> Preference : </label>";
	echo"".$row['preference']."";
	echo"<hr>";
	echo"<label> Skills : </label>";
	echo"".$row['skills']."";
	echo"<hr>";
	echo"<label> Interests : </label>";
	echo"".$row['intrests']."";

	$_SESSION['id']=$row["mis"];
echo "</h3>";

echo"</div1>";

	

	echo"<div1 class='col-md-8'>";
	echo"<h1> ELIGIBLE FOR COMPANIES</h1>";
	$var=$row["mis"];
$select = 'SELECT company_criteria.name FROM company_criteria,student WHERE student.agg >= company_criteria.agg  and student.email=\''.$user.'\';';
 //$select = 'SELECT student.fname FROM student,company_criteria WHERE student.agg >= company_criteria.agg';
$res_select = mysqli_query($conn, $select);

while($row_select = mysqli_fetch_array($res_select))
{
	echo "<h2>";
	echo "<ul>";
 echo"<li>NAME :".$row_select['name']."</li>";
  echo "</ul>";
  echo "</h2>";
}

//scehedule of companies
  echo"<h1>scehedule of companies you can apply for:</h1>";
  //$select1='SELECT company_criteria.dateofvisit,company_criteria.name from student,company_criteria where student.agg>= company_criteria.agg and student.email=\''.$user.'\';';
  $select1='SELECT company_criteria.dateofvisit,company_criteria.name from student,company_criteria where student.agg>= company_criteria.agg  and student.email=\''.$user.'\';';
   $res_select1=mysqli_query($conn,$select1);
	echo"<div1 class='col-md-8'>";

echo'<table class="table table-bordered" align="center">
                                                    <thead>
                                                      <tr>
                                                        
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        
                                                        
                                                        
                                                      </tr>
                                                    </thead>
                                                ';;

   while($row=mysqli_fetch_array($res_select1))
   {      
          //echo"".$row['dateofvisit'] ,$row['name']."<br>";
   	//echo"".$row['dateofvisit'] ,$row['name']."<br>";
echo "<tr>";
   	echo "<td>".$row['dateofvisit']."</td>";
   	echo "<td>".$row['name']."</td>";
   echo "</tr>";
}
echo "</table>";
     echo"</div>"; 

   echo"<br><br><br><br><br>";
   


     echo"</div>"; 
     $var=$row["mis"];
 }

 } 
 else {
   echo "0 results";
}
echo'
<a href="studapply.php"><input type="submit" name="stud" value="APPLY"></a><br><hr>';

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



$sql9 = "SELECT cid FROM selected_student WHERE selected_student.status2=3 and selected_student.email='$user'";
 $result9 = $conn->query($sql9);

if ($result9->num_rows > 0)
 {
//     // output data of each row
   $row9 = $result9->fetch_assoc();
   $compid=$row9["cid"];  
   //echo $compid;
       $sql10="Select name from company where cid=$compid";
       $result10 = $conn->query($sql10);
       $row10 = $result10->fetch_assoc();
       $compname=$row10["name"];
	echo"<divl class='col-md-14'>";
	//echo"<center>";
	echo"<label> YOU ARE PLACED IN:</label>    "  ;
	echo "<h1>";echo $compname;  echo "</h1>";

}



$sql_salary = 'SELECT salary FROM selected_student WHERE status2=3 and email= \''.$user.'\';';
 $result_salary = $conn->query($sql_salary);

if ($result_salary->num_rows > 0)
 {
//     // output data of each row
   $row_salary = $result_salary->fetch_assoc();

       
   
    //echo"<center>";
    echo"<label> company provides you with package:</label>    "  ;
    echo "<h1>".  $row_salary["salary"] . "</h1>";

}








$conn->close();
?>




</body>
</html>