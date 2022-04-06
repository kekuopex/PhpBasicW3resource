<?php
header('Content-type: text/plain');
function trinaryTest($num) {
  $result = $num > 30
  ? "num is greater 30"
  : ($num > 20
  ? "num is greater 20"
  : ($num > 10
  ? "num is greater 10"
  : "num atleast greater 10"));
echo $num . " : " . $result . "\n";
}
trinaryTest(32);
trinaryTest(21);
trinaryTest(12);
trinaryTest(4);

?>
