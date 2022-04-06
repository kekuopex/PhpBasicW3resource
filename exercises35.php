<?php

$arr = [1,21,2,2,2,2,3,3,3,5,6,7];
sort($arr);

function remove_duplicate( & $arr) {
  return array_unique($arr)
}

remove_duplicate($arr);
print_r($arr);
?>
