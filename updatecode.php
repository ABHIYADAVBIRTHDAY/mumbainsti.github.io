<?php
session_start();
$email=$_SESSION['user'];
$name=$_POST['Name'];
echo $name;
$Course=$_POST['Course'];
echo $Course;
$Year=$_POST['Year'];
echo $Year;
$Address=$_POST['Address'];
echo $Address;
$Contact=$_POST['Contact'];
echo $Contact;

mysql_connect('localhost','root',''); 
mysql_select_db("badalpur");
$query="update tbl_registration set Name='$name',Course='$Course',Year='$Year',Address='$Address',Contact='$Contact' where Email='$email'";
mysql_query($query);
header("location:profile.php");
?>