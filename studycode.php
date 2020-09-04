<?php
session_start();
$username=$_POST['name'];
echo $username;
$file=$_FILES['file']['name'];
echo $file;
$tmp=$_FILES['file']['tmp_name'];
echo $tmp;

$location="S_Mat_image/";
mysql_connect('localhost','root','');
 mysql_select_db("badalpur");
 

 $query="insert into tbl_studymaterial(title,File_path,Study_Date) values('$username','$file',curdate())";mysql_query($query);
move_uploaded_file($tmp,$location.$file);

?>