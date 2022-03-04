<?php

/** Pour créer une classe, on utilise le mot clef "class", 
 * suivie par le nom de cette classe en upper camel case (MonPersonnageAMoi)
 * Les bonnes pratiques demandent 1 classe = 1 fichier 
 * idéalement portant le même nom que la classe
 * 
 */

class Personnage
{
    // Attributs (ce sont des variables) - property (propriété)

    // privées (innacessible en dehors de la classe)
    private $force = 50;
    private $endurance = 100;
    private $degats;

    // publiques (accessibles et modifiables en dehors de la classe)
    public $nom = "Anonyme";
    public $experience;

    // Constantes, variable non variable, doit être définie, elles sont par défaut publique
    const DIS_BONJOUR = "coucou";

    // Méthodes (fonctions précédées d'une visibilité qui permettent de faire agir l'instance de classe)

    // les fonction  publiques peuvent être appelées en dehors de la classe
    public function afficheForce()
    {
        // affichage de texte + $this représente l'instance et affichage d'un attribut privé.
        echo "La force du personnage est {$this->force}";
        // on peut appeler la fonction privée ici, car on est dans la classe (de l'instance)
        $this->forcePlusUn();
    }

    // fonction privée, ne peut être appelée que depuis la classe !
    private function forcePlusUn()
    {
        $this->force += 1;
    }
}
