<?php

function isAmstrongNumber($num) {
  $str = (string) $num;
  $numSize = strlen($str);

  $numRes = 0;
  for ($i = 0; $i < $numSize; $i++) {
    $numRes = $numRes + (int) $str[$i] ** $numSize;
  }

  return $num == $numRes;
}


var_dump(isAmstrongNumber(100));
var_dump(isAmstrongNumber(370));
var_dump(isAmstrongNumber(407));
?>
