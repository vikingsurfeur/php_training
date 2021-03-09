<?php

$pattern    = '/enchainer|enchainement/'; // I can group my pattern with the ' | ' characeter
$pattern    = '/enchain(er|ement)/'; // I can factorise the search
$subject    = 'chaine enchainer enchainement';

preg_match_all($pattern, $subject, $matches);

print_r($matches);