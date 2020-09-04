<?php
session_start();
$email=$_SESSION['user'];
echo $email;
$ques=$_POST['ques'];
echo $ques;
mysql_connect('localhost','root','');
mysql_select_db("badalpur");
$query="select * from tbl_registration where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$user_id=$row['Reg_id'];
	echo $user_id;
}
$insert="insert into tbl_question(user_id,question,ques_date) values('$user_id','$ques',curdate())";
mysql_query($insert);

?>