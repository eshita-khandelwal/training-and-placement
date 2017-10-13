<?php

    $servername = "localhost";
    $username = "root";
    $password= "";
    $dbname   ="tnp";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['email'];
    
    if($email!=""){
        if(validate($email)){
            $result = '<p class="result success"> Valid Email ID</p>';
        }
        else{
            $result = '<p class="result error"> Invalid Email ID</p>';
        }   
    }
    //function to validate email
    function validate($email){
        $pattern = '/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/';
        if(preg_match($pattern,$email)){
            return true;
        }
        else{
            return false;
        }   
    }
?>
<html>
    <head>
        <title>Assignment 3 - Part 2.1</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <style>
            .result{
                font-size: 20px;
            }
            .error{
                color: #D8000C;    
            }
            .success{
                color: #4F8A10;    
            }
        </style>
    </head>
    <body>
        <div class="container" style="margin-top:200px;">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Email ID Validation</h1>
                        </div>
                        <div class="panel-body text-center">                            
                            <form action="" class="form-vertical" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Enter Email ID</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" name="email" required/>
                                        </div>
                                    </div>                                    
                                </div>                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">   
                                     
                                        </div>
                                        <div class="col-sm-6">                                            
                                            <div class="col-sm-3">
                                                <input type="submit" name="validate" value="Validate" class="btn btn-success" />                 
                                            </div>                                                                              
                                            <input type="reset" name="reset" value="Reset" class="btn btn-danger" /> 
                                        </div>
                                    </div>                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>
</html>
      

<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password= "";
    $dbname   ="tnp";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
if(isset($_POST['validate']))
   {
         $eemail=$_POST['email'];
         //$ppassword=$_POST['ppassword'];
         $sql="SELECT * from admin where email='$email'";
         if($result = $conn->query($sql))
            {

                 if($result->num_rows > 0)
         {

            $row = $result->fetch_assoc();
            $_SESSION['id']=$email;
      header('Location: index.html');
  }
}
else
{
    //<script type=> alert("sorry check your id and password")</script>
    echo"hey";
}
}

?>