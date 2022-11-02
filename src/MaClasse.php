<?php
namespace App;
/**
 * Une classe est un moule permettant de générer autant d'objets qu'on le souhaite
 * Une classe contient des propriétés et des méthodes.
 * Une propriété ou property est une information de notre objet
 * Une méthode ou method est une fonction de notre objet
 * 
 * Chaque propriété ou méthode possède une visibilité. 
 * La visibilité définie la portée d'utilisation de l'élément.
 * Définir les visibilité s'appelle l'encapsulation.
 * Il en existe 3 différentes:
 * - public: Une propriété ou méthode public est acessible partout dans notre code où la classe est instanciée
 * - private: Une propriété ou méthode private n'est accessible que dans la classe où elle est définie
 * - protected: Une propriété ou méthode protected est accessible dans la classe où elle est définie et dans les classes enfants
 */
class MaClasse {
    /**
     * $property1, 2 et 3 sont des propriétés. 
     * Elles peuvent avoir une information par défaut ou être null
     */
    private $property1 = "Hello";
    private $property2 = "World";

    private $property3;

    /**
     * Une classe peut avoir des propriétés et méthodes static. Ces éléments appartiennent à la classe et non à l'objet.
     * Ils nous permettent de récupérer une information ou d'effectuer une action sans avoir à instancier la classe.
     * De plus, appartenant à la class, si une propriété est modifiée, elle sera modifiée pour tous les objets créés.
     * 
     * Les propriétés et méthodes static ont une visibilité.
     * Pour les récupérer dans la class où ils sont définis, on va utiliser self::$propriété.
     * self faisant référence à la class et :: étant l'opérateur de résolution de portée.
     * 
     * Pour utiliser staticProp1 en dehors de la class, on écrira MaClasse::$staticProp1 
     *
     * @var string
     */
    public static $staticProp1 = "Bye";
    private static $staticProp2 = " everyone";

    public static function aurevoir ()
    {
        return self::$staticProp1 . self::$staticProp2;
    }

    /**
     * Une méthode non static peut utiliser des éléments statics sans problème.
     * Mais l'inverse n'est pas possible.
     *
     * @return string
     */
    public function adieu()
    {
        return self::$staticProp1 . ' ' . $this->property2;
    }

    /**
     * helloWorld() est une méthode, elle retourne une chaine de caractère dans cet exemple
     */
    function helloWorld()
    {
        return "Hello world!";
    }

    function hello()
    {
        /**
         * Dans une classe, on peut utiliser les propriétés et méthodes de l'objet directement dans une méthode
         * Pour cela on utilise l'opérateur de portée $this qui fait référence à l'OBJET en question
         */
        if (!is_null($this->property1) && !is_null($this->property2)) {
            return $this->property1 ." ". $this->property2;
        } else {
            return $this->helloWorld();
        }
    }

    function getProperty1()
    {
        return $this->property1;
    }

    function getProperty2()
    {
        return $this->property2;
    }
    
    function setProperty2(string $prop)
    {
        $this->property2 = $prop;
    }
}