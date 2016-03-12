<?php
$x = 30000;
$y = 35000;

function myTest() {
     global $x, $y,$z;
     $z = $x + $y;
} 

myTest(); // run function
echo $z; // output the new value for variable $y
echo $x;
echo $y;
?>