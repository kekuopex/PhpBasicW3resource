<?php
// Check whether the page is called from 'https' or 'http
if (isset($_SERVER['HTTPS'])) {
  echo "Https is enable";
}
else {
  echo "Http is enable";
}
