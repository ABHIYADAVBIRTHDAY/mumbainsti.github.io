<?php
//By this function,We can fetch first next and previous element on an array...
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people)."<br/>";
//echo next($people)."<br/>";
echo prev($people);
?>