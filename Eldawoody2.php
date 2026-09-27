<?php
//simplest form of conditional statements.
//executes a block of code only if the specified condition is true.
// If-else
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

// loops
//1-For Loop
//print numbers from 1 to 10
for ($i = 1 ; $i <= 10 ; ++$i) echo ("$i ") ;
echo ("\n==============================\n");

//print numbers from 1 to 20 with leading zeros 
for($i = 1 ; $i <= 20 ; ++$i) {
  if($i != 20) {
  if($i <= 9) echo "0$i - ";
  else echo "$i - ";
  }
  else echo "$i . ";
  
}
echo ("\n==============================\n");
//print even numbers from 1 to 10
for ($i = 1 ; $i <= 10 ; ++$i) {
  if($i % 2 == 0) echo ("$i ");
}
echo ("\n==============================\n");

//print odd numbers from 1 to 10
for ($i = 1 ; $i <= 10 ; ++$i) {
  if($i % 2 != 0) echo ("$i ");
}
echo ("\n==============================\n");

/*
1 * 1 = 1 1 * 2 = 2 1 * 3 = 3 1 * 4 = 4 1 * 5 = 5 
2 * 1 = 2 2 * 2 = 4 2 * 3 = 6 2 * 4 = 8 2 * 5 = 10 
3 * 1 = 3 3 * 2 = 6 3 * 3 = 9 3 * 4 = 12 3 * 5 = 15 
4 * 1 = 4 4 * 2 = 8 4 * 3 = 12 4 * 4 = 16 4 * 5 = 20 
5 * 1 = 5 5 * 2 = 10 5 * 3 = 15 5 * 4 = 20 5 * 5 = 25 

*/
for($i = 1 ; $i <= 5 ; ++$i) {

  for($j = 1 ; $j <= 5 ; ++$j) {
    echo "$i * $j = " .($i * $j). " ";
  }
  echo "\n";
}
echo ("\n==============================\n");
/*
*
**
***
****
*****
******
*******
********
*********
********** */
for ($i = 1 ; $i <= 10 ; ++$i ) {
  for ($j = 1 ; $j <= $i ; ++$j) echo ("*");
  echo ("\n");
}
echo ("\n==============================\n");

/*
1
12
123
1234
12345
*/
for($i = 1 ; $i<= 5 ; ++$i) {
  for($j =  1 ; $j<= $i ; ++$j) echo ("$j");
  if ($i != 5) echo ("\n");
}
echo ("\n==============================\n");


/*
1
22
333
4444
55555
*/
for($i = 1 ; $i<= 5 ; ++$i) {
  for($j =  1 ; $j<= $i ; ++$j) echo ("$i");
  if ($i != 5) echo ("\n");
}
echo ("\n==============================\n");

/*
    1 
   1 2 
  1 2 3 
 1 2 3 4 
1 2 3 4 5 
*/
for($i = 1 ; $i<= 5 ; ++$i) {
  for($j = 1 ; $j <= 5-$i ; ++$j)echo (" ");
  for($j = 1 ; $j <= $i ; ++$j)echo("$j ");
  if ($i != 5) echo ("\n");
}
echo ("\n==============================\n");

/*
    * 
   * *
  * * * 
 * * * * 
* * * * *
*/
for($i = 1 ; $i<= 5 ; ++$i) {
  for($j = 1 ; $j <= 5-$i ; ++$j)echo (" ");
  for($j = 1 ; $j <= $i ; ++$j)echo("* ");
  if ($i != 5) echo ("\n");
}
echo ("\n==============================\n");

/*
    *
   ***
  *****
 *******
*********
*/
for($i = 1 ; $i<= 5 ; ++$i) {
  for($j = 1 ; $j <= 5-$i ; ++$j)echo (" ");
  for($j = 1 ; $j <= ($i*2)-1 ; ++$j)echo("*");
  if ($i != 5) echo ("\n");
}
echo ("\n==============================\n");

/*
1
01
101
0101
10101
*/
for($i = 1 ; $i <= 5 ; ++$i ){
  if ($i%2 != 0 ){
    for($j = 1 ; $j <= $i ; ++$j )
      if($j % 2 != 0)echo ("<div style = '
    background-color : white ;
    width :25px;
    height : 25px; 
    display: inline-block;
    '>
    </div>");
      else echo("<div style = '
    background-color : black ;
    width :25px;
    height : 25px; 
    display: inline-block;
    '>
    </div>");
  }
  else {
    for($j = 1 ; $j <= $i ; ++$j )
      if($j % 2 != 0)echo ("<div style = '
    background-color : black ;
    width :25px;
    height : 25px; 
    display: inline-block;
    '>
    </div>");
      else echo("<div style = '
    background-color : white ;
    width :25px;
    height : 25px; 
    display: inline-block;
    '>
    </div>");
  }
  if($i != 5) echo("<br>");
}
echo ("\n==============================\n");

/*
12345
2345
345
45
5
*/
for($i = 1 ; $i <= 5 ; ++$i) {
  for($j = $i ; $j <= 5 ; ++$j )echo ("$j");
  if($i != 5)echo ("\n");
}
echo ("\n==============================\n");

/*
12345
 1234
  123
   12
    1
*/

for($i = 5 ; $i >= 1 ; --$i) {
  for($j= 1 ; $j <= 5 - $i ; ++$j) echo (" ");
  for($j = 1 ; $j <= $i ; ++$j )echo ("$j");
  if($i != 1)echo ("\n");
}
echo ("\n==============================\n");

for($i = 7 ; $i >= 1 ; --$i) {
  for($j = 1 ; $j <= 7-$i ; ++$j) echo " ";
  for($j = 1 ; $j <= $i ; ++$j) echo "$j";
  for($j = $i-1 ; $j >= 1 ; --$j) echo "$j";
  echo "\n";
}

for($i = 1; $i <= 5; ++$i){

    for($j = 1; $j <= $i; ++$j){

        if(($i + $j) % 2 == 0)
            echo "<div style='
                background-color:white;
                width:25px;
                height:25px;
                display:inline-block;
            '></div>";
        else
            echo "<div style='
                background-color:black;
                width:25px;
                height:25px;
                display:inline-block;
            '></div>";
    }

    echo "<br>";
};


echo "<br><br><br>";
for($i = 200 ; $i<= 800; $i +=50) {
  echo "<div style = '
  background : linear-gradient(90deg,pink , blue , cyan);
  width : ".$i."px;
  height : 50px;
  '
  ></div>";
};
####################################################
//2-for each
$colors = ["red" , "green" , "blue" , "yellow" , "black"];
foreach($colors as $color) {
  echo "<div style = '
  background-color : $color ;
  width : 100px;
  height : 50px;
  '
  ></div>";
};
####################################################
//3-While Loop

//print numbers from 1 to 10
$i = 1;
while($i <= 10) {
  echo "$i<br>";
  ++$i;
};

//print odd numbers from 1 to 9
$i = 1;
while($i <= 10) {
  echo "$i<br>";
  $i+=2;
};

//print even numbers from 2 to 10
$i = 2;
while($i <= 10) {
  echo "$i<br>";
  $i+=2;
};

##############################################################
//4- Do While Loop
//print numbers from 1 to 10
$i = 1;
do {
  echo "$i<br>";
  ++$i;
} while($i <= 10);

// Functions
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

// Strings 
$name = " bessan mohamed ";

echo $name."\n<br>"; //bessan mohamed
echo "$name\n<br>"; //bessan mohamed
echo '$name\n<br>'; //$name\n

echo strlen($name)."\n<br>"; //bessan mohamed

echo strpos($name , "mohamed")."\n<br>"; //bessan mohamed
echo strtolower($name)."\n<br>"; //bessan mohamed
echo strtoupper($name)."\n<br>"; //bessan mohamed


echo substr($name , 7 , 5)."\n<br>"; //moha
echo trim($name)."\n<br>"; //bessan mohamed

echo trim(" Osama ")."\n<br>";

/*
1-Calculates and displays the length of two strings, followed by the two strings themselves.
5 3
LEVEL ONE

Programming
contest
*/ 
function lenAndNew($s , $t) {

      echo strlen($s)." ".strlen($t)."\n<br>".$s." ".$t."\n<br>"; 
}

lenAndNew("LEVEL" , "ONE");
lenAndNew("programming" , "contest");


/*
2-The function prints the characters of a string until it encounters a backslash (`\`), then stops and moves to a new line.

Egyptian collegiate programming
google
 */
function newline($s) {
    for($i = 0 ; $i<strlen($s) ; ++$i) {
        if ($s[$i] == "\\") break;
        echo $s[$i];
    }
    echo "\n<br>";
        
} 

newline("Egyptian collegiate programming\ contest");
newline("google \or facebook");


/*

3-The function displays the lengths of two strings, concatenates and displays them, then swaps their first characters and displays the updated strings.

4 2
abcdef
ebcd af

 */
function strings($s , $t) {
    echo strlen($s)." ".strlen($t)."<br>\n";
    echo "{$s}{$t}\n<br>";
    [$s[0] , $t[0]] = [$t[0] , $s[0]];
    echo "{$s} {$t}\n<br>";
    

}

strings("abcd" , "ef");


/*
4-The function calculates and displays the sum of all digits in a string.
*/

function countDigits($s) {
    $sum = 0 ;
    for($i = 0 ; $i<strlen($s) ; ++$i) {
        $sum += ($s[$i] - '0');
    }
    echo "{$sum}\n<br>";

}

countDigits("351");
countDigits("785");
countDigits("98766");

/*
5-The function checks whether a word is shorter than 10 characters; otherwise, it displays an abbreviated version using the first character
, the number of omitted characters, and the last character.


word
localization
internationalization
pneumonoultramicroscopicsilicovolcanoconiosis

*/
function tooLongWord($s) {
    echo (strlen($s) < 10) ? "{$s}\n<br>" : $s[0] .strlen($s)-2 . $s[strlen($s)-1] ."\n<br>";
}

tooLongWord("word");
tooLongWord("localization");
tooLongWord("internationalization");
tooLongWord("pneumonoultramicroscopicsilicovolcanoconiosis");


/*
6-Replace every comma character ',' with a space character.
Replace every capital character in S with its respective small character and Vice Versa.
 */
function conversation($s) {
    for ($i=0 ; $i<strlen($s) ; ++$i) {
        if(ctype_lower($s[$i])) echo strtoupper($s[$i]);
        else {
            if(ctype_upper($s[$i])) echo strtolower($s[$i]);
            else echo " ";

        }
    }
    echo "\n<br>";
}
echo conversation("happy,NewYear,enjoy");

/*
7-function to strings
 */
function sortString($s) {
    $arr = str_split($s);
    sort($arr);
    $s = implode ("" , $arr);
    return $s;
}
echo sortString("rggccbma")."\n<br>";


/*8-reverse string*/
function reverseString($s) {
    $t = "";
    for($i = strlen($s)-1 ; $i>= 0 ; --$i) {
      $t .= $s[$i];
    }
    return $t;

}

echo reverseString("bessan")."<br>\n";
echo reverseString("mam")."<br>\n";
echo reverseString("abba");

/*9- check if the string is Palindrome
A string is said to be a palindrome if the reverse of the string is same as the string.
*/

function isPalindrom($s) {
    echo ((reverseString($s)) == $s) ? "YES\n<br>" : "NO\n<br>";
}

isPalindrom("abba");
isPalindrom("icpcassiut");
isPalindrom("mam");

/*
10 -  Print S after replacing every sub-string that is equal to "EGYPT" with space.
 */
function replaceWord($s){
    echo str_replace("EGYPT" , " " , $s)."\n<br>";

}

replaceWord("BRITISHEGYPTGHANA");
replaceWord("ITALYKOREAEGYPTEGYPTALGERIAEGYPTZ");

//Date 
echo date("y-m-d")."\n<br>"; //26-09-23
echo date("y/m/d")."\n<br>"; //26/09/23
echo date("y.m.d")."\n<br>"; //26.09.23
echo date("y&m&d")."\n<br>"; //26.09.23

//difference between Y and y
echo date("Y-m-d")."\n<br>"; //2026-09-23
echo date("Y-m-d H:i:s")."\n<br>"; //2026-09-23

// d - Represents the day of the month (01 to 31)
// j - Represents the day of the month (1 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week
// F - Represents the month

echo date("l")."\n<br>"; //Wensday
echo date("m")."\n<br>"; //09
echo date("F")."\n<br>";


echo time()."\n<br>";
//echo time("H:i:s")."\n<br>";//expects exactly 0 arguments (will cause an error)
echo date("H:i:s a");



// Arrays
$names = array ("sars" , "ali" , "mohamed" , "mazen");

echo $names[0]."\n<br>";
echo $names[1]."\n<br>";
echo $names[2]."\n<br>";
echo $names[3]."\n<br>";

foreach ($names as $name) echo $name."<br>\n";

$nums = [2 , 4 , 3 , 1 , 5];

foreach ($nums as $num) echo $num." ";
echo "\n<br>";

//1-count elements of array
echo count($nums)."\n<br>";

//2-sort string
sort($nums);
foreach ($nums as $num) echo $num." ";
echo "\n<br>";

//3-reverse string
array_reverse($nums);
foreach ($nums as $num) echo $num." ";
echo "\n<br>";

//5- add element to the end of an array
array_push($nums , 6);
array_push($nums , 7);
foreach ($nums as $num) echo $num." ";
echo "\n<br>";

//6- remove element from the end of the array
array_pop($nums);
foreach ($nums as $num) echo $num." ";
echo "\n<br>";

// 7- remove element from the beginning of the array
array_shift($nums);
foreach ($nums as $num) echo $num." ";
echo "\n<br>";

// 8- add element to the beginning of the array
array_unshift($nums, 10);
foreach ($nums as $num) echo $num." ";
echo "\n<br>";

// 9- merge arrays
$merged = array_merge([3, 5, 7], [4, 5, 6]);
foreach ($merged as $num) echo $num." ";
echo "\n<br>";

// 10- Associative array

$student_age = array(
    "Eldawoody" => 17.5,
    "Elshenawy" => 17,
    "Osama" => 17, 
);

foreach ($student_age as $name) echo $name."\n<br>";
foreach ($student_age as $key => $value) echo $key."\n<br>".$value."\n<br>";

// // 11- extract a portion of an array
// $sliced = array_slice($nums, 1, 3);
// foreach ($sliced as $num) echo $num." ";
// echo "\n<br>";

// 12- Mulidimention array 
$staff =[
    ["name" => "Elshenaay" , "age" => 17 , "email" => "Elshenawy@gmail.com"],
    ["name" => "Eldawoody" , "age" => 17.5 , "email" => "Eldawoody@gmail.com"],
];

echo $staff[0]["name"]."\n<br>";
echo $staff[1]["name"]."\n<br>";

echo $staff[0]["age"]."\n<br>";
echo $staff[1]["age"]."\n<br>";

echo $staff[0]["email"]."\n<br>";
echo $staff[1]["email"]."\n<br>";
// ===========================================
$nums = array (2 , 4 , 5 , 6 , 8 , 1);
foreach ($nums as $num) echo $num."\n<br>";
echo count($nums)."\n<br>";

sort($nums)."\n<br>";
foreach ($nums as $num) echo $num."\n<br>";

$nums = array_reverse($nums);
foreach ($nums as $num) echo $num."\n<br>";

echo in_array(4 , $nums)?"true":"false"."\n<br>";

array_push($nums , 10);
array_push($nums , 200);
foreach ($nums as $num) echo $num."\n<br>";

array_pop($nums)."\n<br><br>";
foreach ($nums as $num) echo $num."\n<br>";

echo array_shift($nums)."\n<br><br>";
foreach ($nums as $num) echo $num."\n<br>";

array_unshift($nums , 300)."\n<br><br>";
foreach ($nums as $num) echo $num."\n<br>";

$merged_array = array_merge([1 , 2 , 3 , 4 , 5 , 6] ,$nums);
echo json_encode($merged_array);

$temp = array_slice($nums , 0 , 3);
echo json_encode($temp);

//problems
//1-print the absolute  summation of the array

function summation($nums) {
   $sum = 0;
    foreach($nums as $num)$sum += $num;
    echo $sum."\n<br>"; 
}

summation([5 , 7 , 4 , 7]);
summation([5 , 11 , 2 , 7]);

function replacement($nums) {
    foreach($nums as $num) {
        echo ($num<0) ? 2 . "\n<br>" :(($num == 0)? 0 . "\n<br>" : 1 . "\n<br>");
    }
}
replacement([1 , -2 , 0 ,  3 , 4]);
?>

