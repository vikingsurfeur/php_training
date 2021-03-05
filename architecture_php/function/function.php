<?php

// Function MENU ACTIVE LINKS 

function isCurrentUrl(string $url): ?string
{
    if ($_SERVER['REQUEST_URI'] === $url) {
        return 'active';
    }
    return null;
}


// Function TEAM LIST

function getTeamList(): array {
    // On prétend aller chercher la liste sur une BDD
    return [
        'Elon Musk',
        'Bill Gates',
        'Helwett Packard',
        'Steve Jobs'
    ];
}

?>