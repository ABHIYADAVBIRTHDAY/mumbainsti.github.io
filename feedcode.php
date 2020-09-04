<?php
session_start();
include("connection.php");
$message=$_POST['feedback'];
echo $message;
$username=$_SESSION['user'];

$query="select * from tbl_registration where email='$username'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$user_id=$row['Reg_id'];
	echo $user_id;
}

 $query1="insert into tbl_feedback(user_id,Message,F_Date) values('$user_id','$message',curdate())";
mysql_query($query1);
?>