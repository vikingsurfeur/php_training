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

$heure      = 12;
$minutes    = 58;
$secondes   = 35;
$mois       = 12;
$jour       = 31;
$annee      = 2020;
echo mktime($heure, $minutes, $secondes, $mois, $jour, $annee).'<br>'; // Give the timestamp of this current date // in this sort

