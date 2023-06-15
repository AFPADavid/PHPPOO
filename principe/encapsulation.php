<?php
class Person {
    private $name;
    private $age;
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        if ($age < 0) {
            throw new Exception("L'âge ne peut pas être négatif.");
        }
        
        $this->age = $age;
    }
}

// Utilisation de la classe Person
$person = new Person();
$person->setName("John Doe");
$person->setAge(25);

echo "Nom : " . $person->getName() . "\n";
echo "Âge : " . $person->getAge() . "\n";


/*
Dans cet exemple, la classe Person encapsule les propriétés name et age en les déclarant comme privées (private). Cela signifie que ces propriétés ne peuvent être accédées directement en dehors de la classe.

Pour accéder aux propriétés encapsulées, nous utilisons des méthodes publiques (getName, setName, getAge, setAge) qui agissent comme des interfaces pour lire et modifier les valeurs des propriétés. Ainsi, l'accès aux données se fait de manière contrôlée.

Dans la méthode setAge, nous avons ajouté une validation pour s'assurer que l'âge n'est pas un nombre négatif. Si l'âge fourni est inférieur à zéro, nous lançons une exception.

En utilisant ces méthodes, nous pouvons affecter et récupérer les valeurs des propriétés name et age de manière sécurisée.
µ/