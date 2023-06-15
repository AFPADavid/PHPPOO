<?php

// Définition d'une classe "Person"
class Person {
    // Propriétés de la classe
    private $name;
    private $age;

    // Méthode pour définir le nom de la personne
    public function setName($name) {
        $this->name = $name;
    }

    // Méthode pour définir l'âge de la personne
    public function setAge($age) {
        $this->age = $age;
    }

    // Méthode pour obtenir le nom de la personne
    public function getName() {
        return $this->name;
    }

    // Méthode pour obtenir l'âge de la personne
    public function getAge() {
        return $this->age;
    }

    // Méthode pour afficher les informations de la personne
    public function displayInfo() {
        echo "Nom: " . $this->name . ", Age: " . $this->age;
    }
}

// Instanciation d'un nouvel objet "Person"
$person = new Person();

// Utilisation des méthodes pour définir les propriétés de l'objet
$person->setName("John Doe");
$person->setAge(25);

// Utilisation de la méthode pour afficher les informations de l'objet
$person->displayInfo();



/*

Explications :

La classe Person est définie avec deux propriétés privées ($name et $age), qui représentent respectivement le nom et l'âge d'une personne.
Les méthodes setName et setAge permettent de définir les valeurs des propriétés de la personne.
Les méthodes getName et getAge permettent d'obtenir les valeurs des propriétés de la personne.
La méthode displayInfo affiche les informations de la personne en utilisant les valeurs des propriétés.
Un objet $person est créé en instanciant la classe Person.
Les méthodes setName et setAge sont utilisées pour définir le nom et l'âge de la personne.
La méthode displayInfo est appelée pour afficher les informations de la personne.
Ce code illustre les concepts de base de la programmation orientée objet en PHP, tels que la définition d'une classe, l'encapsulation des propriétés et l'utilisation des méthodes pour interagir avec l'objet.

*/



?>
