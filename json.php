<?php
//json encode function like a translator to convert php array to json format
$data = array(
    "name" => "bessan",
    "age" => 23,
    "city" => "portsaid"
);

echo "<p style = 'color: blue;'>" . json_encode($data) . "</p>\n<br>";  
//{"name":"bessan","age":23,"city":"portsaid"}
echo var_dump(json_encode($data)) . "<br>\n";  
//string(44) "{"name":"bessan","age":23,"city":"portsaid"}"
echo strlen(json_encode($data)) . "<br>\n";
//44


echo "<p style = 'color: green;'>" . json_encode([4, 5, 6]) . "</p>\n<br>";
?>