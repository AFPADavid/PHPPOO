<?php

/*
Exercice 1:
Créez une classe "Circle" avec une propriété privée "radius" et les méthodes suivantes :

Une méthode pour définir le rayon du cercle.
Une méthode pour calculer l'aire du cercle.
Une méthode pour calculer le périmètre du cercle.
*/



class Circle {
    private $radius;

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Utilisation de la classe Circle
$circle = new Circle();
$circle->setRadius(5);
echo "Aire du cercle : " . $circle->getArea() . "<br>";
echo "Périmètre du cercle : " . $circle->getPerimeter();




/*
Exercice 2:
Créez une classe "Car" avec les propriétés privées "brand" et "model", ainsi que les méthodes suivantes :

Une méthode pour définir la marque et le modèle de la voiture.
Une méthode pour afficher la marque et le modèle de la voiture.

*/

class Car {
    private $brand;
    private $model;

    public function setBrandAndModel($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function displayBrandAndModel() {
        echo "Marque : " . $this->brand . "<br>";
        echo "Modèle : " . $this->model;
    }
}

// Utilisation de la classe Car
$car = new Car();
$car->setBrandAndModel("Toyota", "Camry");
$car->displayBrandAndModel();


/*
Exercice 3:
Créez une classe "Rectangle" avec les propriétés privées "width" et "height", ainsi que les méthodes suivantes :

Une méthode pour définir la largeur et la hauteur du rectangle.
Une méthode pour calculer la surface du rectangle.
Une méthode pour calculer le périmètre du rectangle.

*/

class Rectangle {
    private $width;
    private $height;

    public function setDimensions($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

// Utilisation de la classe Rectangle
$rectangle = new Rectangle();
$rectangle->setDimensions(4, 6);
echo "Surface du rectangle : " . $rectangle->getArea() . "<br>";
echo "Périmètre du rectangle : " . $rectangle->getPerimeter();


/*

Exercice 4 :

Créez un fichier nommé Person.php contenant la classe Person avec les propriétés privées "name" et "age", ainsi que les méthodes suivantes :

Une méthode pour définir le nom de la personne.
Une méthode pour définir l'âge de la personne.
Une méthode pour obtenir le nom de la personne.
Une méthode pour obtenir l'âge de la personne.
Créez un fichier nommé index.php pour tester la classe Person :

Incluez le fichier Person.php dans index.php.
Instanciez un objet de la classe Person.
Utilisez les méthodes de l'objet pour définir le nom et l'âge de la personne.
Affichez le nom et l'âge de la personne à l'aide des méthodes de l'objet.
*/

//Fichier Person.php :

class Person {
    private $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

//Fichier index.php :

include 'Person.php';

$person = new Person();
$person->setName("John Doe");
$person->setAge(25);

echo "Nom: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge();
