<html>
<head>
<script>
var arr=["gti.jpg","gti1.jpg","gti2.jpg","gti3.jpg"];
var i=0;
function slider1()
{
	var imgslide=document.getElementById("slider");
	imgslide.style.backgroundImage="url('images/"+arr[i]+"')";
	i++;
	if(i==arr.length)
	{
i=0;
	}
	window.setTimeout("slider1()",1000);
}
</script>
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
#slider{
	height:300px;
	width:100%;
	
}
#prinicial
{
	min-height:400px;
	width:100%;	

	
}
#prinicial1
{	
		min-height:80px;
	   width:100%;
	   
	line-height:80px;
}
#prinicial2
{
	min-height:290px;
	width:100%;
    font-size:25px;
	text-align:center;
	
	
}

#left
{
	height:290px;
	width:30%;
	float:left;
	
}
#left1
{
	height:250px;width:70%;
	background:url('images/principal.jpg');
	background-repeat:no-repeat;
	background-size:100% 100%;
	margin-left:10%;
	box-shadow:4px 4px 4px black;
	margin-top:10%;
	
	
	
}
#a1{
	height:190px;
	width:100%;
	
}
#a{
	height:50px;
	width:100%;
	background:rgba(0,0,0,.6);
	margin-top:5%;
	color:white;
	font-size:20px;
	text-align:center;
	font-family:monotype;
	line-height:50px;
	
	
}
#right
{
	height:290px;
	width:70%;
	color:gray;
	font-size:18px;
	text-align:justify;
	float:left;
}
#right1
{
	height:290px;
	width:95%;
	color:gray;
	font-size:18px;
	text-align:justify;
	float:left;
	font-family:calibri;
	padding-top:5%;
}
#AboutCollege
{
	height:400px;
	width:100%;
	background:#fafafa;
	
}
#top{
	
	
	height:70px;
	width:100%;
	font-size:25px;
	line-height:70px;
	text-align:center;
}
#bottom{
	
	
	height:310px;
	width:100%;
	color:gray;
	font-size:18px;
	text-align:justify;
	font-family:calibri;
}
#bottom1{
	
	
	height:310px;
	width:94%;
	color:gray;
	font-size:18px;
	text-align:justify;
	font-family:calibri;
	margin-left:3%;
}
#Course
{
	
	height:400px;
	width:100%;

}
#f1{
	
	
	height:70px;
	width:100%;
	font-size:25px;
	line-height:70px;
	text-align:center;
}
#f2{
	height:310px;
	width:100%;
	color:gray;
	font-size:18px;
	text-align:justify;
	font-family:calibri;
}
#f3{	
	height:310px;
	width:94%;
	color:gray;
	font-size:18px;
	text-align:justify;
	font-family:calibri;
	margin-left:3%;
}
	#b1{
	height:190px;
	width:100%;
}
#b{
	height:50px;
	width:100%;
	background:rgba(0,0,0,.6);
	margin-top:5%;
	color:white;
	font-size:20px;
	text-align:center;
	font-family:monotype;
	line-height:50px;
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

</style>
</head>
<body onload="slider1()">
<div id="outer">
<div id="header">
</div>
</div>
<div id="header2">
<div id="head1">
<img src="images/log.jpg" style="height:100px;float:left;border-radius:50%;"> </div>
<div id="head2">
<span style="color:#d50000;">&nbsp; <b>NSTI MUMBAI</b></span></div>
</div>
<div id="menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="staff.php">Staff Members</a></li>
<li><a href="coures">Coures</a></li>
<li><a href="registration.php">Registration</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="facilities.php">Facilities</a></li>
<li><a href="#">Image Gallery</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
<div id="slider">

</div>
<div id="prinicial">
<div id="prinicial1"><center>
<span style="color:#01579b; font-size:25px;">Our</span><span style="color:#d50000; font-size:25px;">&nbsp; <b>Principal Message</b></span></center>
</div>
<div id="prinicial2">
<div id="left">
<div id="left1">
<div id="a1"></div>
<div id="a">Er.A.H Khan</div>
</div>
</div>
<div id="right">
<div id="right1">
Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.<br/><br/>
which will aid you in creating inviting, color consistent design.Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting.
</div>

</div>
</div>


</div>
<div id="AboutCollege">
<div id="top">
<span style="color:#01579b;">About</span><span style="color:#d50000;">&nbsp; <b>College</b></span>
</div>
<div id="bottom">
<div id="bottom1">
ach color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.Each color might be exposed in various tones varying from bright to dark.<br/><br/><br/> color consistent design.Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.<br/><br/><br/>
which will aid you in creating inviting, color consistent design.Each color might be exposed in various tones varying from bright to dark. They all are collated in accessible section, which will aid you in creating inviting, color consistent design.
</div>
</div>
</div>
<div id="Faculty">
<div id="f1">
<span style="color:#01579b;">College</span><span style="color:#d50000;">&nbsp; <b>Faculty</b></span>
</div>
<div id="f2">
<div id="f3">

<table style="width:100%;">
<tr>

<td><img src="images/sweta.jpg" style="height:200px;width:200px;"></td>
<td><img src="images/kuldeep.jpg" style="height:200px;width:200px;"></td>

<td><img src="images/mukesh.jpg" style="height:200px;width:200px;"></td>

<td><img src="images/kapil.jpg" style="height:200px;width:200px;"></td>

<td><img src="images/a1.jpg" style="height:200px;width:200px;"></td>
</tr>
</table>

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

</div>
</body>
</html>