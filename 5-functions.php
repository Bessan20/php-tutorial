<?php

/*
Hello , world
Hello , world
*/
echo "Hello , world\n";

function sayHello() {

  echo "Hello , world\n";
}
sayHello();
////////////////////////////////////////
/*
Hello , Programmer
Hello , Programmer
Hello , Bessan
Hello , Mohamed
Hello , Kareem
*/
$s = "Programmer";
echo "Hello , $s\n";

function say($s = "Programmer") {

  echo "Hello , $s\n";
}
say();
say("Bessan");
say("Mohamed");
say("Kareem");


////////////////////////////////////////
/*
The sum is : 12
The sum is : 4
The sum is : 6
The sum is : 9
*/
$x = 5 ; $y = 7;
echo "The sum is : ".$x + $y . "\n";

function add($x = 1 , $y = 3) {

  echo "The sum is : ". $x + $y . "\n";
}

add();
add(1, 5);
add(6);
///////////////////////////////////////
/*
1 2 3 4 5 
1 2 3 4 5 6 7 8 
1 2 3 4 5 6 7 
1 2 3 4 5
*/
for($i = 1 ; $i <= 5 ; ++$i) {
  echo "$i " ;
  if ($i == 5) echo "\n";
}

function printNums($n = 5) {
   for($i = 1 ; $i <= $n ; ++$i) {
     echo "$i " ;
     if ($i == $n) echo "\n";
   }
}
printNums(8);
printNums(7);
printNums();
////////////////////////////////////
/*
7 9
7 9
5 1
3 2

*/
$x = 9 ; $y = 7;
echo "$y $x\n";

function swap($x = 9 , $y = 7){
  echo "$y $x\n";
}
swap();
swap(1,5);
swap(2,3);
//////////////////////////////////

/*
The output of 12333 and 56666 is : 9
The output of 1000 and 5000 is : 0
The output of 133 and 777 is : 10
The output of 67 and 56666 is : 13
*/

function lastTwoDigits($x = 3 , $y = 4) {
  echo "The output of $x and $y is : ".($x%10) + ($y%10)."\n";
}
lastTwoDigits(12333 , 56666);
lastTwoDigits(1000 , 5000);
lastTwoDigits(133 , 777);
lastTwoDigits(67 , 56666);

$add = function($x = 1 , $y = 3) {
  echo "The sum is : ". $x + $y . "<br>\n";
} ;

$add();
$add(1, 5);
$add(6);

$summation = fn($n = 10) => (print "The summation of 1 to $n is : ".($n*($n+1)/2)."<br>\n");  //The summation of 1 to 10 is : 55
$summation(100);  //The summation of 1 to 100 is : 5050

$evenSummation = fn($n = 10) => (
  print "The summation of even numbers from 1 to $n is : ".($n/2 * ($n/2 + 1))."<br>\n"  //The summation of even numbers from 1 to 10 is : 30
);
$evenSummation(100);  //The summation of even numbers from 1 to 100 is : 2550

$red = function($name = "Bessan") {
  echo "<br><br><div style = '
      background-color : red;
      width : 100px;
      height : 100px;
      border-radius : 50%;
      display : flex;
      justify-content : center;
      align-items : center;
      '>$name</div>";
} ;
$red();
$red("Mohamed");

//$mood = function($myMode = "Happy") {};

$greet = fn ($name = "Bessan") => (print "Hello , $name <br>\n");  //Hello , Bessan
echo $greet("Mohamed");  //Hello , Mohamed


//math functions
echo "<br><br>";
echo "The absolute value of -5 is : ".abs(-5)."<br>\n";  //The absolute value of -5 is : 5
echo "The absolute value of 5 is : ".abs(5)."<br>\n";  //The absolute value of 5 is : 5

echo "The square root of 25 is : ".sqrt(25)."<br>\n";  //The square root of 25 is : 5
echo "The square root of 36 is : ".sqrt(36)."<br>\n ";  //The square root of 36 is : 6

echo "The power of 2^3 is : ".pow(2,3)."<br>\n";  //The power of 2^3 is : 8

echo "The maximum value between 5 and 10 is : ".max(5,10,1,3)."<br>\n";  //the maximum value between 5 and 10 is : 10
echo "The minimum value between 5 and 10 is : ".min(5,10,1,3)."<br>\n";  //the minimum value between 5 and 10 is : 1

echo "The random number between 1 and 10 is : ".rand(1,10)."<br>\n";  //The random number between 1 and 10 is : 7
echo "The rounded value of 5.7 is : ".round(5.7)."<br>\n";  //The rounded value of 5.7 is : 6
echo "The rounded value of 5.4 is : ".round(5.43457 ,2)."<br>\n";  //The rounded value of 5.4 is : 5.43

echo "The ceil value of 5.4 is : ".ceil(5.4)."<br>\n";  //The ceil value of 5.4 is : 6
echo "The floor value of 5.7 is : ".floor(5.7)."<br>\n";  //The floor value of 5.7 is : 5


?>