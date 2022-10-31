<?php

/**
 * Grâce aux setter, je peux instancier 2 objets d'une même classe et leur attribuer des informations différentes
 */
class Mammifere {
    // private $name = "Chachat";
    // private $age = 3;
    // private $color = ["blanc"];
    protected $name;
    private $age;
    private $color;

    /**
     * __construct() est une méthode magique. 
     * C'est une méthode qui est appelée automatiquement à un moment de la vie de l'objet
     * Le constructeur est appelé à l'instanciation d'un objet
     *
     * @param string $name
     * @param int $age
     * @param array $color
     */
    public function __construct($name = null, $age = null, $color= [])
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
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

    /**
     * Retourne les couleurs de l'animal en chaine de caractère
     *
     * @return string
     */
    public function getStringColor(): string
    {
        return implode(" ", $this->color);
        // ["blanc", "marron"] => "blanc marron"
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

}