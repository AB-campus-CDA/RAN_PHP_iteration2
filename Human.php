<?php

class Human {

    public $taille;
    public $nom;
    public $age;
    public $leCrimier = 'Le homard';

    public function __construct(string $nom, int $taille = 175, int $age = 30 )
    {
        echo "je suis né.e".PHP_EOL;

        $this->nom = $nom;
        $this->taille = $taille;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo "$this->nom : $this->leCrimier m'a tué.e".PHP_EOL;
    }

    public function assassine(Human $victime) {
        $victime->leCrimier = $this->nom;
        unset($victime);
    }

    public function marche() {
        echo "Moi, $this->nom, je marche".PHP_EOL;
    }

    public function maTaille() {
        return $this->taille+1;
    }


}