<?php

require_once ('./classes/User.php');

$david = new User(
    1,
    'Mr',
    'Bouscarle',
    'davidCoder'
);

$candy = new User(
    2,
    'Mme',
    'Bouscarle',
    'candyDance'
);

$coupleBouscarle = new Couple(
    $david,
    $candy
);

var_dump($coupleBouscarle);
