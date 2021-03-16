<?php


use JetBrains\PhpStorm\Pure;

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form
{
    /**
     * @var array Données utilisées par le formulaire
     */
    private array $data;

    /**
     * @var string Tag utilisées dans la fonction surround(); Permet d'entourer les groupes input par une <div>
     */
    public string $tag = 'div';

    /**
     * Form constructor.
     * @param array $data Récupère les données $_POST envoyées par le formulaire
     */
    public function __construct(array $data = []) // Give a possibility for an empty array
    {
        $this->data = $data;
    }

    /**
     * @param $html string Entoure le code HTML d'une balise div
     * @return string
     */
    private function surround($html): string
    {
        return "<{$this->tag}>{$html}</{$this->tag}>";
    }

    /**
     * @param $index string Index de la valeur à récupérer
     * @return mixed|null
     */
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null ;
    }

    /**
     * @param string $name Détermine les attributs HTML name / id et for
     * @param string $type Détermine l'attribut type de la balise input
     * @return string
     */
    public function input(string $name, string $type): string
    {
        return $this->surround('<label for="'.$name.'">Renseignez votre nom</label>'.
                '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$this->getValue($name).'">');
    }

    /**
     * @return string Création du bouton de type submit
     */
    #[Pure] public function submit(): string
    {
        return $this->surround('<button type="submit">Validez</button>');
    }
}