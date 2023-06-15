<?php

require_once 'Personnage.php';
require_once 'De.php';

$chevalier = new Personnage("Gauvin", 500, 10, "Chevalier");
$druide = new Personnage("Eldara", 380, 13, "Druide");

while ($chevalier->getNiveauVie() > 0 && $druide->getNiveauVie() > 0) {
    // Le chevalier attaque le druide
    $degatsChevalier = $chevalier->attaquer(3);
    $druide->subirDegats($degatsChevalier);

    // Le druide attaque le chevalier
    $degatsDruide = $druide->attaquer(2);
    $chevalier->subirDegats($degatsDruide);

    echo $chevalier->getNom() . " inflige $degatsChevalier dégâts à " . $druide->getNom() ."<br>". PHP_EOL;
    echo $druide->getNom() . " inflige $degatsDruide dégâts à " . $chevalier->getNom() ."<br>". PHP_EOL;
    echo "Niveau de vie de " . $chevalier->getNom() . " : " . $chevalier->getNiveauVie() ."<br>". PHP_EOL;
    echo "Niveau de vie de " . $druide->getNom() . " : " . $druide->getNiveauVie() ."<br>". PHP_EOL;
    echo "<br>--------------------------"."<br>" . PHP_EOL;
}

if ($chevalier->getNiveauVie() == 0) {
    echo $druide->getNom() . " a gagné !";
} else {
echo $chevalier->getNom() . " a gagné !";
}

?>
