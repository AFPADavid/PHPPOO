<?php

class Personnage {
    private $niveauVie;
    private $niveauAttaque;
    private $classe;

    public function __construct($niveauVie, $niveauAttaque, $classe) {
        $this->niveauVie = $niveauVie;
        $this->niveauAttaque = $niveauAttaque;
        $this->classe = $classe;
    }

    public function getNiveauVie() {
        return $this->niveauVie;
    }

    public function attaquer($chiffre) {
        $de = new De();
        $nombreDe = $de->lancerDe();
        $degats = $nombreDe * $this->niveauAttaque * $chiffre;
        return $degats;
    }

    public function subirDegats($degats) {
        $this->niveauVie -= $degats;
        if ($this->niveauVie < 0) {
            $this->niveauVie = 0;
        }
    }
}

class De {
    public function lancerDe() {
        return rand(0, 6); // Lancer de dé à 6 faces, j'ajoute 0 pour les coups manqués
    }
}

// Exemple d'utilisation
$chevalier = new Personnage(500, 10, "Chevalier");
$druide = new Personnage(380, 13, "Druide");

while ($chevalier->getNiveauVie() > 0 && $druide->getNiveauVie() > 0) {
    // Le chevalier attaque le druide
    $degatsChevalier = $chevalier->attaquer(3);
    $druide->subirDegats($degatsChevalier);

    // Le druide attaque le chevalier
    $degatsDruide = $druide->attaquer(2);
    $chevalier->subirDegats($degatsDruide);

    echo "<br>Le chevalier inflige $degatsChevalier dégâts au druide." . PHP_EOL;
    echo "<br>Le druide inflige $degatsDruide dégâts au chevalier." . PHP_EOL;
    echo "<br>Niveau de vie du chevalier : " . $chevalier->getNiveauVie() . PHP_EOL;
    echo "<br>Niveau de vie du druide : " . $druide->getNiveauVie() . PHP_EOL;
    echo "<br>--------------------------" . PHP_EOL;
}

if ($chevalier->getNiveauVie() == 0) {
    echo "<br>Le druide a gagné !" . PHP_EOL;
} else {
    echo "<br>Le chevalier a gagné !" . PHP_EOL;
}

?>
