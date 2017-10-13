<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel ="stylesheet" href="css/style.css">

  
</head>

<body>
<div class="form">
 <div id="login">   
          <h1>Login</h1>
          
          <form action="newlogin.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Login <span class="req">*</span>
            </label>

  
            <input type="email" name="eemail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="ppassword" required autocomplete="off"/>
          </div>

 <select name="logtype">
  <option value="\">LOGIN</option>
  <option value="1">STUDENT</option>
  <option value="2">ADMIN</option>
  <option value="3">COMPANY</option>
</select> 
 

          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" name="login" class="button button-block" value=" log in "/>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
<a href="http://localhost/tnp2mod/"><input type="submit" value="HOME"  name="back" style="width:80px ; margin-left:50px;  height:50px; background-color: blue;"></a>
</body>
</html>
<?php

ob_start();
   session_start();

    $servername = "localhost";
    $username = "root";
    $password= "";
    $dbname   ="tnp2";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error)
     {
        die("Connection failed: " . $conn->connect_error);
    }




    if(isset($_POST['login']))
   {
         $eemail=$_POST['eemail'];
         $ppassword=$_POST['ppassword'];
        $var=$_POST['logtype'];
         echo $var;
       
          if($var==2)
          {

          $sql="SELECT * from admin where email='$eemail' and password='$ppassword'";
          if($result = $conn->query($sql))
           {
                  if($result->num_rows > 0)
          {

             $row = $result->fetch_assoc();
             $_SESSION['login_user']=$eemail;

       header('Location: adminprof.php');
   }
    else
{
  echo'<script>alert("sorry check your id and password")</script>';
  
}
          }
 else
 {
   echo'<script>alert("sorry check your id and password")</script>';
  
 }
        }

        else if($var==1)
        {
          $eemail=$_POST['eemail'];
         $ppassword=$_POST['ppassword'];
         $sql="SELECT *from student where email='$eemail' and password='$ppassword'";
         //$var_value=$_POST['$eemail'];
    
    if($result = $conn->query($sql))
          {

                 if($result->num_rows > 0)
         {

            $row = $result->fetch_assoc();
            $_SESSION['login_user']=$eemail;
      header('Location:studprof.php');
  }
   else
{
  echo'<script>alert("sorry check your id and password")</script>';
  
}
}
else
{
  echo'<script>alert("sorry check your id and password")</script>';
  
}
        }

        else if($var==3) 
        {
             $eemail=$_POST['eemail'];
         $ppassword=$_POST['ppassword'];
         $sql="SELECT * from company where email='$eemail' and password='$ppassword'";
         if($result = $conn->query($sql))
          {

                 if($result->num_rows > 0)
         {

            $row = $result->fetch_assoc();
            $_SESSION['login_user']=$eemail;
      header('Location: companyprof.php');
  }
  else
{
  echo'<script>alert("sorry check your id and password")</script>';
  
}

}
else
{
  echo'<script>alert("sorry check your id and password")</script>';
  
}


 }
        else
        {
          echo"error";
        }
}

$conn->close();

?>