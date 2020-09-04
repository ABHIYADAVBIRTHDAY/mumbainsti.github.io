<?php
session_start();
$email=$_SESSION['user'];
mysql_connect('localhost','root',''); 
mysql_select_db("badalpur");
$query="select * from tbl_registration where Email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$pp=$row['Password'];
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
		header("location:change.php");
	}
	elseif($np==$cnp)
	{
		$query1="update tbl_registration set password='$np' where Email='$email'";
		mysql_query($query1);
	}
        else
   {
	   header("Location:change.php");
   }
}
   else
   {
	    header("Location:change.php");
   }

?>