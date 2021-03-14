<?php

use JetBrains\PhpStorm\Pure;

require_once 'SchoolMember.php';

class SchoolStudent extends SchoolMember
{
    public array $favoriteLearning;

    #[Pure] public function __construct(string $lastname, string $firstname, string $job, array $favoriteLearning)
    {
        parent::__construct($lastname, $firstname, $job);
        $this->favoriteLearning = $favoriteLearning;
    }

    public function getTitle(): string
    {
        return parent::getTitle();
    }

    public function getDescription(): string
    {
       return parent::getDescription().
           '<p>et mes matières préférées sont '.
           implode((', '),($this->favoriteLearning)).
           '</p><br>';
    }
}