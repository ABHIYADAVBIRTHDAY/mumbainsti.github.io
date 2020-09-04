<?php
//By this function,we can get first element of an array on static as well as dynamic state...
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
//By this function,we can get last element of an array on static as well as dynamic state...
echo end($people);
?>