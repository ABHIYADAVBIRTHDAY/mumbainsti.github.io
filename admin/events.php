<?php
session_start();
include("../connection.php");

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
<form action="eventcode.php" method="post">
<tr>
<td><span style="color:white;text-shadow:4px 4px 4px black;"><h1><center>Add Event<br/></center></h1></span></td></tr>
<td class="txt"><textarea rows=7 cols=40 placeholder="event.." name="events" required/></textarea></td></tr>
<tr>
<td><br/><input type="Submit" value="submit" style="height:40px;width:300px;font-size:20px;
background:#4a148c;color:white;"/></td></tr>

</form>
</table>
</div>
</div>
</div>
</div>



<table border="1" align="center">
<tr>
<th>ID</th>
<th>EVENT</th>
<th>EVENT_DATE</th>
<th>DELETE</th>
</tr>
<?php
$select="select * from tbl_event";
$res=mysql_query($select);
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><a href="delete2.php?id=<?php echo $row[0];?>">delete</a></td></tr>
</tr>
<?php
$a++;
}
?>
</table>



<div id="footer">
<div id="footer1">
Copyright &copy; Softpro India Computer technology (P) Limited
</div>
<div id="footer2">
Developed By:Bibi Ayesha 
</div>
</div>

</body>
</html>