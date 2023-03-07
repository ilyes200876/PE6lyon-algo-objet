<?php

/* 
 Écrire le ou les objets qui permet(tent) de décrire la carte du 
restaurant, avec les entrées, les plats, et les desserts. Chaque 
élément de la carte a un nom, une description, un prix, et une 
liste d’allergènes
 Affichez la carte en HTML

*/

/*
carte => entrées, plats, desserts
élément de carte => nom, description, prix, liste d'allergènes
*/

class ÉlémentCarte {
  public $nom;
  public $description;
  public $prix;
  public $allergènes;
}

class Carte {
  public $entrées;
  public $plats;
  public $desserts;
}

// Création de la carte
$carte = new Carte();
// Création des listes vides par défaut
$carte->entrées = [];
$carte->plats = [];
$carte->desserts = [];
// Création de la première entrée
$entrée1 = new ÉlémentCarte();
$entrée1->nom = "Taboulé";
$entrée1->description = "Semoule avec tomates et olives";
$entrée1->prix = 12.99;
$entrée1->allergènes = [];
// Rattachement à la liste
$carte->entrées[] = $entrée1;


//Sinon, avec une fonction :
function créerÉlémentCarte($nom, $description, $prix, $allergènes) {
  $e = new ÉlémentCarte();
  $e->nom = $nom;
  $e->description = $description;
  $e->prix = $prix;
  $e->allergènes = $allergènes;
  return $e;
}
$carte->entrées[] = créerÉlémentCarte(
  "Salade césar",
  "Salade tomates croûtons olives",
  "11,49 £",
  []
);