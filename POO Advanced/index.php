<?php

require_once './classes/Buyer.php';
require_once './classes/Seller.php';

$buyer = new Buyer(
    'Louis',
    'l.brochu@sfr.fr'
);

$seller = new Seller(
    'davidCoder',
    'd.bouscarle@sfr.fr',
    'David Bouscarle Photographies',
);

function displayUsername(Buyer $user): void // I can put a Seller into the function because he inherit of classes Buyer
    // But when I typing the function with a seller like this function (Seller $), I don't put a $user because it's a
    // Class master of Seller
{
    echo 'Connecté en tant que : '.$user->getDisplayName();
}

function displayToolTip(Tooltipable $tooltipable): void
{
    echo    '<div>
                <h3>'.$tooltipable->getTitle().'</h3>
                <p>I\'m '.$tooltipable->getDescription().'</p>
            </div>';
}

displayUsername($buyer);
echo '<br>';
displayUsername($seller);
displayToolTip($seller);

