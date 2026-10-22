<?php

//1- Validation Filters 
echo filter_var(25 , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var(025 , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var(-25 , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var(+25 , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
//echo filter_var(25- , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //syntax error
echo filter_var("-25" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var(25.8 , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Not Int
echo filter_var("+25" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var("25" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var(" 25   " , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var("025" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Not Int
echo filter_var("25e" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Not Int
echo filter_var("00" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Not Int
//trickyyyyyyy
echo filter_var("0" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Not Int
echo filter_var("1" , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var(0 , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Not Int
echo filter_var(true , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Int
echo filter_var(false , FILTER_VALIDATE_INT ) ? "Int\n<br>" : "Not int\n<br>";  //Not Int



echo "-------------------------------------------------------\n<br>";
echo (filter_var(25.1 , FILTER_VALIDATE_FLOAT) ? "Float" : "Not Float")."\n<br>"; //Float
echo (filter_var(25 , FILTER_VALIDATE_FLOAT) ? "Float" : "Not Float")."\n<br>";  //Float
echo var_dump(filter_var("25.1" , FILTER_VALIDATE_FLOAT))."\n<br>"; //float
echo (filter_var(0.4 , FILTER_VALIDATE_FLOAT) ? "Float" : "Not Float")."\n<br>"; //Float
echo (filter_var(0.0 , FILTER_VALIDATE_FLOAT) ? "Float" : "Not Float")."\n<br>"; //Not Float
echo (filter_var("4.77" ,FILTER_VALIDATE_FLOAT ) ? "Float" : "Not Float")."\n<br>"; //Float
echo (filter_var("4..77" ,FILTER_VALIDATE_FLOAT ) ? "Float" : "Not Float")."\n<br>"; //Not Float
echo (filter_var("09.8" , FILTER_VALIDATE_FLOAT)?"Float":"Not Float")."\n<br>";//Float
echo (filter_var("009" , FILTER_VALIDATE_FLOAT)?"Float":"Not Float")."\n<br>";//Float
echo (filter_var("00r" , FILTER_VALIDATE_FLOAT)?"Float":"Not Float")."\n<br>";//NOT Float






echo "---------------------------------------------------\n<br>";
echo (filter_var("bessan" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>";  //Not Email
echo (filter_var("bessan@gmail" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Not Email
echo (filter_var("bessan@gmail.bessan" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Email
echo (filter_var("bessan@555.bessan" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Email
echo (filter_var("bessan.555@bessan" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Not Email
echo (filter_var("bessan@gmail.com" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Email
echo (filter_var("ser..name@gmail.com" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Not Email
echo (filter_var("123name@gmail.com" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Email
echo (filter_var("user+test@gmail.com" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Email
echo (filter_var("user+test@@gmail.com" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Not Email
echo (filter_var("user+test@gmail..com" , FILTER_VALIDATE_EMAIL) ? "Email" : "Not Email")."\n<br>"; //Not Email


echo "---------------------------------------------------\n<br>";
echo (filter_var("123.123.123.45" , FILTER_VALIDATE_IP) ? "IP" : "Not IP")."\n<br>";  //IP
echo (filter_var("123.123.123.45.88" , FILTER_VALIDATE_IP) ? "IP" : "Not IP")."\n<br>";  //NOT IP
echo (filter_var("123.7000.123.45" , FILTER_VALIDATE_IP) ? "IP" : "Not IP")."\n<br>";  //NOT IP
echo (filter_var("0.0.0.0" , FILTER_VALIDATE_IP) ? "IP" : "Not IP")."\n<br>";  //IP
echo (filter_var("0.0.0.256" , FILTER_VALIDATE_IP) ? "IP" : "Not IP")."\n<br>";  //Not IP

//Two types of filters
// IPv4 only
// filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);

// IPv6 only
// filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
echo "---------------------------------------------------\n<br>";

//true --> 1 - true - yes - on
//false --> 0 - false - no - off - empty string

//FILTER_NULL_ON_FAILURE ->return null if the value is unknown
echo (filter_var(true , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";   //Boolean
echo (filter_var(false , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Not Boolean
echo (filter_var("on" , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Boolean
echo (filter_var("OFF" , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Not Boolean
echo (filter_var("yes" , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Boolean
echo (filter_var("no" , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Not Boolean
echo (filter_var("1" , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Boolean
echo (filter_var("0" , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Not Boolean
echo (filter_var(" " , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Not Boolean
echo (filter_var("" , FILTER_VALIDATE_BOOLEAN)?"Boolean" : "Not Boolean")."\n<br>";  //Not Boolean



echo "--------------------------------------------------------------\n<br>";
echo (filter_var("https://chatgpt.com/c/6ad52ba3-9b54-83ea-a11c-61c1f2514f03", FILTER_VALIDATE_URL)?"URL" : "NOT URL")."\n<br>";//URL


// 1. Missing scheme
echo (filter_var("google.com", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 2. Missing host
echo (filter_var("https://", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 3. Missing host before path
echo (filter_var("https:///products", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 4. Space in host
echo (filter_var("https://my site.com", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 5. Space in domain
echo (filter_var("https://exampl  .com", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 6. Invalid port: letters instead of numbers
echo (filter_var("https://example.com:abc", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 7. Port out of range
echo (filter_var("https://example.com:99999", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 8. Consecutive dots in hostname
echo (filter_var("https://example..com", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 9. Host label starts with hyphen
echo (filter_var("https://-example.com", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 10. Host label ends with hyphen
echo (filter_var("https://example-.com", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 11. Invalid characters in host
echo (filter_var("https://exa*mple.com", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 12. Space in path
echo (filter_var("https://example.com/hello world", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 13. Invalid characters in URL
echo (filter_var("https://example.com/<test>", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 14. Missing host after @
echo (filter_var("https://user@", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL

// 15. Invalid IPv4 address format
echo (filter_var("http://999.999.999.999", FILTER_VALIDATE_URL) ? "URL" : "NOT URL") . "\n<br>"; // NOT URL




//remove illegal characters from emails
echo filter_var("bes///san@@@@@gmail....." , FILTER_SANITIZE_EMAIL)."\n<br>";
echo filter_var("bessan.com@gmail" , FILTER_SANITIZE_EMAIL)."\n<br>";
echo filter_var("bessan^   @gmail.com" , FILTER_SANITIZE_EMAIL)."\n<br>";
echo filter_var("11bessan^@gmail.com" , FILTER_SANITIZE_EMAIL)."\n<br>";
echo filter_var("11bessan^+@gmail.com" , FILTER_SANITIZE_EMAIL)."\n<br>";
echo filter_var('bes(san)@gmail.com', FILTER_SANITIZE_EMAIL) . "\n<br>";
echo filter_var('bes(san)ززز@gmail.com', FILTER_SANITIZE_EMAIL) . "\n<br>";
echo filter_var('bes(sa>>>زgmail.com', FILTER_SANITIZE_EMAIL) . "\n<br>";


echo filter_var(+5 ,FILTER_SANITIZE_NUMBER_INT )."\n<br>";
echo filter_var(-5, FILTER_SANITIZE_NUMBER_INT)."\n<br>";
echo filter_var(5.1 ,FILTER_SANITIZE_NUMBER_INT )."\n<br>";
echo filter_var("5.1" ,FILTER_SANITIZE_NUMBER_INT )."\n<br>";
echo filter_var("55e", FILTER_SANITIZE_NUMBER_INT)."\n<br>";
echo filter_var("55e*&1##", FILTER_SANITIZE_NUMBER_INT)."\n<br>";
echo filter_var(true, FILTER_SANITIZE_NUMBER_INT)."\n<br>";//1
echo filter_var(false, FILTER_SANITIZE_NUMBER_INT)."\n<br>";//0
echo filter_var("true", FILTER_SANITIZE_NUMBER_INT)."\n<br>";//0
echo filter_var("+++5.1" ,FILTER_SANITIZE_NUMBER_INT )."\n<br>";

echo "========================================\n<br>";
echo filter_var(+5.44 ,FILTER_SANITIZE_NUMBER_FLOAT )."\n<br>";
echo filter_var("+5.44" ,FILTER_SANITIZE_NUMBER_FLOAT )."\n<br>";
echo filter_var(true,FILTER_SANITIZE_NUMBER_FLOAT )."\n<br>";

echo filter_var("https://example.com>>>", FILTER_SANITIZE_URL) . "\n<br>";
echo filter_var("https://exa mple.com", FILTER_SANITIZE_URL) . "\n<br>";
echo filter_var("https://example.com/my }}}page", FILTER_SANITIZE_URL) . "\n<br>";
echo filter_var("https://example.com/search?q=hello world", FILTER_SANITIZE_URL) . "\n<br>";



echo filter_var("<h1>Hello</h1>", FILTER_SANITIZE_SPECIAL_CHARS)."\n<br>";
echo filter_var("< > &", FILTER_SANITIZE_SPECIAL_CHARS) . "<br>";
echo filter_var('"Hello"', FILTER_SANITIZE_SPECIAL_CHARS) . "<br>";
echo filter_var("'Hello'", FILTER_SANITIZE_SPECIAL_CHARS) . "<br>";
echo filter_var("5 < 10 && 10 > 5", FILTER_SANITIZE_SPECIAL_CHARS) . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form action = "filters.php" method="POST">
    <input type="text" name="name"  ><br><br>
    <input type="text" name="email"  ><br><br>
    <input type="number" name="age"  ><br><br>
    <button type="submit">Submit</button>
</form>
    
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT, [
        "options" => ["min_range" => 18, "max_range" => 65]
    ]);

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($email !== false && $email !== null &&
        $age !== false && $age !== null && $name != "") {
        echo "All inputs are valid!";
    } else {
        echo "Please check your inputs!";
    }
}


?>