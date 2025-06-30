<?php

require_once 'Model/Livre.php'; // Charge la classe Livre
require_once 'Model/Utilisateur.php'; // Charge la classe Utilisateur

// Instanciation de la classe Livre
$petitPrince = new Livre(); // Ceci est un objet issue de la classe Livre

$petitPrince
    ->setTitre('Le Petit Prince')
    ->setNbPage(128)
    ->setAuteur('Antoine de St-Exupéry')
    ->setEdition('Gallimard')
    ->setIsbn('9783140464079')
; // L'opération de compléter un objet se nomme hydratation

//--------------------------------------------------

// Instanciation de la classe Utilisateur
$bob = new Utilisateur();

$bob
    ->setNom('Bob')
    ->setEmail('bob@gmail.com')
    ->setIdentifiant('tahitibob')
    ->setDateInscription(new \DateTime('1988-01-01')) // Les dates sont des objets
;

echo '<h1>Le livre nommé ' . $petitPrince->getTitre() . ' est entre les mains de ' . $bob->getNom() . '.</h1>';

var_dump($petitPrince, $bob);