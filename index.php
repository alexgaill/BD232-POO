<?php

/**
 * Pour générer un objet, 
 * nous allons devoir charger la class sur l'index
 * et l'instancier.
 */

require_once "MaClasse.php";

/**
 * J'instancie la classe MaClasse et obtiens un objet
 */
$classe = new MaClasse();
$classe2 = new MaClasse();
$classe3 = new MaClasse();
var_dump($classe);
echo "<br>";
var_dump($classe2);
echo "<br>";
var_dump($classe3);
echo "<br>";

/**
 * Une méthode est appelée de la façon suivante
 */
echo "<h1>". $classe->hello() ."</h1>";

/**
 * Une propriété est appelée de la façon suivante
 */
// echo "<h1>". $classe->property1 ." ". $classe->property2 ."</h1>";
echo "<h1>". $classe->getProperty1() ." ". $classe->getProperty2() ."</h1>";

/**
 * Si un $ est placé devant la propriété utilisé, PHP va rechercher une variable dans le script ayant ce nom
 * Ici il va retourner une erreur car sur index.php la variable $property1 n'existe pas.
 */
// echo "<h1>". $classe->$property1 ." ". $classe->property2 ."</h1>";

/**
 * On peut modifier la valeur d'une propriété d'un objet.
 * La valeur modifiée n'impactera que l'objet en question. Les autres objets ne seront pas touchés.
 */
// $classe2->property2 = "World!";
// $classe2->property3 = 439734219468;

var_dump($classe);
echo "<br>";
var_dump($classe2);