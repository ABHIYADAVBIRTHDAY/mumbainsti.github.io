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
#outline
{
	height:650px;
	width:100%;
	background:url('images/a3.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	
	
}
#outline1
{
	height:300px;
	width:100%;
	
	
	
}
#outline2
{
	height:300px;
	width:50%;
		float:left;
		color:white;
		text-shadow:4px 4px 4px black;
		font-size:40px;
		line-height:400px;
		text-align:center;
	
		margin-left:5%;
	
	
}
#outline3
{
	height:300px;
	width:40%;
	float:left;
	
	
	
	
}
#outline4
{
	height:250px;
	width:80%;
	float:left;
	background-color:pink;
	margin-top:5%;
	margin-left:10%;
	
	
	
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
<div id="outline">
<div id="outline1">
<div id="outline2">
<form action="No_code.php" method="post" enctype="multipart/form-data">
<table align="center" style="margin-top:8%;">
<tr><td colspan=2 style="color:white;font-size:25px;"><h3>Contact us</h3></td></tr>
<tr>
<td>Name</td>
<td><input type ="text" name="Name" placeholder="enter name";  style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Email</td>
<td><input type ="text" name="Email" placeholder="enter Email"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type ="text" name="Mobile" placeholder="enter Mobile number"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Message</td>
<td><input type ="text" name="Message" placeholder="enter Message"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Submit</td>
<td><input type ="Submit" value="Submit" placeholder="enter password"; style="height:30px; width:400px; "/></td>
</tr>
</table>
</form>
</div>
<div id="outline3">
<table  style="margin-top:12%;">
<tr><td colspan=2 style="color:white;font-size:25px;"><h3>ADDRESS</h3></td></tr>
<tr><td>National Skill Training<br/>V N Purav Marg<br/>Sion Chunabhatti, Mumbai M aharashtra<br/>Phone number : 022 2422 3962<br/>Email:nsti-mumbai@gmail.com<br/>website : www.nstimumbai.in</td></tr>
</table>
</div>
</div>
<div id="outline4">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14234.67795370525!2d80.94821!3d26.88224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x730fe46201abc68a!2sSoftpro+India!5e0!3m2!1sen!2sin!4v1411887056855" height="240px" width="99%" style="border:5px solid blue;">
</iframe>
</div>
</div>
<div id="footer">
<div id="footer1">
Copyright &copy; Computer technology 
</div>
<div id="footer2">
Developed By: Shalini Yadav
</div>
</div>
</div>
</body>
</html>