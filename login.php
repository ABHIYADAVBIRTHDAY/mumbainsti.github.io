

<?php

?>
<html>
<head>
<style>
#outer{height:auto;
width:100%;
}
#header{
	height:30px;
	width:100%;
	background:#01579b;
}
#header2
{height:100px;
width:100%;
}
#head1{
	height:100px;
width:30%;
float:left;
}
#head2{
	height:100px;
width:70%;
float:left;
line-height:90px;
font-size:30px;
text-align:center;
}
#menu
{
	height:50px;
	width:100%;
	background:#01579b;
	line-height:50px;
	
	
}
#menu ul li{
	display:inline;
	text-decoration:none;
}
a
{
	text-decoration:none;
	padding-left:5%;
	font-size:20px;
	color:white;
	
}
#register
{
	height:80px;
	width:100%;
}
#register1
{
	height:70px;
	width:100%;
	font-size:25px;
	line-height:70px;
	text-align:center;
}
#register2
{
	height:700px;
	width:100%;
}
#left
{
	height:700px;
	width:50%;
	float:left;
	
}
#right
{
	height:700px;
	width:50%;
	float:right;
	background-color:blue;
}
#footer{
	height:100px;
	width:100%;
	background-color:black;
	
}
#footer1{
	height:100px;
	width:70%;
	float:left;
	color:white;
	font-size:20px;
	line-height:100px;
	padding-left:5%;
}
#footer2{
	height:100px;
	width:25%;
	float:left;
	color:white;
	font-size:18px;
		line-height:100px;
	
}
#middle{
height:500px;
width:100%;
background:url('images/a3.jpg');
background-repeat:no-repeat;
background-size:cover;
}

#middle1{
height:500px;
width:100%;
background:rgba(0,0,0,.6);
}

#m1
{height:400px;
width:33%;
float:left;
}

#m2
{height:400px;
width:34%;
float:left;
margin-top:80px;
}
#m3
{height:400px;
width:33%;
float:left;
}
.contain
{
font-size:20px;
}
.txt{
height:40px;
width:300px;
}
td{
	color:white;
}

</style>
</head>
<body>
<div id="outer">
<div id="header">
</div>
<div id="header2">
<div id="head1">
<img src="images/log.jpg" style="height:100px;float:left;"> </div>
<div id="head2">
<span style="color:#d50000;">&nbsp; <b>NSTI MUMBAI</b></span></div>
</div>
<div id="menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="staff.php">Staff Members</a></li>
<li><a href="coures.php">Coures</a></li>
<li><a href="registration.php">Registration</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="facilities.php">Facilities</a></li>
<li><a href="image.php">Image Gallery</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
<div id="middle">
<div id="middle1">

<div id="m1"></div>
<div id="m2">
<table>
<form action="logcode.php" method="post">
<tr>
<td><span style="color:white;text-shadow:4px 4px 4px black;"><h1><center>Login Here !!!<br/><br/></center></h1></span></td></tr>
<tr>
<td class="txt"><br/><input type="text" name="name" class="txt"placeholder="enter user name.." required/></td></tr>
<tr>
<td class="txt"><br/><input type="password" name="password" class="txt"placeholder="enter your password.." required/></td></tr>
<tr>
<td><br/><input type="Submit" value="submit" style="height:40px;width:300px;font-size:20px;
background:#4a148c;color:white;"/></td></tr>

</form>
</table>
</div>
<div id="m3"></div>
</div>
</div>
<div id="footer">
<div id="footer1">
Copyright &copy;  Computer technology 
</div>
<div id="footer2">
Developed By:Shalini Yadav
</div>
</div>
</div>
</body>
</html>