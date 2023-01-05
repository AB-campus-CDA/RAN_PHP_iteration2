<?php
namespace App\HumanRace;

//require_once 'class/HumanRace/Human.php';


class Man extends Human
{
    static public function pilosite()
    {
        return "Pilosité élevée".PHP_EOL;
    }
    public $force = 2;
}