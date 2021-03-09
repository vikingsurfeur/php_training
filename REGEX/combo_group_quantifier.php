<?php

$pattern = '/(az|bo){1,2}erty/';
$subject = 'azerty azazerty boerty';

preg_match_all($pattern, $subject, $matches);

print_r($matches);