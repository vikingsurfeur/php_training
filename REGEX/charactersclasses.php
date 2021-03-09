<?php

$pattern        = '/[7-9]|[l-p]/'; // Include the results between 7 to 9 and l to p
$patternTwo     = '/[^7-9]|[^l-p]/'; // Exclude with the characters with ^
$patternThree   = '/\w/'; // Generic class (any word); see the documentation like \d for digital etc...
$subject    = 'abcdefijklmnopqrstuvwxyz 0123456789';
$subjectTwo = 'abcdefijklmnopqrstuvwxyz 0123456789';

// preg_match_all($pattern, $subject, $matches);

// preg_match_all($patternTwo, $subjectTwo, $matchesTwo);

preg_match_all($patternThree, $subject, $matches);

print_r($matches);

// print_r($matchesTwo);