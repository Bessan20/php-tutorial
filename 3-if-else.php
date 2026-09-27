<?php

//simplest form of conditional statements.
//executes a block of code only if the specified condition is true.
$today = "Friday";
if ($today == "Friday") {
  echo "Have a nice weekend!<br>\n";
}

if ($today == "Saturday") {
  echo "Have a nice weekend!<br>\n";
}

$isReady = true;

if ($isReady) {
  echo "The system is ready!<br>\n";
}

if (!$isReady) {
  echo "The system is ready!<br>\n";
}

if (!!$isReady) {
  echo "The system is ready 2!<br>\n";
}

//empty --> "" , 0 , "0" , NULL , FALSE , array() 
$name = "";
if(empty($name)) {
  echo "The name is empty<br>\n";
}

if($name) {
  echo "no name<br>\n";
}

$name = "kareem";
if (empty($name)) {
  echo "The name is not  empty<br>\n";
}
###################################################################


//executes a block of code if the specified condition is true, and another block of code if the condition is false.
$x = 5;
if($x <= 5) 
    echo "The value of x is less than or equal to 5<br>\n";
else 
    echo "The value of x is greater than 5<br>\n";

if($x <= 5) ;
   
else 
    echo "The value of x is greater than 5<br>\n";


$myTime = 12;
if($myTime < 12) {
  echo "Good morning!<br>\n";
}
else {
    echo "Good afternoon!<br>\n";
}

if ("Hello")
  echo "Hello is true<br>\n";
else
  echo "Hello is false<br>\n";

if (print("Hello\n<br>"))
  echo "Hello is true<br>\n";
else
  echo "Hello is false<br>\n";
#####################################################
//It executes the first block with a true condition and skips the rest.  

$class = "c1";
if($class == "c1") {
  echo "Programming<br>\n";
}

elseif($class == "c2") {
  echo "Communication<br>\n";
}
else  {
  echo "Networks<br>\n";
}

$x = 10; 
$y = 20;

if ($x == 10)
  echo "x is 10<br>\n";

else if ($y == 20)
  echo "y is 20<br>\n";

else
  echo "x is not 10 and y is not 20<br>\n";
########################################################
//shorthand -  (ternary) operator - Conditional Expressions.
$age = 20;
$status = ($age >= 18) ? "adult<br>\n" : "minor<br>\n";
echo $status;

echo (5 > 3) ? "5 is greater than 3<br>\n" : "5 is not greater than 3<br>\n";
#####################################################
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!<br>\n";
    break;
  case "blue":
    echo "Your favorite color is blue!<br>\n";
    break;
  case "green":
    echo "Your favorite color is green!<br>\n";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!<br>\n";
};
################################################
echo (3>6) && (5<9);
echo ((3<6) && (5<9)) . "<br>\n";

echo ((3>6) || (5<9)) . "<br>\n";
echo ((3<6) || (5<9)) . "<br>\n";


?>