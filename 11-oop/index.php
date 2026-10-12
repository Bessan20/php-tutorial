<?php

class animal {

    //properties
    private $name;
    private $color;

    //methods
    //constructor
    function __construct($name , $color) {
        
    echo "Constructor called.\n<br>";
        $this->name = $name;
        $this->color = $color;
    }

    //destructor
    function __destruct() {
        echo "Object destroyed.\n<br>";
    }

    //encapsulation


    public function set_name($name) {
        $this->name = $name;
    }

    public function set_color($color) {
        $this->color = $color;
    }
    public function get_name() {
        return $this->name;
    }

    public function get_color() {
        return $this->color;
    }

    

    
}

//inheritance
class cat extends animal {
    public function meow() {
        return "Meow meow\n<br>";
    }
}
$animal1 = new animal("Dog" , "Brown");  //Constructor called.
echo $animal1->get_name()."\n<br>";     //Dog

//unset($animal1); //Object destroyed.
echo $animal1->get_color()."\n<br>";   //Brown

$animal1->set_color("Black");
echo $animal1->get_color()."\n<br>";   //Black

$animal2 = new animal("Snake" , "Green");
echo $animal2->get_name()."\n<br>";    //snake
echo $animal2->get_color()."\n<br>";   //Green

$animal2->set_color("Yellow");
echo $animal2->get_color()."\n<br>";   //Yellow



$cat1 = new cat("Cat" , "White");   //constructor called.
echo $cat1->get_name()."\n<br>";   //Cat
echo $cat1->get_color()."\n<br>";  //White


//polymorphism
class fruit {
    
    public $name;
    public $color;

    function set_details($name , $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function get_details() {
        return "{$this->color} {$this->name}\n<br>";
    }
}
// Child class
class Apple extends Fruit {

    function get_details() {
        return "Apple: {$this->color} {$this->name}<br>";
    }
}
// Child class
class Banana extends Fruit {

    function get_details() {
        return "Banana: {$this->color} {$this->name}<br>";
    }
}

// Create objects
$apple = new Apple();
$apple->set_details("Apple", "Red");

$banana = new Banana();
$banana->set_details("Banana", "Yellow");

// Same method, different behavior
echo $apple->get_details();
echo $banana->get_details();

//abstraction 
abstract class Shape {
    abstract public function area();
}

class square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return $this->side * $this->side;
    }
}


class circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}




?>