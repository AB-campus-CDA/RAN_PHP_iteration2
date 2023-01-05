<?php
namespace App\HumanRace;

//require_once 'class/HumanRace/Human.php';


class Woman extends Human
{
    static public function pilosite()
    {
        return "Pilosité faible".PHP_EOL;
    }

    public function faireEnfant() {
        echo 'Oui, je peux faire un enfant'.PHP_EOL;
    }
}