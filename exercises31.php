<?php

$a = 5;
$b = 7;

function swap(  &$a,  &$b) {
  $temp;
  $temp = $a;
  $a = $b;
  $b = $temp;
}

swap($a,$b);

echo $a, $b ;

?>
