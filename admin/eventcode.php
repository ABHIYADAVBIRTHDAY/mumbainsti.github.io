<?php
session_start();
include("../connection.php");

$event=$_POST['events'];
echo $event;

 $query="insert into tbl_event(event,event_Date) values('$event',curdate())";
 mysql_query($query);
 header("loctation:events.php");

?>
