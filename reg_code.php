<?php
echo "welcome";
$name=$_POST['Name'];
echo $name;
$gender=$_POST['Gender'];
echo $gender;
$dob=$_POST['Dob'];
echo $dob;
$Course=$_POST['Course'];
echo $Course;
$Year=$_POST['Year'];
echo $Year;
$Address=$_POST['Address'];
echo $Address;
$Contact=$_POST['Contact'];
echo $Contact;
$Profile=$_FILES['Profile']['name'];
echo $Profile;
$tmp=$_FILES['Profile']['tmp_name'];
echo $tmp;
$Email=$_POST['Email'];
echo $Email;
$Password=$_POST['password'];
echo $Password;
$location="upload/";
mysql_connect('localhost','root',''); 
mysql_select_db("badalpur");
$query="insert into Tbl_Registration (Name,Gender,Dob,Course,Year,Address,Contact,Profile,Email,Password,RegDate) values ('$name','$gender','$dob','$Course','$Year','$Address','$Contact','$Profile','$Email','$Password',curdate())";
mysql_query($query);
move_uploaded_file($tmp,$location.$Profile);

?>