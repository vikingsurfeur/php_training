<?php

// Add a new Class

class User
{
    public int $id; // Attribut with no value
    public string $civility; // Attribut with no value too
    public string $name     = 'John'; // Default FirstName of our users but the value can change
    public string $username = 'Doe'; // Default Surname of our user but the value can change
}