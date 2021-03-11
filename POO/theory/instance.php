<?php

require_once('./classes/User.php');

$david              = new User();
$david->id          = 1;
$david->civility    = 'Mr';
$david->name        = 'Bouscarle';
$david->username    = 'davidCoder';

$candy              = new User();
$candy->id          = 2;
$candy->civility    = 'Mme';
$candy->name        = 'Bouscarle';
$candy->username    = 'candyDance';

echo
    '<pre>'.
        'id of Candy : '.$candy->id.'<br>'.
        'Civility of Candy : '.$candy->civility.'<br>'.
        'Name of Candy : '.$candy->name.'<br>'.
        'Username of Candy : '.$candy->username.'<br>'.
        $candy->sayHello().
    '</pre>';