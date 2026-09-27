<?php

echo "Hello , world <br> \n";  //Hello , world

function sayHello() {

    echo "Hello , world <br> \n";
}
sayHello();

// $name = "Bessan";
// echo "Hello $name \n<br>";

function myName($name = "mohamed") {

echo "Hello $name \n<br>";

}
myName();
function add($x = 1 , $y = 1) {
    return $x + $y;
}

echo "The result is : ".add(8,10)."\n<br>";

?>