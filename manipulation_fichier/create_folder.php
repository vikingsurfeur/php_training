<?php

umask(0777); // Change the access mode of the current folder
mkdir('fichier_write'); // Create a folder in the current folder / if mkdir('fichier_write', 0777, TRUE) True is recursive parameters 
mkdir('fichier_write/models/'); // Create a second folder into the previous folder...
chmod('fichier_write', 0755); // Change the acces mode of folder to 0755
rmdir('fichier_write/models/'); // Delete the child folder
rmdir('fichier_write');

// Read the folder

mkdir('repertoire'); // Create a new folder
mkdir('repertoire/model'); // Create a new folder into the current folder
$arrayFolder    = scandir('./'); // scandir function return an Array et list the folder

echo "<ul style='list-style: none; font-size: 2rem; font-family: Helvetica, sans-serif'>";
    foreach ($arrayFolder as $arrayValue) {
        if ($arrayValue === '.' || $arrayValue === '..') continue; // We skip the dot relative path with this if condition and this continue function
        echo '<li>'.$arrayValue.'</li><br>';
    }
echo "</ul>";

fopen('')


