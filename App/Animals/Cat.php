<?php

/**
 * Grâce aux setter, je peux instancier 2 objets d'une même classe et leur attribuer des informations différentes
 */
class Cat {
    // private $name = "Chachat";
    // private $age = 3;
    // private $color = ["blanc"];
    private $name;
    private $age;
    private $color;

    public function cri()
    {
        return "miaou";
    }

    /**
     * Cette méthode est un getter ou accesseur.
     * Il autorise la récupération et l'utilisation d'une propriété private
     *
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Cette méthode est un setter ou mutateur.
     * Il autorise la modification de la valeur d'une propriété private
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getStringColor()
    {
        return implode(" ", $this->color);
        // ["blanc", "marron"] => "blanc marron"
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

}