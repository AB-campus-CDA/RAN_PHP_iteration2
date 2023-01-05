<?php

require 'Human.php';

// instanciation
$marcelline = new Human( "Marcelline", age:40);

$constance = new Human("Constance");

echo $marcelline->nom.PHP_EOL;
echo $marcelline->age.PHP_EOL;
echo $marcelline->maTaille().PHP_EOL;


//unset($constance);

$marcelline->marche();
$constance->assassine($marcelline);