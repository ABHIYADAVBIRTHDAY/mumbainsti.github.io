<?php
session_start();
$username=$_POST['name'];
echo $username;
$password=$_POST['password'];
echo $password;
mysql_connect('localhost','root','');
 mysql_select_db("badalpur");

$query="select * from tbl_admin where email='$username' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$username;
	header("location:adminlogin.php");
	
}
else
{
	header("location:index.php");
}
?>