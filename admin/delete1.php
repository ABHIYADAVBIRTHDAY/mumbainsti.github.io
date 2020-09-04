<?php
$id=$_REQUEST['id'];
echo $id;
mysql_connect('localhost','root','');
mysql_select_db("badalpur");

$query="delete from tbl_enquiry where EQ_id='$id'";
mysql_query($query);
header("location:enquiry.php");
?>