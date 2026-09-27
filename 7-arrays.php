<?php
$names = array("sara" , "ali" , "mohamed" , "mazen");

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

// 10- extract a portion of an array
$sliced = array_slice($nums, 1, 3);
foreach ($sliced as $num) echo $num." ";
echo "\n<br>";


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