<?php
//By this function, duplicate element can be removed...
$a=array("a"=>"red","b"=>"green","c"=>"red","a"=>"red");
//$a=array("a","a");
print_r(array_unique($a));
?>