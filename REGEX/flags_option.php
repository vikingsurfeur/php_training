<?php

$pattern    = '/789$/m'; // search on multiline
$subject    = '123456\n123456789';

preg_match($pattern, $subject, $matches);

var_dump($matches);

$patternTwo = '/az/i'; // search on intensive mode, don't respect the breakword
$subjectTwo = 'Azerty aZerty azerty';

preg_match_all($patternTwo, $subjectTwo, $matchesTwo);

var_dump($matchesTwo);

// We can combine the mode like /gim => global multiline intensive