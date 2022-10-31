<?php
require_once "Mammifere.php";

/**
 * Une classe qui extends d'une autre classe est une classe qui utilise l'héritage.
 * 
 * L'héritage permet de limiter les doublons. Lorsque 2 classes ont des propriétés et méthodes identiques,
 * nous allons mettre ces éléments sur une classe parent qui sera étendue par les enfants. 
 * La classe enfant possède ainsi les mêmes propriétés et méthodes que le parent.
 */
class Cat extends Mammifere{

    public const CRIDUCHAT = "miaou";
    
    /**
     * Constructeur de la classe Cat
     *
     * @param string $name Le nom de l'animal
     * @param int $age L'âge de l'animal
     * @param array|null $color La couleur de pelage de l'animal
     * @param boolean $felin L'animal est-il un félin?
     * @author Alexandre
     */
    public function __construct(string $name, int $age, ?array $color, bool $felin = true)
    {
        parent::__construct($name, $age, $color);
        if ($felin) {
            // Exécuter un code particulier
            // $this->name = $this->name . " le chat";
            $this->name .=  " le chat"; // identique à la ligne du dessus
        }
    }

    public function doublecri()
    {
        return self::CRIDUCHAT . ' ' . self::CRIDUCHAT;
    }

    public function cri()
    {
        return self::CRIDUCHAT;
    }

}