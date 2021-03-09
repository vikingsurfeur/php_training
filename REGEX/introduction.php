<?php

$subject        = 'Bonjour, je m\'appelle David Bouscarle et j\'ai 40 ans';
$searchValue    = 'ou';
$pattern        = "/$searchValue/"; // I can put the DELIMITER like this : '/', '`', '~'

preg_match($pattern, $subject, $searchPattern); // Search the first occurences or a simple occurences
preg_match_all($pattern, $subject, $searchAllPattern); // Search ALL occurences

// preg_match and preg_match_all return a BOOL, I can write a condition like this :

if (preg_match($pattern, $subject, $searchPattern)) {
    echo $searchValue.' est présent dans '.$subject.'<br>';
} else {
    echo $searchValue.' n\'est pas présent dans '.$subject.'<br>';
}

// var_dump(preg_match($pattern, $subject, $searchPattern));

// $arrayPattern       = count($searchPattern);
// $arrayAllPattern    = count($searchAllPattern);

// for ($i = 0; $i < $arrayPattern; $i++) {
//     echo $arrayPattern[$i].'<br>';
// }

// var_dump($searchAllPattern);

// foreach ($searchPattern as $searchPatternValue) {
//     echo $searchPatternValue.'<br>';
// }

// // for ($i = 0; $i < $arrayAllPattern; $i++) {
// //     echo $arrayAllPattern[$i].'<br>';
// // }

// foreach ($searchAllPattern as $searchAllPatternKey) {
//     foreach ($searchAllPatternKey as $searchAllPatternValue) {
//         echo $searchAllPatternKey.' => '.$searchAllPatternValue.'<br>';
//     }
// }

$subjectTwo     = '0123456789';
$searchValueTwo = '456';
$patternTwo     = "/$searchValueTwo/";
$offset         = 7; // In can defined the number of the search start, here 5

if (preg_match($patternTwo, $subjectTwo, $searchPatternTwo, null, $offset)) {
    echo $searchValueTwo.' est présent dans la chaine '.substr($subjectTwo, $offset);
} else {
    echo $searchValueTwo.' n\'est pas présent dans la chaine de caractère '.substr($subjectTwo, $offset);
}


