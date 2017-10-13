<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">
    
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Register</h1>
          
          <form action="studre.php" method="post">
        


        
          <div class="field-wrap">
            <label>
               MIS No.<span class="req">*</span>
            </label>
            <input type="mis" name="mis" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
             Password<span class="req">*</span>
            </label>
            <input type="password" name="ppassword" required autocomplete="off"/>
          </div>
          
          <input type="submit" name="signup"  value="sign up" class="button button-block"/>
          
          </form>

        </div>
        
      
<!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
