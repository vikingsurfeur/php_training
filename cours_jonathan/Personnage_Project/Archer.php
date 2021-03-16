<?php


class Archer extends Personnage
{
    protected int $vie = 40; // I can modified this variable with the protected parameters
    // I can't modified it if the parent variable was in private mode

    public function attaque(Personnage $personnage): int
    {
        return parent::attaque($personnage).parent::attaque($personnage);
    }
}