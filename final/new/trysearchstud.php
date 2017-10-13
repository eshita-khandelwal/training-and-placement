
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Title -->
    <title>PLACEMENT STATUS OF STUDENTS :</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="body-bg">
        <ul class="social-icons pull-right hidden-xs">

            <li class="social-twitter">
                <a href="#" target="_blank" title="Twitter"></a>
            </li>
            <li class="social-facebook">
                <a href="#" target="_blank" title="Facebook"></a>
            </li>
            <li class="social-googleplus">
                <a href="#" target="_blank" title="GooglePlus"></a>
            </li>
        </ul>
        <div id="pre-header" class="container" style="height: 40px">
            <!-- Spacing above header -->
        </div>
        <div id="header">
            <div class="container">
                <div class="row">
                   
                </div>
            </div>
        </div>
        <div id="hornav" class="container no-padding">
            <div class="row">
                <div class="col-md-12 no-padding">
                    <div class="text-center visible-lg">
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="post_header" class="container" style="height: 40px">
            <!-- Spacing below header -->
        </div>
        <div id="content-top-border" class="container">
        </div>
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="content">
            <div class="container background-white">
                <div class="container">
                    <div class="row margin-vert-30">
                        <div class="article">
                            <div class="container">
                               <style>
                                   table{
                                       background-color: #dce4e6;
                                   }
                                </style>
                                <div class="container text-center">
                                   
                                    <br>
                                   
                                    <?php
                                        require('connect.php');
                                        
                                        
                                             
                                        if(isset($_GET["email"]))
{
    $id=$_GET["email"];
    //echo $id;
    $sql2="SELECT company.cid,company.name,selected_student.salary from company,selected_student where selected_student.status2=3 and selected_student.email='$id' and company.cid=selected_student.cid";
    // $sql_salary='SELECT salary from selected student where selected_student.email="$id"';
    // $result_salary=mysqli_query($conn,$sql_salary);
    // $row_salary=mysqli_fetch_assoc($result_salary);
//$result2 = mysqli_query($conn, $sql2);
$result2 = mysqli_query($conn, $sql2);


}
echo"<h1>STUDENTS THAT ARE PLACED<h1>";
 echo ("<table class=' table table-bordered' align='left'>
     <thead>
                                                        <tr>
                                                        <th>cid </th>
                                                        <th>name</th>
                                                        <th>salary</th>
                                                        
                                                        </tr>
                                                         <thead>
                                                    
                                                    ");
 
 
while($row = mysqli_fetch_array($result2))
{
 echo "<tr>";
                                                    echo "<td>".$row['cid']."</td>";
                                                    echo "<td>".$row['name']."</td>";
                                                    echo'<td>'.$row['salary'].'</td>';
                                                    
                                                    echo "</tr>"; 

}                       
   echo"</table>";                                 
                                        ?>


                                
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                  
</body>
<br><br><br><br><a href="adminprof.php"><input type="submit" value="back" name="back"></a>
</html>
