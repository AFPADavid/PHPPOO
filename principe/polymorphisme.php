<?php

class Shape {
    public function calculateArea() {
        // Logique par défaut pour calculer l'aire
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Utilisation des classes Shape, Rectangle et Circle
$shape = new Shape();
$rectangle = new Rectangle(5, 3);
$circle = new Circle(2);

$shapes = [$shape, $rectangle, $circle];

foreach ($shapes as $shape) {
    echo "Aire : " . $shape->calculateArea() . "<br>";
}



/*

Dans cet exemple, nous avons une classe de base Shape qui définit une méthode calculateArea() avec une implémentation par défaut (par exemple, une logique générique pour calculer l'aire).

Ensuite, nous avons des classes spécialisées telles que Rectangle et Circle qui héritent de la classe de base Shape. Chaque classe spécialisée redéfinit la méthode calculateArea() avec une logique spécifique à la forme respective.

Lorsque nous créons des objets de ces classes et les stockons dans un tableau $shapes, nous pouvons les parcourir avec une boucle foreach et appeler la méthode calculateArea() sur chaque objet. La méthode appelée dépendra du type de l'objet, permettant ainsi d'obtenir des résultats polymorphes.

*/