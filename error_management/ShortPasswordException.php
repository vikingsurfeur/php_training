<?php


class ShortPasswordException extends Exception
{
    public string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
        parent::__construct('Le mot de passe est trop court !', 23);
    }
}