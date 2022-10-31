<?php
require_once "App/Animals/Cat.php";

// $cat = new Cat();
// $cat->setName("Chachat");
// $cat->setAge(3);
// $cat->setColor(["Rouge, Vert"]);

// $cat2 = new Cat();
// $cat2->setName("Chachat");
// $cat2->setAge(3);
// $cat2->setColor(["Rouge, Vert"]);

$cat = new Cat("Chachat", 3, ["Rouge", "Vert"]);
$cat2 = new Cat("Croquette", 5, ["Gris"]);

var_dump($cat);
echo "<br>";
var_dump($cat2);