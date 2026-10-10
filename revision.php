<?php


// echo "Hello , world <br>\n";  //Hello , world
// echo 'Hello , world <br>\n';  //Hello , world \n


// $name = "bessan";
// echo "Hello , $name <br>\n";  //Hello , bessan \n
// echo 'Hello , $name <br>\n';  //Hello , bessan \n

// echo ("Hello , $name <br>\n");  //Hello , bessan 
// echo ('Hello , $name <br>\n');  //Hello , bessan \n

// echo "Html " , "Css " , "Java script <br>\n";  //Html Css Java script
// //echo ("Html " , "Css " , "Java script <br>\n");  //Html Css Java script (cause error)
// echo "HTML" , "CSS" . "Java script <br>\n";  //HTMLCSSJava script

// echo "html" . "css" . "java script <br>\n";  //htmlcssjava script (concatination)
// echo "html" . " " . "css" . " " . "java script <br>\n";

// echo "Hello" . " " . $name  . "<br>\n";  //Hello bessan
// echo ("Hello" . " " . $name  . "<br>\n");  //Hello bessan

// print "Hello , $name <br>\n";  //Hello , bessan
// print 'Hello , $name <br>\n';  //Hello , $name \n

// print ("Hello , $name <br>\n");  //Hello , bessan
// print ('Hello , $name <br>\n');  //Hello , $name \n

// print "html" . "css" . "java script <br>\n";  //htmlcssjava script (concatination)

// echo print"Hello , $name <br>\n";  //Hello , bessan  1

// echo "<br>\n" . 3 + 5 . "<br>\n";  //8
// echo 3 + 5 . 2 . "<br>\n";  //82
// echo "3 + 5" . 2 . "<br>\n";  //3 + 52
// echo 3 . 5 . 3 . "<br>\n";  //353

// $arr = ["fruit"=>"apple", "color"=>"red"];
// foreach($arr as $key => $value){
//     echo "key : $key , value : $value <br>\n";
// }

// echo "Hello , world <br>\n";  //Hello , world
// echo "Hello , world <br>\n";  //Hello , world 
// die("Hello , fatma<br>\n");  //Hello , world
// echo "Hello , malak<br>\n";  //Hello , world

echo min(1 , 5 , 6 , 2 , 3 , 4) . "<br>\n";  //1
echo max(1 , 5 , 6 , 2 , 3 , 4) . "<br>\n";  //6

echo round(3.5) . "<br>\n";  //4
echo round(3.4) . "<br>\n";  //3

echo ceil(3.1) . "<br>\n";  //4
echo floor(3.9) . "<br>\n";  //3

echo rand(1 , 100) . "<br>\n";  //random number between 1 and 100
echo pow(2 , 3) . "<br>\n";  //8
?>