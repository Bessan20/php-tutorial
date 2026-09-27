<?php
echo phpversion() . "\n<br>";
echo "My name is bessan\n<br>";
echo ("My name is bessan <br>\n");
echo "My name"." is bessan\n<br>";   //concatenation
echo "Html " , "Css " , "Java script \n<br>";
//echo ("Html " , "Css " , "Java script"); this is will cause an error
print "MY name is bessan\n<br>";
print "My name is bessan \n<br>";


//php with html
echo "<p style = '
background-color : red;
color : purple;
width : 100px;
heigtht : 100px;
'>Hello world</p>";





//This is single line comment
#This is also single line comment

/*This muliple 
line comment*/



//Tasks

echo "<br><br><div style = '
background-color : red;
width : 100px;
height : 100px;
border-radius : 50%;
'>
</div>
<br><br>
<div style = '
background-color : black;
width : 100px;
heigth : 100px;

'>
</div>";




echo "<br><br>
<div style = '
background-color : black;
color  : #00ff00;
font-size : 20px;
font-family : monospace;
width : 35%;
padding : 1.5%;
'>
01001000 01101001<br>
10101010 01010101<br>
00110101 11001010<br>
<br>
SYSTEM ONLINE...<br>
ACCESSING PHP...<br>
ACCESS GRANTED ✓
</div>";


$name = "Bessan Mohamed";
$grade = "Computer Science";
$id = 2026;

echo "
<div style='
background:#fff3cd;
border:5px solid #ffc107;
padding:30px;
width:350px;
text-align:center;
font-family:Arial;
'>
⚠️ ⚠️ ⚠️

<h1>WARNING!</h1>

Something strange happened...

<br><br>

PHP IS WATCHING YOU 👀

<br><br>

⚠️ ⚠️ ⚠️
</div>
";
echo "
<div style='
background:#222;
color:white;
width:400px;
padding:40px;
text-align:center;
font-family:Arial;
border-radius:20px;
'>

<h1>🎮 GAME ON</h1>

<p>WELCOME PLAYER</p>

<button>START GAME</button>

<br><br>

<button>SETTINGS</button>

</div>
";

echo "
<div style='
width:400px;
padding:25px;
background:#eee;
font-family:Arial;
text-align:center;
'>

<h2>LOADING...</h2>

<div style='
width:100%;
height:20px;
background:#ccc;
border-radius:20px;
'>

<div style='
width:70%;
height:20px;
background:green;
border-radius:20px;
'></div>

</div>

<br>

70% COMPLETE

</div>
";

echo "
<div style='
width:400px;
padding:30px;
background:linear-gradient(90deg,red,orange,yellow,green,blue,purple);
color:white;
font-size:30px;
text-align:center;
border-radius:20px;
'>
✨ PHP CAN CREATE ART ✨
</div>
";

echo "
<div style = '
width : 100%;
margin : 2px;
background : linear-gradient(90deg,pink , blue , purple);
color : red;
'
>
<div></div>
<div></div>
</div>
";


$colors = [ "blue" , "aqua" , "cyan"];
foreach($colors as $color) {
    echo "
    <div
    style = '
    background: $color;
    width : 100px;
    height : 50px;
    
    '></div>
    ";
};



?>