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

const PATTERN_TELSPACE      = '/^(\d\d\s){4}(\d\d)$/'; // Contient un numéro de téléphone séparé par des espaces
const PATTERN_TELDOT        = '/^(\d\d\.){4}(\d\d)$/'; // Contient un numéro de téléphone séparé par des points
const PATTERN_MAIL          = '/^[\w\.-]+@[\w\.-]+\.[a-z]{2,5}$/i'; // Vérification email
$subjectTel     = '04 90 72 56 89';
$subjectTelTwo  = '04.90.72.56.89';
$subjectMail    = 'g.lagaffe@example.info';

// La fonction preg_match() vérifie le pattern injecté, par rapport à un sujet, qui va là renvoyer sous forme de tableau dans le troisième paramètre

$pregMatchTel       = preg_match(PATTERN_TELSPACE, $subjectTel);
$pregMatchTelTwo    = preg_match(PATTERN_TELDOT, $subjectTelTwo);
$pregMatchMail      = preg_match(PATTERN_MAIL, $subjectMail);

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

if ($subjectMail) echo 'Ceci est un bien un email valide<br>';
else echo 'Veuillez ressaisir votre email<br>';

// I can checking a right email with this function

var_dump(filter_var('g.lagaffe@example.info', FILTER_VALIDATE_EMAIL));

// On a la possibilité de récupérer les données de la comparaison dans un tableau comme ceci preg_match($pattern, $subject, $matches); où $matches renvoi un array contenant les données de comparaison

// Fonction preg_replace

$date               = 'April 15, 2020';
const PATTERN_DATE  = '/(\w+) (\d+), (\d+)/i';
$replaceDate        = '${2} ${1} ${3}'; // Prend le contenu de la chaine 2 et la met en position 1, prend la chaine 1 et la met en position 2 et la 3 reste en 3
echo preg_replace(PATTERN_DATE, $replaceDate, $date).'<br>';

$dateTwo                = '30/09/2020';
const PATTERN_DATE_US   =  '/(\d+)\/(\d+)\/(\d+)/i'; // Pensez à échaper les slashs avec les backs slashs
$replaceDateUs          = '${2}/${1}/${3}';
echo preg_replace(PATTERN_DATE_US, $replaceDateUs, $dateTwo).'<br>';

// return preg_match_all

$patternPregAll     = '/[2-6]/';
$subjectPregAll     = '0123456789 0123456789';
$pregMatchAll       = preg_match_all($patternPregAll, $subjectPregAll, $matchesPregAll);

var_dump($pregMatchAll);







