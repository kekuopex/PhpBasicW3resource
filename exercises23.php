<?php
(version_compare(PHP_VERSION, '7.0.0') >= 0)
? print 'Я использую PHP версии не ниже 7.0.0, моя версия: ' . PHP_VERSION . "\n"
: (version_compare(PHP_VERSION, '5.3.0') >= 0
? print 'Я использую PHP версии не ниже 5.3.0, моя версия: ' . PHP_VERSION . "\n"
: (version_compare(PHP_VERSION, '5.0.0', '>=')
? print 'Я использую PHP 5.0.0 или выше, моя версия: ' . PHP_VERSION . "\n"
: (version_compare(PHP_VERSION, '5.0.0', '<')
? print 'Я до сих пор использую PHP 4, моя версия: ' . PHP_VERSION . "\n"
: print " это GG")))
?>
