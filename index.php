<html>
<head>
<script>
var arr=["a.jpg","college.jpg","college4.jpg","college5.jpg"];
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
	window.setTimeout("slider1()",1500);
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
	background:url('images/dd.jpg');
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
	height:300px;
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
	margin-left:10%;
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
.box{
	height:250px;
	width:200px;
	float:left;
	
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
<li><a href="coures.php">Coures</a></li>
<li><a href="registration.php">Registration</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="facilities.php">Facilities</a></li>
<li><a href="image.php">Image Gallery</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
<div id="slider">

</div>
<div id="prinicial">
<div id="prinicial1"><center>
<span style="color:#01579b; font-size:25px;">Our</span><span style="color:#d50000; font-size:25px;">&nbsp; <b>Director Message</b></span></center>
</div>
<div id="prinicial2">
<div id="left">
<div id="left1">
<div id="a1"></div>
<div id="a">Shri S. Harinath Babu</div>
</div>
</div>
<div id="right">
<div id="right1">
Navi Mumbai: Taloja Industries Association (TIA) has signed MOU (Memorandum of Understanding) with regional office of Ministry of Skill 
Development and Entrepreneurship (MSDE), Government of India. President of TIA, Satish Shetty (Anna) and Regional Director (Western Region), 
Ministry of Skill Development & Entrepreneurship, Government of India, Harinath Babu, jointly made many announcements related to skill
 development, in a function held in the office of TIA. With this tie-up, students undergoing various training programs, in different schemes and trades, such as Craftsman Training Scheme, Craft Instructor Training Scheme, Diploma Courses under NCVET, Bachelor of Vocational Education (UGC Recognised B.Voc programmes) etc. at National Skill Training Institute (NSTI), Mumbai, will join Industries in Taloja MIDC for implementation of Dual System of Training, to get experience, while being on the job and in actual Industrial environment, 
so that students are readily employable.
</div>

</div>
</div>


</div>
<div id="Aboutcollege">
<div id="top">
<span style="color:#01579b;">About</span><span style="color:#d50000;">&nbsp; <b>Institute</b></span>
</div>
<div id="bottom">
<div id="bottom1">
The training programmes are so designed by identifying the industrial needs of mechanical, electrical, electronics and chemical sectors by our officers 
in consultation with industry experts and individuals through level structured training programme so that at the end all trainees will be competent 
enough with the skills acquired that are required for the wage and self employment.  In our endeavour, the training needs of micro, small, medium 
and large enterprises both in Government and private sectors are continuously availing the benefits.  Hence it is requested to go through the training
 calendar and explore the possibility of utilising our facility
 and services for further knowledge and skill enhancement of your workforce either through short term, long term or customised training for your esteemed organisations and be a party committed to Hon’ble Prime Minister’s vision of “Make in India” to popularise Indian products in global markets.
</div>
</div>
</div>
<div id="Faculty">
<div id="f1">
<span style="color:#01579b;">Institute</span><span style="color:#d50000;">&nbsp; <b>Faculty</b></span>
</div>
<div id="f2">
<div id="f3">



<td><img src="images/bp dhami_0001.jpg" style="height:200px;width:200px;"></td>
<td><img src="images/dhanya r_0001.jpg" style="height:200px;width:200px;"></td>

<td><img src="images/mp lad_0001.jpg" style="height:200px;width:200px;"></td>

<td><img src="images/mahananda kante.jpg" style="height:200px;width:200px;"></td>

<td><img src="images/narkar_0001.jpg" style="height:200px;width:200px;"></td>


</div>
</div>
<div id="footer">
<div id="footer1">
Copyright &copy;  Computer technology 
</div>
<div id="footer2">
Developed By:Shalini  Yadav

</div>

</div>

</div>

</div>
</body>
</html>