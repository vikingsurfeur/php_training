<?php


class Personnage
{
    protected int $vie = 80; // Children Class can modified the Variable
    // if variable was defined in private mode, children can't redefined it
    protected int $atk = 20;
    protected string $nom;

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
            return $this->vie = 80;
        } else {
            return $this->vie += $gainVie;
        }
    }

    public function attaque(Personnage $personnage): int
    {
        return $personnage->vie -= $this->atk;
    }
}