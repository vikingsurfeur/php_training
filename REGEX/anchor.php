<?php

// $pattern    = '/^123/'; // Defined the start of the characters chain
$pattern    = '/789$/'; // Defined the end of the chracters chain
$password   = '123456789 46789';

preg_match($pattern, $password, $matches);

var_dump($matches);