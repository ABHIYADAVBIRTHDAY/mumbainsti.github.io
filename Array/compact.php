<?php
//By this function, An element can inserted into an array(associative array)...
$name = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("name", "lastname", "age");

print_r($result);
?>