<?php                                           
mysql_connect('localhost','root','');
mysql_select_db("badalpur");
$query="select * from tbl_enquiry";
 $res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<table border="1" align="center">
<tr>
<th>ID</th>
<th>NAME</th>
<th>CONTACT</th>
<th>EMAIL</th>
<th>MESSAGE</th>
<th>EQ_DATE</th>
<th>DELETE</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['EQ_Date'];?></td>
<td><a href="delete1.php?id=<?php echo $row[0];?>">delete</a></td></tr>
<?php
$a++;
}
?>
</table>
</body>
</html>