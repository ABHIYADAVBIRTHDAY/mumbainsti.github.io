<?php
session_start();
$email=$_SESSION['user'];
include("connection.php");
$query="select * from tbl_registration where email='$email'";
$res=mysql_query($query);
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
width:5%;
float:left;
}

#m2
{height:400px;
width:90%;
float:left;
margin-top:50px;
}
#m3
{
	height:400px;
	width:50%;
	float:left;
}
#m
{
	height:400px;
	width:100%;
    margin-right:100px;
	box-shadow:4px 4px 4px black;
	background:url('images/photo.jpg');
	background-repeat:no-repeat;
	background-size:100% 100%;
#m4
{
	height:400px;
	width:50%;
	float:left;
}
.txt{
	
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
<li><a href="Userdashboard.php">Home</a></li>
<li><a href="#">Discussion Board</a></li>
<li><a href="uploadstudy.php">Study Meterial</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="profile.php">My profile</a></li>
<li><a href="changepassword.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div id="middle">
<div id="middle1">
<div id="m1"></div>
<div id="m2">
<div id="m3">
<div id="m"></div>
</div>
<div id="m4">
<?php
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<form action="updatecode.php" method="post">
<table align="center" style="margin-top:4%;">
<tr>
<td class="txt">Name </td>
<td><input type ="text" name="Name" placeholder="enter name"  value="<?php echo $row['Name'];?>" style="height:30px; width:300px; "/></td>
</tr>
<tr>
<tr>
<td class="txt">Course</td>
<td><input type ="text" name="Course" placeholder="enter  course"  value="<?php echo $row['Course'];?>"style="height:30px; width:300px; "/></td>
</tr>
<tr>
<td class="txt">Year</td>
<td class="txt"><input type ="text" name="Year"placeholder="enter year" value="<?php echo $row['Year'];?>" style="height:30px; width:300px; "/></td>
</tr>
<tr>
<td class="txt"> Address</td>
<td><input type ="text" name="Address" placeholder="enter  Address"  value="<?php echo $row['Address'];?>" style="height:30px; width:300px; "/>
</tr>
<tr>
<td class="txt">Contact No</td>
<td><input type ="text" name="Contact" placeholder="enter contact number"  value="<?php echo $row['Contact'];?>" style="height:30px; width:300px; "/></td>
</tr>
<tr>
<td><br/><input type="Submit" value="Submit" style="height:40px;width:100px;font-size:20px;
background:#4a148c;color:white;"/></td></tr>


</table>
</form>
<?php
}
?>
</div>
</div>
</div>
<div id="footer">
<div id="footer1">
Copyright &copy;  Computer technology 
</div>
<div id="footer2">
Developed By:Shalini yadav
</div>
</div>
</div>
</body>
</html>