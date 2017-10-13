
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Title -->
    <title>ACCESS GIVEN TO THE COMPANIES:</title>
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
                                        
                                        
                                             
                                        //if(isset($_GET["email"]))
//{
   // $id=$_GET["email"];
    $sql2='SELECT * FROM selected_student where status2=3 and  mis LIKE "I%"';
//$result3 = mysqli_query($conn, $sql2);
    $result2 = $conn->query($sql2);

    $sql4='SELECT count(*) as total from selected_student where status2=3 and  mis LIKE "I%"';
    $result4=mysqli_query($conn, $sql4);
    $row4=mysqli_fetch_assoc($result4);
    echo "" .$row4['total']."";
//}
echo"STUDENTS OF IT THAT ARE PLACED";
 echo ("<table class=' table table-bordered' align='left'>
                                                        <tr>
                                                        <th>cid </th>
                                                        <th>mis</th>
                                                        <th>first name</th>
                                                        <th>last name</th>
                                                        <th>Email</th>
                                                        
                                                        </tr>
                                                    
                                                    ");
 if ($result2->num_rows > 0)
 {
        while($row = $result2->fetch_assoc())
 
{
 echo "<tr>";
                                                    echo "<td>".$row['cid']."</td>";
                                                    echo "<td>".$row['mis']."</td>";
                                                    echo "<td>".$row['fname']."</td>";
                                                    echo "<td>".$row['lname']."</td>";
                                                    echo "<td>".$row['email']."</td>";
                                                    
                                                    echo "</tr>"; 

}  
}                     
   echo"</table>"; 
   echo"<br><br><br>"; 
   $sql3='SELECT * FROM selected_student where status2=3 and  mis LIKE "C%"';
//$result3 = mysqli_query($conn, $sql2);
    $result3 = $conn->query($sql3);
    $sql5='SELECT count(*) as total from selected_student where status2=3 and  mis LIKE "C%"';
    $result5=mysqli_query($conn, $sql5);
    $row5=mysqli_fetch_assoc($result5);
    echo $row5['total'];

//}
echo"STUDENTS OF COMPUTER SCIENCE THAT ARE PLACED";
 echo ("<table class=' table table-bordered' align='left'>
                                                        <tr>
                                                        <th>cid </th>
                                                        <th>mis</th>
                                                        <th>first name</th>
                                                        <th>last name</th>
                                                        <th>Email</th>
                                                        
                                                        </tr>
                                                    
                                                    ");
 if ($result3->num_rows > 0)
 {
        while($row3= $result3->fetch_assoc())
 
{

                                                  echo "<tr>";                                    

                                                    echo "<td>".$row3['cid']."</td>";
                                                    echo "<td>".$row3['mis']."</td>";
                                                    echo "<td>".$row3['fname']."</td>";
                                                    echo "<td>".$row3['lname']."</td>";
                                                    echo "<td>".$row3['email']."</td>";
                                                    
                                                    echo "</tr>"; 
                                                    

} 

}                     
   echo"</table>"; 
   

   //echo"total students that are placed :$var"; 
   echo"<br><br><br>"; 
   $sql6='SELECT count(*) as total from selected_student where status2=3 and  mis LIKE "E%"';
    $result6=mysqli_query($conn, $sql6);
    $row6=mysqli_fetch_assoc($result6);
    echo $row6['total'];
     $sql4='SELECT * FROM selected_student where status2=3 and  mis LIKE "E%"';
//$result3 = mysqli_query($conn, $sql2);
    $result4 = $conn->query($sql4);

//}
echo"STUDENTS OF ENTC THAT ARE PLACED";
 echo ("<table class=' table table-bordered' align='left'>
                                                        <tr>
                                                        <th>cid </th>
                                                        <th>mis</th>
                                                        <th>first name</th>
                                                        <th>last name</th>
                                                        <th>Email</th>
                                                        
                                                        </tr>
                                                    
                                                    ");
 if ($result4->num_rows > 0)
 {
        while($row4= $result4->fetch_assoc())
 
{
 echo "<tr>";
                                                    echo "<td>".$row4['cid']."</td>";
                                                    echo "<td>".$row4['mis']."</td>";
                                                    echo "<td>".$row4['fname']."</td>";
                                                    echo "<td>".$row4['lname']."</td>";
                                                    echo "<td>".$row4['email']."</td>";
                                                    
                                                    echo "</tr>"; 

}  
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

        <?php 
$query = "SELECT br as name, count(*) as number from student where status=1 group by br";  
 $result = mysqli_query($conn, $query);

         ?>   
<h2> Percentage of students Placed</h2>
           <div style="width:900px;">    
                <div id="piechart" style="width: 900px; height: 500px;"></div> 
           </div> 
<div id="curve_chart" style="width: 900px; height: 500px"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Plan', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["name"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      //title: 'Percentage of Plans Selected by Users',  
                      is3D:true,  
                      pieHole: 0.0  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>

</body>
<a href="adminprof.php"><input type="submit" value="back" name="back"></a>  
</html>
