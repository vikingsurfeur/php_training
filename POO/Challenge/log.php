<?php

require_once('./classes/Logger.php');
$testLog = new Logger();
$testLog->log('Cerveau en ébullition');
unset($testLog);