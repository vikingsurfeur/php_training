<?php

// Some expressions / REGEX theory

/*
/^http/         => commence par 'http'
/^http/i        => commence par 'http' ou 'HTTP' en mode intensive (insensible à la casse)
/\./            => contient un point
/er$/           => fini par 'er'
/[aeiouy]/      => défini un groupe, ici les voyelles
/[aeiouy]r/     => contient une voyelle suivi d'un r
/\w/            => lettres, chiffres ou _
/\d/            => digital / chiffres
/\s/            => contient un espace qui est defini aussi par une tabulation, un espace ou une retour chariot \n
/[a-z]/         => groupe contenant une minuscule allant de a à z
/[A-Z]/         => groupe contenant une majuscule allant de A à Z
/[0-9]/         => groupe contenant un chiffre de 0 à 9
/(fr|es|gb)/    => 'fr' ou 'es' ou 'gb'
/^(fr|gb)$/     => la chaine est exactement 'fr' ou 'gb'
/(to)?/         => contient une fois maximum la chaine 'to' 0 ou 1
/(to)+/         => contient une fois minimum la chaine 'to' minimum 1
(to)*           => contient 0 fois ou plusieurs fois la chaine 'to'
/(to){2}/       => deux fois la chaine 'to' qui se suit
/(to){2,5}/     => entre deux et cinq fois la cahine 'to' qui se suit
*/

$patternTel     = '/^(\d\d\s){4}(\d\d)$/'; // Contient un numéro de téléphone séparé par des espaces
$patternTelTwo  = '/^(\d\d\.){4}(\d\d)$/'; // Contient un numéro de téléphone séparé par des points
$subjectTel     = '04 90 72 56 89';
$subjectTelTwo  = '04.90.72.56.89';

// La fonction preg_match() vérifie le pattern injecté, par rapport à un sujet, qui va là renvoyer sous forme de tableau dans le troisième paramètre

$pregMatchTel       = preg_match($patternTel, $subjectTel);
$pregMatchTelTwo    = preg_match($patternTelTwo, $subjectTelTwo);

if ($pregMatchTel) {
    echo 'Ceci est bien un numéro de téléphone séparé par des espaces<br>';
} else {
    echo 'Oups, ceci n\'est pas un numéro de téléphone<br>';
}

if ($pregMatchTelTwo) {
    echo 'Ceci est bien un numéro de téléphone séparé par des points<br>';
} else {
    echo 'Oups, ceci n\'est pas un numéro de téléphone<br>';
}



