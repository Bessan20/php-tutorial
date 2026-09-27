<?php
$x = 23;
$y = "Bessan";
echo "My name is $x \n<br>";
echo "My age is $x \n<br>";

var_dump(11);
echo("\n<br>");
var_dump(11.6);
echo("\n<br>");
var_dump(true);
echo("\n<br>");
var_dump("bessan");
echo("\n<br>");
var_dump([1 , 2 , 3 , 4]);
echo("\n<br>");
var_dump(NULL);
echo("\n<br>");

$x = $y = $z = 8 ;
echo "The first variable is &nbsp" .$x ." &nbspThe second variable is&nbsp" .$y. "&nbsp The third variable is " .$z. "\n";


$x = 5;
echo $y = $x +10 . "\n<br>";

//swap two variables
$a = 10;
$b = 20;
[$a , $b] = [$b , $a];
echo "The value of a is : {$a} The value of b is : {$b}\n<br>"

?>
