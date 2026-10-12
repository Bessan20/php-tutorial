<?php

//class --> blueprint / template for creating objects
//class is a user-defined data type that contains properties and methods

//object --> instance of a class
//The this keyword is used within a method to refer to the current object's properties and methods.

//Objects of a class are created with the new keyword.
//instanceof keyword to check if an object belongs to a specific class


//1-create class student
/*
How to create a class in PHP?
class ClassName {
    // properties
    public $property1;
    public $property2;

    // methods
    function method1() {
        // code
    }

    function method2() {
        // code
    }
}
*/
class Student {

public $name;
public $age;

function set_details($name , $age) {
    $this->name = $name;
    $this->age = $age;
} 

function get_details() {
    return "Name: " . $this->name . ", Age: " . $this->age;
}
}

/*
How to create an object of a class in PHP?
$objectName = new ClassName();

Objects of a class are created with the new keyword.
*/
$student1 = new Student();
$student1->set_details("Bessan mohamed", 23);
echo $student1->get_details();

$student2 = new Student();
$student2->set_details("Osama mohamed", 25);
echo "\n<br>".$student2->get_details();


//2-create class fruit
class fruit {
    public $name;
    public $color;

    function set_details($name , $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function get_details() {
        return "Name: " . $this->name . ", Color: " . $this->color;
    }
}

$fruit1 = new fruit();
$fruit1->set_details("Apple", "Red");
echo "\n<br>".$fruit1->get_details();

$fruit2 = new fruit();
$fruit2->set_details("Yellow","banana");
echo "\n<br>".$fruit2->get_details()."\n<br>";



//3-create class car
class car {
    public $name;
    public $color;
    public $model;

    function set_details($name , $color , $model){
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
    }

    function get_details() {
        echo "{$this->name}\n<br>";
        echo "{$this->color}\n<br>";
        echo "{$this->model}\n<br>";
    }

}

$car1 = new car();
$car1->set_details("BMW", "Black", 2022);
$car1->get_details();

echo ($car1 instanceof car) ? "car1 is an instance of car class\n<br>" : "car1 is not an instance of car class\n<br>";
echo ($car1 instanceof fruit) ? "car1 is an instance of fruit class\n<br>" : "car1 is not an instance of fruit class\n<br>";

echo var_dump($car1 instanceof car)."\n<br>";   //bool(true)


class product {
    public $name;
    public $price;

    function __construct($name , $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function __destruct() {
        echo "Destructor called for product: {$this->name}\n<br>";
    }

    function set_details($name , $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function get_details() {
        return "Name: " . $this->name . ", Price: " . $this->price."\n<br>";
    }
}

$product1 = new product("Laptop" , 1000);
echo $product1->get_details()."\n<br>";

$product1->set_details("Mobile" , 500);
echo $product1->get_details()."\n<br>";
echo $product1->get_details()."\n<br>";






?>