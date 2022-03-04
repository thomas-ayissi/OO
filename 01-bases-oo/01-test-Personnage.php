<?php

// appel de notre fichier de class Personnage
require_once "Personnage.php";

// Personnage est donc l'usine (class) à créer des personnages, tant qu'elle n'est pas appelée, elle ne fait rien

// on va instancier, donc créer un objet, en utilisant le mot clef "new", et on va le mettre dans une variable ($moi)

// instance 1
$moi = new Personnage();

// instance 2
$toi = new Personnage();



echo '$moi est une instance de Personnage (1er instance) :';
// affichage de l'objet (instance) // object(Personnage)[1]
var_dump($moi);

echo '$toi est une instance de Personnage (2eme instance) :';
// affichage de l'objet (instance) // object(Personnage)[2]
var_dump($toi);

echo "<h4>Affichage d'attributs publics</h4>";
echo '<p>echo $moi->nom affiche ' . $moi->nom . '</p>';
echo '<p>echo $toi->nom affiche ' . $toi->nom . '</p>';

echo "<h4>L'Affichage d'attributs non publics n'est pas possible de la même manière, ni leur modification </h4>";
//echo '<p>echo $moi->force affiche ' . $moi->force . '</p>';
// echo '<p>echo $toi->force affiche ' . $toi->force . '</p>';
echo "Erreur Fatale de type : Fatal error: Uncaught Error: Cannot access private property Personnage::force in D:\CF2m\WEB2021\Qualifiante\PHP\OO\OO\01-bases-oo\01-test-Personnage.php on line 31";

echo "<h4>Modification d'attributs publics</h4>";
echo "<p>Sont facile à faire (trop !)</p>";

$moi->nom = "Michaël";
$toi->nom = 425;
echo '$moi->nom = "Michaël"; va modifier $moi->nom';
echo '<p>echo $moi->nom affiche ' . $moi->nom . '</p>';
echo '$toi->nom = 425; va modifier $toi->nom, Mais on ne voulait pas du numérique !';
echo '<p>echo $toi->nom affiche le numérique ' . $toi->nom . '</p>';
echo '<h3>Risque de bugs volontaires ou pas, parfois non trouvés avant la production, donc gros danger niveau responsabilité </h3>';

echo "<h3>Les méthodes publiques</h3>";
echo "<p>Ce sont les actions permises à l'objet en dehors de la classe (fonctions)</p>";

$moi->afficheForce();
$moi->afficheForce();
$moi->afficheForce();
$toi->afficheForce();

echo "<hr>";
echo "<h3>Pour afficher une constante, on utilise le nom de la classe séparé par :: le nom de la constante - non modifiable !</h3>";
echo 'echo Personnage::DIS_BONJOUR : ' . Personnage::DIS_BONJOUR . '<br> Ceci fonctionne aussi mais n\'est pas conseillé : echo $toi::DIS_BONJOUR : ' . $toi::DIS_BONJOUR . '<br>';
