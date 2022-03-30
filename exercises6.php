<?php
//Write a simple PHP browser detection script.
echo "USER_AGENT ". $_SERVER['HTTP_USER_AGENT'];

$browser = get_browser(null, true);
print_r($browser);
