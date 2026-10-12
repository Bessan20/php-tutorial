<?php
//json encode function like a translator to convert php array to json format
$data = array(
    "name" => "bessan",
    "age" => 23,
    "city" => "portsaid"
);


//1-Associative Array
echo "<p style = 'color: blue;'>" . json_encode($data) . "</p>\n<br>";  
//{"name":"bessan","age":23,"city":"portsaid"}
echo var_dump(json_encode($data)) . "<br>\n";  
//string(44) "{"name":"bessan","age":23,"city":"portsaid"}"
echo strlen(json_encode($data)) . "<br>\n";
//44

//2-Indexed Array
echo "<p style = 'color: green;'>" . json_encode([4, 5, 6]) . "</p>\n<br>";
//[4,5,6]
echo var_dump(json_encode([4, 5, 6])) . "<br>\n";
//string(7) "[4,5,6]"

//3-int
echo "<p style = 'color: purple;'>" . json_encode(3) . "</p>\n<br>";
//3
echo var_dump(json_encode(3)) . "<br>\n";
//string(1) "3"

//4-boolean
echo "<p style = 'color: purple;'>" . json_encode(true) . "</p>\n<br>";
//true
echo var_dump(json_encode(true)) . "<br>\n";
//string(4) "true"

//4-boolean
echo "<p style = 'color: purple;'>" . json_encode(false) . "</p>\n<br>";
//false
echo var_dump(json_encode(false)) . "<br>\n";
//string(5) "false"

//5-string
echo "<p style = 'color: purple;'>" . json_encode("bessan") . "</p>\n<br>";
//"bessan"
echo var_dump(json_encode("bessan")) . "<br>\n";
//string(8) ""bessan""

//6-null
echo "<p style = 'color: purple;'>" . json_encode(null) . "</p>\n<br>";
//null
echo var_dump(json_encode(null)) . "<br>\n";
//string(4) "null"

//7-float 
echo "<p style = 'color: purple;'>" . json_encode(3.14) . "</p>\n<br>";
//3.14
echo var_dump(json_encode(3.14)) . "<br>\n";
//string(4) "3.14"

//8-nested array
$nestedArray = array(
    
    "name" => "bessan",
    "age" => 23,
    "city" => "portsaid",
    "skills" => array("html", "css", "javascript")
);
echo "<p style = 'color: purple;'>" . json_encode($nestedArray) . "</p>\n<br>";
//{"name":"bessan","age":23,"city":"portsaid","skills":["html","css","javascript"]}


////json decode
$jsonString = '{"name" : "bessan" , "age" : 23 , "city" : "portsaid"}';
$decodedData = json_decode($jsonString);
echo "<p style = 'color: red;'>" . $decodedData->name . "</p>\n<br>";
echo "<p style = 'color: red;'>" . $decodedData->age . "</p>\n<br>";
echo "<p style = 'color: red;'>" . $decodedData->city . "</p>\n<br>";
?>