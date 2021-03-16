<?php

require_once 'Form.php';
use JetBrains\PhpStorm\Pure;
class BootstrapForm extends HTML\Form
{
    protected function surround($html): string
    {
        return "<div class='form-group'>{$html}</div>";
    }

    public function input(string $name, string $type): string
    {
        return $this->surround('<label for="'.$name.'">Renseignez votre nom</label>'.
            '<input 
            class="form-control" 
            type="'.$type.'" 
            id="'.$name.'" 
            name="'.$name.'" 
            value="'.$this->getValue($name).'">');
    }

    #[Pure] public function submit(): string
    {
        return $this->surround('<button type="submit" class="btn btn-outline-primary">Validez</button>');
    }
}