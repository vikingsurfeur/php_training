<?php

require_once 'DisplayDescription.php';

abstract class schoolMember implements DisplayDescription
{
    public string $lastname;
    public string $firstname;
    public string $job;

    public function __construct(string $lastname, string $firstname, string $job)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->job = $job;
    }

    public function getTitle(): string
    {
        return '<h3>Je m\'appelle '.$this->firstname.' '.$this->lastname.'</h3><br>';
    }

    public function getDescription(): string
    {
        return '<p>Ma fonction dans l\'établissement est '.$this->job.'</p><br>';
    }
}