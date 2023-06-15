<?php

class Personnage {
    private $nom;
    private $niveauVie;
    private $niveauAttaque;
    private $classe;

    public function __construct($nom, $niveauVie, $niveauAttaque, $classe) {
        $this->nom = $nom;
        $this->niveauVie = $niveauVie;
        $this->niveauAttaque = $niveauAttaque;
        $this->classe = $classe;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getNiveauVie() {
        return $this->niveauVie;
    }

    public function attaquer($chiffre) {
        $de = new De(); // Crée une instance de la classe De
        $nombreDe = $de->lancerDe(); // Appelle la méthode lancerDe() de l'objet De pour obtenir un nombre aléatoire
        $degats = $nombreDe * $this->niveauAttaque * $chiffre; // Calcule les dégâts en multipliant le nombre aléatoire, le niveau d'attaque du personnage et le chiffre passé en paramètre
        return $degats; // Renvoie les dégâts calculés
    }


    public function subirDegats($degats) {
        $this->niveauVie -= $degats;
        if ($this->niveauVie < 0) {
            $this->niveauVie = 0;
        }
    }
}
