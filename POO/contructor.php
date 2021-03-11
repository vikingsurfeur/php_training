<?php

require_once ('./classes/User.php');
require_once ('./classes/Couple.php');

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

// Warning, Object variable per reference, it's not a copy like a variable

function changeValueObject(User $user)
{
    $user->name = 'Goret';
    echo $user->name.'<br>';
}

$candy->name = 'Bouscarle';
changeValueObject($candy);
echo $candy->name.'<br>';

//var_dump($david);
//var_dump($candy);
//var_dump($coupleBouscarle);
