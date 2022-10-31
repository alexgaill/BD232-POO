<?php
require_once "Mammifere.php";

class Dog extends Mammifere{

    public function __construct($name, $age, $color, $felin = false)
    {
        parent::__construct($name, $age, $color);
        if (!$felin) {
            $this->name .= " le chien";
        }
    }

    public function cri()
    {
        return "ouaf";
    }

}