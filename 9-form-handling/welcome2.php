
<?php

echo "Welcome ".$_POST["name"]."\n<br>";
for($i = 0 ; $i<$_POST["age"] ;++$i) {
echo "*\n<br>";
}

echo "Your gender is : ".$_POST["gender"]."\n<br>";
//echo ($_POST["gender"] == "female") ? "<body style = 'background-color : pink;'></body>" : "<body style = 'background-color : blue;'></body>" ;
echo "<body style = 'background-color : {$_POST["color"]};'></body>";
?>