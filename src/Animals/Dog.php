<?php

use App\Animals\Mammifere;
require_once "Mammifere.php";

class Dog extends Mammifere{

    public function __construct($name, $age, $color, $felin = false)
    {
        parent::__construct($name, $age, $color);
        if (!$felin) {
            $this->name .= " le chien";
        }
    }

    public function cri(): string
    {
        return "ouaf";
    }

}