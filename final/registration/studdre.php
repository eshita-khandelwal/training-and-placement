









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
          
          <form action="studdre.php" method="POST">
          
            <div class="field-wrap">
            <label>
              mis <span class="req">*</span>
            </label>
            <input type="mis" name="mis" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="ppassword" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" name="login" class="button button-block" value=" log in "/>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

























<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password= "";
    $dbname   ="tnp2";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
if(isset($_POST['login']))
   {
         $mis=$_POST['mis'];
         $ppassword=$_POST['ppassword'];
         $sql="SELECT * from student where mis='$mis' and password='$ppassword'";
         if($result = $conn->query($sql))
          {

                 if($result->num_rows > 0)
         {

            $row = $result->fetch_assoc();
            $_SESSION['id']=$mis;
              echo $mis;

      header('Location: reginstruct.html');
  }
}
else
{
  //<script type=> alert("sorry check your id and password")</script>
}
}



      ?>