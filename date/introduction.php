<?php

$startDate  = 577836800;
$endDate    = 1577901600;
$randomDate = 1199145600;
$dates      = [$startDate, $endDate, $randomDate];

sort($dates); // Sort the array
foreach ($dates as $exactDate) {
    echo $exactDate.'<br>';
}

for ($i = 0; $i < count($dates); $i++) {
    echo $dates[$i].'<br>';
}

echo 'Timestamp actuel Unix : '.time().'<br>';
echo 'Timestamp Unix en ms : '.microtime().'<br>';
echo 'Timestamp Unix en ms flottant : '.microtime(true).'<br>';
echo 'mktime : '.mktime(1615200777).'<br>';

// Performance d'un script

$microTimeBefore = microtime(true);
echo 'Bonjour Les Cons !<br>';
$microTimeAfter = microtime(true);

echo $microTimeAfter - $microTimeBefore; // O with XAMPP

// MKTIME function

$heure      = 0;
$minutes    = 0;
$secondes   = 0;
$mois       = 1;
$jour       = 1;
$annee      = 0;
echo mktime($heure, $minutes, $secondes, $mois, $jour, $annee).'<br>'; // Give the timestamp of this current date // in this sort

// DATE function + MKTIME function

echo 'Premier de l\'an 2000 : '.date('d/m/Y H:i:s', mktime($heure, $minutes, $secondes, $mois, $jour, $annee)).'<br>';
echo 'Le lendemain de l\'an 2000 : '.date('d/m/Y H:i:s', mktime($heure, $minutes, $secondes, $mois, date($jour + 1), $annee)).'<br>';
echo 'Le mois suivant du jour de l\'an... : '.date('d/m/Y H:i:s', mktime($heure, $minutes, $secondes, date($mois + 1), $annee)).'<br>';
echo mktime(8, 15, 0, null, -1);
echo date('H:i', mktime(8, 5, null, null, null, null)).'<br>';
echo date('d/m/Y', mktime(0, 0, 0, 4, 1, 2020)).'<br>';