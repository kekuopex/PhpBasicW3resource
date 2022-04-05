<?php


$url = "";
if (isset($_SERVER['HTTPS'])) {
  $url = $url . "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
else {
  $url = $url . "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

print_r($url);
?>
