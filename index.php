<?php

require 'Human.php';

// instanciation
$marcelline = new Human( "Marcelline", "DeLaHaute", age:40);

$constance = new Human("Constance", "Dupont");

echo $marcelline->nom.PHP_EOL;
echo $marcelline->age.PHP_EOL;
echo $marcelline->maTaille().PHP_EOL;


//unset($constance);

$marcelline->marche();
$constance->assassine($marcelline);

// ici il ne reste plus que Constance

$constance->setSecret("j'aime le chocolat");
$chut = $constance->getSecret();

echo "Le secret de Constance est : $chut".PHP_EOL;