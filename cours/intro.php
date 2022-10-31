<?php

/**
 * POO: Programmation orientée objet => On visualise notre code sous forme d'objet
 * Avantages: 
 *      Plus facile pour travailler en équipe et revenir sur notre code plus tard
 *      Sécurisation du code
 * Inconvénients:
 *      Grande quantité de fichiers
 * 
 * Chaque objet possède des propriétés et des méthodes
 * propriétés: Caractéristiques de notre objet
 * méthodes: fonctions de notre objet
 */

 /***** PHP natif *****/
$chien = [
    "age" => 3,
    "pelage" => ['gris', 'blanc'],
    "nom" => "Pepper"
];

echo $chien["age"];

/***** PHP Objet *****/


class Chien {

    public $age = 3;

    public $pelage = ['gris', 'blanc'];

    public $nom = "Pepper";
}