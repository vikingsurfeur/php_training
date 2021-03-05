<?php

session_unset();
// session_destroy();
setcookie('PHPSESSID', '', time() - 86400, '/localhost');

require_once 'index.php';

