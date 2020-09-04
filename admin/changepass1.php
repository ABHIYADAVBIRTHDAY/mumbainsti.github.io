<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
mysql_connect('localhost','root',''); 
mysql_select_db("badalpur");
$query="select * from tbl_admin where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$pp=$row['password'];
	//echo $pp;
}

$op=$_POST['current'];
//echo $current;
$np=$_POST['New'];
//echo $New;
$cnp=$_POST['confirm'];
//echo $confirm;

if($op==$pp)
{
	if($op==$np)
	{
		header("location:change.php?1");
	}
	elseif($np==$cnp)
	{
		$query1="update tbl_admin set password='$np' where email='$email'";
		mysql_query($query1);
		header("location:logout1.php");
	}
        else
   {
	   header("Location:change.php?2");
   }
}
   else
   {
	    header("Location:change.php");
   }

?>