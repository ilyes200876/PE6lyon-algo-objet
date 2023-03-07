<?php

class Adresse {
    public $numero;
    public $voirie;
    public $codePostal;
    public $ville;
    public $pays;
}

class Restaurant {
    public $nom;
    public Adresse $adresse;
}

$restaurant = new Restaurant();
$restaurant->nom = "Minanee";
$restaurant->adresse = new Adresse();
$restaurant->adresse->numero = 2;
$restaurant->adresse->voirie = "rue des poiriers";
$restaurant->adresse->codePostal = "69007";
$restaurant->adresse->ville = "Lyon";
$restaurant->adresse->pays = "France";

echo "Le restaurant " . $restaurant->nom . " est situé à " . $restaurant->adresse->ville . PHP_EOL;
var_dump($restaurant);
echo PHP_EOL . '--------------------------------------' . PHP_EOL . PHP_EOL ;