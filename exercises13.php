<?php
$str = "Salary of Mr. ";
$salary = [
  'A' => 1000,
  'B' => 1200,
  'C' => 1400
];

foreach ($salary as $key => $value) {
  print <<< _HTML_
    <table border=1 cellspacing=0 cellpading=0>
    <tr>
          <td><font color="blue">{$str} {$key} is</font></td>
          <td>{$value}$</td>
    </tr>
    </table>
  _HTML_;
}

?>
