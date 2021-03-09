<?php

// Write in a file

file_put_contents('test.txt', 'premiere ligne de contenu'); // Contenu écrasé par la ligne de scrpit ci-dessous
file_put_contents('test.txt', "seconde ligne de contenu que j'écris\r\n"); // Ecrase le contenu si une ligne est déjà en place
file_put_contents('test.txt', 'contenu non écrasé grâce à la constante FILE_APPEND'.PHP_EOL, FILE_APPEND); // or PHP.EOL constant
file_put_contents('test.txt', 'nouvelle ligne de contenu et saut de ligne grace à PHP.EOL'.PHP_EOL, FILE_APPEND);

// Read the content of the file

$fileContent = file_get_contents('test.txt');
echo nl2br($fileContent); //nl2br detect breakline, not bad but not good too lol...

// format the file with <pre>

echo '<pre>'.$fileContent.'</pre>'; // Format in courrier New font, same width and height for all leters and numbers

// Write in a file, complete version

$dbh = fopen('fopen_file.txt','w+'); // ouverture du fichier en mode écriture fin de ligne curseur
fwrite($dbh, 'encore une ligne à l\'aide la fonction fwrite'.PHP_EOL, FILE_APPEND); // écriture de la ligne
fputs($dbh, 'une nouvelle ligne à l\'aide de la fonction fputs'.PHP_EOL, FILE_APPEND);  // écriture de la ligne à l'aide de la fonction fputs
fclose($dbh);

// Read the content in read mode fopen

$dbhTwo = fopen('fopen_file.txt', 'r' ); // Mode lecture seule
while ($line = fgets($dbhTwo, 4096)) { // or while (($line = fgets($dbhTwo)) !== false)
    echo '<pre>'.$line.'</pre>';
}
fclose($dbhTwo);

// Lecture en tableau

$arrayReading = file('test.txt'); // Read the file into array mode
foreach ($arrayReading as $line => $text) {
    echo '<p>'.($line + 1).' => '.$text.'</p>';
}

// Make an array CSV format for Excel

$arrayCsv = [
    ['username', 'David'],
    ['age', 40],
    ['job', 'Suceur de réglise']
];

$dbhThree = fopen('fichier.csv', 'w');
foreach ($arrayCsv as $davidKey) {
    fputcsv($dbhThree, $davidKey, ';');
}
fclose($dbhThree); // nE JAMAIS oublier de fermer son fichier !!!

// Lire du CSV

$dbhFour = fopen('fichier.csv', 'r'); // OUverture en lecture
while ($ligneContenu = fgetcsv($dbhFour, 4096, ';')) {
    print_r($ligneContenu); // 4096 max line !!!
    echo '<br>';
}
fclose($dbhFour);
