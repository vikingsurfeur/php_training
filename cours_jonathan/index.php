<?php

require_once 'Personnage.php';

$merlin = new Personnage('Merlin');

$harry = new Personnage('Harry');

var_dump($harry->vie);
$merlin->attaque($harry);
var_dump($harry->vie);

