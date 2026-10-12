<?php


//1-create file 
//fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).
$file = fopen("text2.txt", "w");

//2-write to file
fwrite( e , "Hello World! This is a test file.\n<br>");

//3-read file content
echo readfile("text2.txt")."\n<br>";

//4- get file content
$fileContent = fopen("text2.txt", "r");
echo "{$fileContent}\n<br>";

echo "##########";

//create file manually
// Read file content
echo readfile("text1.txt")."\n<br>";


//Write to file
$writeFile = fopen("text1.txt", "w");
fwrite($writeFile, "\nHello, this is a test1 file.");

// Append to file
$appendFile = fopen("text1.txt", "a");
fwrite($appendFile, "\nThis line is appended to the file1.");

//get file content
echo "\n<br>".file_get_contents("text1.txt")."\n<br>";



?>