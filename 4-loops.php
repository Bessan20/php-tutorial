<?php

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
?>