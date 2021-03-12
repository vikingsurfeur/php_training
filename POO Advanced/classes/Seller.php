<?php

use JetBrains\PhpStorm\Pure;
require_once 'Tooltipable.php';
require_once 'Buyer.php';

class Seller extends Buyer// INHERIT OF USER CLASSES, IT'S MAGIC YOU KNOW...
{
    public string $companyName;

    #[Pure] public function __construct(string $username, string $email, string $companyName)
    {
        parent::__construct($username, $email);
        $this->companyName  = $companyName;
    }

    public function getDisplayName(): string
    {
        return $this->companyName.' - '.parent::getDisplayName();
    }
}