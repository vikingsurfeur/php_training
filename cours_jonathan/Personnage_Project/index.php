<?php

require_once 'Personnage.php';
require_once 'Archer.php';

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$legolas = new Archer('Legolas');

$legolas->attaque($merlin);
var_dump($merlin);
