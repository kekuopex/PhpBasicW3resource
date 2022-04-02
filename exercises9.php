<?php
//header('Content-type: text/plain');
header("Content-Type: text/html; charset=utf-8");
$str = "Test kekuopex";

// <span style = "color:red"> {$str[$i]} </span>
// <p><font color="red">  {$str[$i]} </font></p>


function colorFirstChar($str) {
  for ($i = 0; $i < strlen($str); $i++) {
    if (($i == 0) || ($str[$i - 1] == ' ')) {
      print <<< _HTML_
        <p><font color="red">  {$str[$i]} </font></p>
      _HTML_;
    }
    else print <<< _HTML_
      <p> {$str[$i]} </p>
    _HTML_;
  }
}

colorFirstChar($str);
?>
