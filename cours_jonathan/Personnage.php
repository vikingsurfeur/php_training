<?php


class Personnage
{
    public int $vie = 80;
    public int $atk = 20;
    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function mort()
    {
        if ($this->vie <= 0) {
            echo 'Le personnage est mort';
        } else {
            echo 'Votre personnage est bien vivant';
        }
    }

    public function regenerer(int $gainVie = null)
    {
        if (is_null($gainVie)) {
            $this->vie = 80;
        } else {
            $this->vie += $gainVie;
        }
    }

    public function attaque(Personnage $personnage)
    {
        $personnage->vie -= $this->atk;
    }
}