<?php 
function mod($num1 , $num2) {
  $div = (int) ($num1/$num2);
  return $num1 - $num2 * $div;
}

?>