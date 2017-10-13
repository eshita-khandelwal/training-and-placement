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


if(isset($_POST['submit']))
{	
	$mis=$_POST['mis'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$pin=$_POST['pin'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$gender=$_POST['gender'];
	$br=$_POST['br'];
	//$agg=$_POST['agg'];
	$sem1=$_POST['sem1'];
	$sem2=$_POST['sem2'];
	$sem3=$_POST['sem3'];
	$sem4=$_POST['sem4'];
	$sem5=$_POST['sem5'];
	$preference=$_POST['preference'];
	$skills=$_POST['skills'];
	$intrests=$_POST['intrests'];
	$ach=$_POST['ach'];
	$bday=$_POST['bday'];
	$tot=($sem1+$sem2+$sem3+$sem4+$sem5)/5;


$file=$_FILES['image']['tmp_name'];
 if(!isset($file))
 {
	echo "please insert an image.";
}
else
{
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_size=getimagesize($_FILES['image']['tmp_name']);
    if($image_size==false)
        echo "Thats not an image.";
    else
    {
    	//$querry="UPDATE student set image='$image' where mis='$var'";
    	$querry="UPDATE student set address='$address',
	
fname='$fname',
lname='$lname',

	pin='$pin',
	city='$city',
	state='$state',
	gender='$gender',
	br='$br',
	sem1='$sem1',		
	sem2='$sem2',
	sem3='$sem3',sem4='$sem4',sem5='$sem5',
	agg='$tot',
	intrests='$intrests',
	ach='$ach',
	bday='$bday',
	preference='$preference',
	skills='$skills',
	phone='$phone',image='$image' ,
		email='$email'	where mis='$mis'";


if ($conn->query($querry) === TRUE) 
{
    echo "Record updated successfully";
    header('location:newlogin.php');
} 
else
 {
    echo "Error updating record: " . $conn->error;
   // header('location:studreg.html');
}
    }
}
$sql_proc='CALL addgrade()';
$result_proc=$conn->query($sql_proc);
  

}

$conn->close();

?>