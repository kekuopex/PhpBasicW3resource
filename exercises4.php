<?php
//Create a HTML form and accept the user name and display the name

if('POST' == $_SERVER['REQUEST_METHOD']){
  print "Hello, " . $_POST['my_name'];
}
else{
  print <<<_HTML_
    <form method = 'POST' action = "$_SERVER[PHP_SELF]">
    Your name: <input type = 'text' name = 'my_name'>
    <input type = 'submit' value = 'Say Hello'>
    </form>
    _HTML_;
}
