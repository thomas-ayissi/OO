<?php

// appel de notre fichier de class Personnage
require_once "Personnage.php";

// Personnage est donc l'usine (class) à créer des personnages, tant qu'elle n'est pas appelée, elle ne fait rien

// on va instancier, donc créer un objet, en utilisant le mot clef "new", et on va le mettre dans une variable ($moi)

$moi = new Personnage();

$toi = new Personnage();



echo '$moi est une instance de Personnage (1er instance) :';
// affichage de l'objet (instance) // object(Personnage)[1]
var_dump($moi);
echo '$toi est une instance de Personnage (2eme instance) :';
// affichage de l'objet (instance) // object(Personnage)[2]
var_dump($toi);
