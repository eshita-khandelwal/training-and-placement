<!DOCTYPE html>
<html>
<head>
<title>welcome page</title>
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
#logout_btn
{
margin-top:10px; 
background-color:#c0392b;
padding:5px; 
color:white;
width:100%;
text-align:center ;
font-size: 18px;
font-weight: bold; 
margin-bottom: 50px;
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
<h2> WELCOME </h2>
<form class="myform "  action="complogin.php" method="POST">

<input type="submit" id="logout_btn" value="log out"/><br>

</form>
</center>
</div>
</body>
</html>