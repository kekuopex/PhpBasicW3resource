<?php
header('Content-type: text/plain');
$all_lines = file('https://www.w3resource.com/php-exercises/php-basic-exercises.php');

foreach($all_lines as $line_num => $line) {
  echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
}


?>
