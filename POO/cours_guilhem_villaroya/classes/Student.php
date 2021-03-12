<?php


class Student
{
    public string $lastname;
    public string $firstname;
    public int $age;
    public string $address;
    public int $zipcode;
    public string $city;

    public function __construct(
        $lastname,
        $firstname,
        $age,
        $address,
        $zipcode,
        $city
    )
    {
        $this->lastname     = $lastname;
        $this->firstname    = $firstname;
        $this->age          = $age;
        $this->address      = $address;
        $this->zipcode      = $zipcode;
        $this->city         = $city;
    }

    public function sayHello(): string
    {
        return
            'Hi there, I\'m '.
            $this->firstname.' '.
            $this->lastname.' '.
            'I\'m '.
            $this->age.' Years Old '.
            'and I\'m living at '.
            $this->address.' '.
            $this->zipcode.' '.
            $this->city.'<br>';
    }
}