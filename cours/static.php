<?php

// require_once "App/Animals/Cat.php";
// require_once "App/MaClasse.php";

// $cat = new Cat();
// $cat->setName("Chachat");
// $cat->setAge(3);
// $cat->setColor(["Rouge, Vert"]);

// $cat2 = new Cat();
// $cat2->setName("Chachat");
// $cat2->setAge(3);
// $cat2->setColor(["Rouge, Vert"]);

$cat = new CatAnimal("Chachat", 3, ["Rouge", "Vert"], false);
$cat2 = new CatAnimal("Croquette", 5, ["Gris"]);
// $cat3 = new Cat(null, 3, ["marron"], false);

var_dump($cat);
echo "<br>";
var_dump($cat2);
echo "<br>";
// var_dump($cat3);
echo $cat->cri();
echo "<br>";
echo Cat::CRIDUCHAT;
echo "<br>";
echo MaClasse::$staticProp1;
echo "<br>";
echo MaClasse::aurevoir();
echo "<br>";
$classe1 = new MaClasse();
$classe2 = new MaClasse();
echo "-----------------------------";
echo "<br>";
echo "Valeur par défaut";
echo "<br>";
echo "-----------------------------";
echo "<br>";
echo $classe1->adieu();
echo "<br>";
echo $classe2->adieu();
echo "<br>";

echo "-----------------------------";
echo "<br>";
echo "Modification de property2 pour l'objet classe 1";
echo "<br>";
echo "-----------------------------";
echo "<br>";
$classe1->setProperty2("Alex");
echo $classe1->adieu();
echo "<br>";
echo $classe2->adieu();
echo "<br>";

echo "-----------------------------";
echo "<br>";
echo "Modification de staticProperty1";
echo "<br>";
echo "-----------------------------";
echo "<br>";
MaClasse::$staticProp1 = "Salut";
echo $classe1->adieu();
echo "<br>";
echo $classe2->adieu();
echo "<br>";