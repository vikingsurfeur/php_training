<?php


class Couple
{
    public Buyer $user1;
    public Buyer $user2;

    public function __construct(Buyer $user1, Buyer $user2)
    {
        $this->user1 = $user1;
        $this->user2 = $user2;
    }
}