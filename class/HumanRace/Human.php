<?php
namespace App\HumanRace;


class Human {

    public $taille;
    public $nom;
    public $age;
    public $leCrimier = 'Le homard';
    private $secret;
    public $force = 1;

    public function __construct(string $prenom, string $nomDeFamille, int $taille = 175, int $age = 30 )
    {
        echo "je suis né.e".PHP_EOL;

        $this->nom = $prenom.' '.$nomDeFamille;
        $this->taille = $taille;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo "$this->nom : $this->leCrimier m'a tué.e".PHP_EOL;
    }

    public function assassine(Human $victime) {
        $victime->leCrimier = $this->nom;
        echo 'Coups de couteau'.PHP_EOL;
        unset($victime);    // fucking don't work that destroy the ref, not what is referred to
    }

    public function marche() {
        echo "Moi, $this->nom, je marche".PHP_EOL;
    }

    public function maTaille() {
        return $this->taille+1;
    }

    public function setSecret(string $secret) {
        $this->secret = $secret;
    }

    /**
     * @return mixed
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

}