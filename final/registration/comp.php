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
      
     
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Register</h1>
          
          <form action="comp1.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Company Name<span class="req">*</span>
              </label>
              <input type="text"  name="name"  required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Login ID<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              URL<span class="req">*</span>
            </label>
            <input type="URL" name="url" required autocomplete="off"/>
          </div>
          
          <input type="submit" name="submit" class="button button-block"  value="submit"/>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Login</h1>
          
          <form action="comp1.php" method="POST">
          
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
