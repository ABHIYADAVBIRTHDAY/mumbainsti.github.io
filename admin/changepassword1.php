
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
#head{
	height:100px;
width:100%;
line-height:90px;
font-size:50px;
text-align:center;
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
<div id="head">
<span style="color:#d50000;">&nbsp; <b>WELCOME TO ADMIN ZONE</b></span></div>
</div>
<div id="middle">
<div id="middle1">
<div id="m1"></div>
<div id="m2">
<table>
<form action="changepass1.php" method="post">
<tr>
<td><span style="color:white;text-shadow:4px 4px 4px black;"><h1><center>Change your Password !!!<br/></center></h1></span></td></tr>
<tr>
<td class="txt"><br/><input type="text" name="current" class="txt"placeholder="Enter Current password.." required/></td></tr>
<tr>
<td class="txt"><input type="text" name="New" class="txt"placeholder="Enter New Password.." required/></td></tr>
<tr>
<td class="txt"><input type="text" name="confirm" class="txt"placeholder=" Enter Confirm New Password.." required/></td></tr>
<tr>
<td><br/><input type="Submit" value="Submit" style="height:40px;width:300px;font-size:20px;
background:#4a148c;color:white;"/></td></tr>

</form>
</table>
</div>
</div>
</div>
<div id="footer">
<div id="footer1">
Copyright &copy; Softpro India Computer technology (P) Limited
</div>
<div id="footer2">
Developed By:Bibi Ayesha 
</div>
</div>
</div>
</body>
</html>