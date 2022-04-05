<?php
$name_file = "exercises22.php";
$file_last_modified = filemtime($name_file);
print date("l, dS F, Y, h:ia", $file_last_modified);
?>
