<?php                                           
mysql_connect('localhost','root','');
mysql_select_db("badalpur");
$query="select * from tbl_registration";
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
<th>GENDER</th>
<th>DOB</th>
<th>COURES</th>
<th>YEAR</th>
<th>ADDRESS</th>
<th>CONTACT</th>
<th>PROFILE</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>REG_DATE</th>
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
<td><?php echo $row['Gender'];?></td>
<td><?php echo $row['Dob'];?></td>
<td><?php echo $row['Course'];?></td>
<td><?php echo $row['Year'];?></td>
<td><?php echo $row['Address'];?></td>
<td><?php echo $row['Contact'];?></td>
<td><?php echo $row['Profile'];?></td>
<td><?php echo $row['Email'];?></td>
<td><?php echo $row['Password'];?></td>
<td><?php echo $row['RegDate'];?></td>
<td><a href="delete.php?id=<?php echo $row[0];?>">delete</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>