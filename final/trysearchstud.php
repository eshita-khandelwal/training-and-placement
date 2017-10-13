<head>
    <!-- Title -->
    <title></title>
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
    <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <!-- Isotope - Portfolio Sorting -->
    <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
    <!-- Mobile Menu - Slicknav -->
    <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
    <!-- Animate on Scroll-->
    <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
    <!-- Sticky Div -->
    <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
    <!-- Slimbox2-->
    <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
    <!-- Modernizr -->
    <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
    <!-- End JS -->

</head>

<body>
<div id="body-bg">
       
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


                                    <br>
                                    <br>
                                    <br>
                                    <?php
                                        require('connect.php');
                                        
                                        
                                             
                                        if(isset($_GET["email"]))
{
    $id=$_GET["email"];
    //echo $id;
    $sql2="SELECT company.cid,company.name from company,selected_student where selected_student.status2=3 and selected_student.email='$id' and company.cid=selected_student.cid";
//$result2 = mysqli_query($conn, $sql2);
$result2 = mysqli_query($conn, $sql2);
}
echo"<h1>STUDENTS THAT ARE PLACED<h1>";
 echo ("<table class=' table table-bordered' align='left'>
                                                        <tr>
                                                        <th>cid </th>
                                                        <th>name</th>
                                                        
                                                        
                                                        </tr>
                                                    
                                                    ");
while($row = mysqli_fetch_array($result2))
{
 echo "<tr>";
                                                    echo "<td>".$row['cid']."</td>";
                                                    echo "<td>".$row['name']."</td>";
                                                    
                                                    
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

</html>
