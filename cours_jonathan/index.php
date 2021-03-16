<?php

require_once 'Personnage.php';

$merlin = new Personnage('Merlin');

$harry = new Personnage('Harry');

$harry->setNom('Papou le Pourri');
echo $harry->getNom();
