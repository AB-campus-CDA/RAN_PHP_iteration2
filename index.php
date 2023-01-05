<?php

namespace App;
require_once 'vendor/autoload.php';

use App\HumanRace\{
    Human,
    Woman,
    Man
};

/*require 'class/HumanRace/Woman.php';
require 'class/HumanRace/Man.php';*/

Human::howMany();
// instanciation
$marcelline = new Woman( "Marcelline", "DeLaHaute", age:40);

$constance = new Woman("Constance", "Dupont");

Human::howMany();
echo $marcelline->nom.PHP_EOL;
echo $marcelline->age.PHP_EOL;
echo $marcelline->maTaille().PHP_EOL;


//unset($constance);

$marcelline->marche();

$constance->assassine($marcelline);
//unset($marcelline);

$marcelline->marche();


if ($marcelline->leCrimier !== 'Le homard') {
    unset($marcelline);
}
Human::howMany();
// ici il ne reste plus que Constance (normalement)

$constance->setSecret("j'aime le chocolat");
$chut = $constance->getSecret();
echo "Le secret de Constance est : $chut".PHP_EOL;

// genres
$adam = new Man("Adam", "LeVicieux");
echo $adam->force.PHP_EOL;
echo $constance->force.PHP_EOL;

Human::howMany();

// kids ?
$constance->faireEnfant();
//$adam->faireEnfant();


