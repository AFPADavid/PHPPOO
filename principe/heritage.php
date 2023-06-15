<?php
class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function eat() {
        echo $this->name . " mange.\n";
    }
}

class Cat extends Animal {
    public function meow() {
        echo $this->name . " miaule.\n";
    }
}

// Utilisation des classes Animal et Cat
$animal = new Animal("Animal");
$animal->eat();

$cat = new Cat("Chat");
$cat->eat();
$cat->meow();


/*

Dans cet exemple, nous avons une classe parente Animal et une classe enfant Cat qui hérite de la classe Animal. La classe Animal a une propriété protégée name et une méthode eat().

La classe Cat hérite de la classe Animal, ce qui signifie qu'elle obtient toutes les propriétés et méthodes de la classe parente. En plus de cela, la classe Cat a sa propre méthode meow().

Dans l'exemple, nous créons d'abord une instance de la classe Animal et appelons la méthode eat(). Ensuite, nous créons une instance de la classe Cat et appelons à la fois la méthode héritée eat() de la classe parente et la méthode spécifique meow() de la classe Cat.

L'héritage permet à la classe enfant d'étendre et de spécialiser les fonctionnalités de la classe parente, tout en bénéficiant de la réutilisation du code existant.

*/