<?php

// Add a new Class

class User
{
    // Add some attribute
    public int $id; // Attribute with no value
    public string $civility; // Attribute with no value too
    public string $name     = 'John'; // Default FirstName of our users but the value can change
    public string $username = 'Doe'; // Default Surname of our user but the value can change

    // Add a constructor
    public function __construct(int $id, string $civility, string $name, string $username)
    {
        $this->id       = $id;
        $this->civility = $civility;
        $this->name     = $name;
        $this->username = $username;
    }

    // Add a method
    public function sayHello(): string
    {
        return
            'Bonjour, je m\'appelle '.
            $this->civility.' '.
            $this->username.
            ' et mon id est le n° '.
            $this->id;
    }

    // Add a destruct, use for close a connection, BDD or a file
    // Call automatically with unset or a reafected variable
    public function __destruct()
    {
        echo 'This user '.$this->username.' is died...';
    }
}

class Couple
{
    public User $user1;
    public User $user2;

    public function __construct(User $user1, User $user2)
    {
        $this->user1 = $user1;
        $this->user2 = $user2;
    }
}