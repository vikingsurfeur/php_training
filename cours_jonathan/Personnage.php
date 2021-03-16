<?php


class Personnage
{
    private int $vie = 80;
    private int $atk = 20;
    private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function setNom(string $nom) // Implemented a Setter for my private variable
    {
        $this->nom = $nom;
    }

    public function getNom(): string // Implemented a Getter for my private variable
    {
        return $this->nom;
    }

    public function mort(): string
    {
        if ($this->vie <= 0) {
            echo 'Le personnage est mort';
        } else {
            echo 'Votre personnage est bien vivant';
        }
    }

    public function regenerer(int $gainVie = null): int
    {
        if (is_null($gainVie)) {
            $this->vie = 80;
        } else {
            $this->vie += $gainVie;
        }
    }

    public function attaque(Personnage $personnage): int
    {
        $personnage->vie -= $this->atk;
    }
}