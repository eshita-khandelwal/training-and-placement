<!Doctype html>
<html>
<head>

<style>
div {
    border-radius: 5px;
    background-color: #F8F8F8;
    width: auto;
    padding: 25px;
    
}
h1 {
	font-family: 'Raleway', Helvetica, Arial, sans-serif;
	font-size: 56px;
	line-height: 80px;
	color: grey;
    text-shadow: 2px 2px 4px #000000;
}

input[type=text]
{
	
	width:200px;
	height:20px;
	background:white;
}
input[type=email]
{
	background:white;
}
input[type=date]
{
	background:white;
}
input[type=number]
{
	
	
	
	background:white;
}
/*
input[type=number]
{

	margin-bottom:25px;
	
	border:2px solid green;
	background:white;
}
*/
input:focus
{
	background-color:#2d3d5a;
}
input[type=submit]
{
	width:200px;
	height:50px;
	background-color: #2d3d5a;
}
input[type=reset]
{
	width:200px;
	height:50px;
	background-color: #2d3d5a;

}
input[type=submit]:focus
{
	width:200px;
	height:50px;
	border:none;
	background-color:2d3d5a;
	border:solid steelblue;
	color:steelblue;
}
input[type=submit]:hover
{
	opacity: 0.8;
}

input[type=reset]:hover
{
	opacity: 0.8;
}

.header
{
   background-color: #2d3d5a;
    padding: 20px;
    text-align: center;
}

</style>
</head>
<body>
<div class="header">
<h1 style="color:white">Company Registration</h1><br>
</div><br><br><br><br><br><br>
<div>
<form name="myform"    action="companycriteria2.php"  method="POST"/>

<label for="name" > Name<b> :&nbsp </b></label>
    <input type="text" id="fname" name="name"  style="width:250px;height:25px;"  required>
&nbsp&nbsp&nbsp&nbsp

    <label for="email">Email <b> : &nbsp</b></label>
    <input type="email" id="mail" name="email" style="width:250px;height:25px;" placeholder="ex : abc@gmail.com" required><br><br>
    <label>AGGREGATE REQUIRED:<b> : </b></label>
    <!--select required-->
    <input type="number" name="agg"  style="width:250px;height:25px;"><br><br>
  <label>ACTIVE BACKLOGS:<b> : </b></label>
    <!--select required-->
    <input type="number" name="active_backlog"  style="width:250px;height:25px;"><br><br>
  <label>PASSIVE BACKLOGS:<b> : </b></label>
    <!--select required-->
    <input type="number" name="passive_backlog"  style="width:250px;height:25px;"><br><br>
    <label for="date">DATE OF VISIT </label>
    <input type="date" name="dateofvisit" required style="width:250px;height:25px;"/><br>
  
	
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
    </form>
    </div>
    </body>
    </head>
    </html>
