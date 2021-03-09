<?php

$pattern = '/a{3,5}zerty/'; // Quantifier syntax here, search the 3 to 5 a in the subject
$subject = 'zerty azerty aazerty aaazerty aaaazerty aaaaazerty';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);