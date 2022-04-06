<?php
header("Context-type: text/plain");
for ($i = 1; $i <= 6; $i++) {
  for ($j = $i, $k = 0; $k < 6; $k++) {
    echo $j . " ";
    $j += $i;
  }
  print "<br>";
}
?>
