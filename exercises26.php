<?php
header('Content-tpye: text/plain');
// getenv() gets the value of an environment variable
$rd = getenv();
foreach ($rd as $key => $value) {
  echo "key: " . $key  . "  :  " . $value . "<br>";
}

print getenv('OS');
?>
