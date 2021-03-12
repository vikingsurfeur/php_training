<?php

require_once 'Tooltipable.php';

class Buyer implements Tooltipable
{
    public string $username;
    public string $email;

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getDisplayName(): string
    {
        return $this->username.' ('.$this->email.')';
    }

    public function getTitle(): string
    {
        return $this->username.'<br>';
    }

    public function getDescription(): string
    {
        return $this->email.'<br>';
    }
}