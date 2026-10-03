<?php

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


// function Enc&Dec() {
 
// key = "PgEfTYaWGHjDAmxQqFLRpCJBownyUKZXkbvzIdshurMilNSVOtec#@_!=.+-*/";
// org = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
// }


?>