

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
	height:500px;
	width:100%;
	background:url('images/a3.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	
	
}
#outline1
{
	height:500px;
	width:100%;
	background:rgba(0,0,0,.6);
	
	
}
#outline2
{
	height:500px;
	width:40%;
		float:left;
		color:white;
		text-shadow:4px 4px 4px black;
		font-size:40px;
		line-height:400px;
		text-align:center;
	
	
}
#outline3
{
	height:500px;
	width:60%;
	float:left;
	
	
	
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
REGISTER HERE!!!
</div>
<div id="outline3">

<form action="reg_code.php" method="post" enctype="multipart/form-data">
<table align="center" style="margin-top:4%;">
<tr>
<td>Name</td>
<td><input type ="text" name="Name" placeholder="enter name";  style="height:30px; width:400px; "/></td>
</tr>

<tr>
<td>Gender</td>
<td><input type ="radio" name="Gender" style="height:30px; width:30px;" value="male"/>male
<input type ="radio" name="Gender" style="height:30px; width:30px;" value="Female"/>Female</td>
</tr>
<tr>
<td>D.O.B</td>
<td><input type ="date" name="Dob" placeholder="dd/mm/yyyy"; style="height:30px; width:400px; "/></td>
</tr>

<tr>
<td>Course</td>
<td><input type ="text" name="Course" placeholder="enter  course"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Year</td>
<td><input type ="text" name="Year"placeholder="enter year"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td> Address</td>
<td><input type ="text" name="Address"placeholder="enter  Address"; style="height:30px; width:400px; "/>
</tr>
<tr>
<td>Contact No</td>
<td><input type ="text" name="Contact"placeholder="enter contact number"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Profile Pic</td>
<td><input type ="file" name="Profile" placeholder="enter profile pic"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Email Id</td>
<td><input type ="text" name="Email" placeholder="enter Email Id"; style="height:30px; width:400px; "/></td>
</tr>

<tr>
<td>Password</td>
<td><input type ="password" name="password" placeholder="enter password"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Captcha Generation</td>
<td><input type ="text" name="Captcha Generation"placeholder="enter Captcha Generation"; style="height:30px; width:400px; "/></td>
</tr>
<tr>
<td>Submit</td>
<td><input type ="Submit" value="Submit" placeholder="enter password"; style="height:30px; width:400px; "/></td>
</tr>

</table>
</form>

</div>
</div>
</div>
<div id="footer">
<div id="footer1">
Copyright &copy; Computer technology 
</div>
<div id="footer2">
Developed By:Shalini Yadav
</div>
</div>
</div>
</body>
</html>