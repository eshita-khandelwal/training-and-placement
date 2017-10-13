<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
	#main-wrapper
{
	width:500px;
	margin:0 auto;
	background-color:white;
	padding:5px;
	border-radius:10px;
	border:2px solid #2c3e50;
}
.myform
{
	width:450px;
	margin:0 auto;
}
.inputvalues
{
	width:430px;
	margin:0 auto;
	padding: 5px;
}
#login_btn
{
margin-top:10px; 
background-color:#27ae60;
padding:5px; 
color:white;
width:100%;
text-align:center ;
font-size: 18px;
font-weight: bold; 

}
#reg_btn
{
	margin-bottom: 20px;
	margin-top:10px; 
background-color:#3498db;
padding:5px; 
color:white;
width:100%;
text-align:center ;
font-size: 18px;
font-weight: bold; 
}
.avatar
{
	width:150px;
	text-align:center;
border-radius: 50%;

}

</style>
</head>
<body style="background-color:#7f8c8d ">
<div id="main-wrapper">
	<center>
	<img src="img/login.png"  class="avatar"/>
<h2>login form</h2>
<form class="myform "  action="index.php" method="POST">
<label for ="username">USERNAME</label>
<input type="text" name="username" class="inputvalues" placeholder="your username.." ><br>
<label for ="password">PASSWORD</label>
<input type="password" name="password" class="inputvalues" ><br>
<input type="submit" id="login_btn" value="login"/><br>
<a href="http://localhost/register.html"><input type="submit" id="reg_btn" value="register"/></a>
</form>
</center>
</div>
</body>
</html>

