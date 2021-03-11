<?php

require_once ('./classes/User.php');

$candy  = new User(
    2,
    'Mme',
    'Bouscarle',
    'candyDance'
);

var_dump($candy);
