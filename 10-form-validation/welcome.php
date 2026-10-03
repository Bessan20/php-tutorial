<?php

//  echo "Welcome {$_POST["name"]}\n<br>";
//  echo "Your email is {$_POST["email"]}\n<br>";

//Super global variables :
// $_GET
// $_POST
// $_SERVER
// $_SESSION
// $_COOKIE
// $_FILES
// $_REQUEST
// $_ENV

// $_SERVER = [
//     "REQUEST_METHOD" => "POST",
//     "SERVER_NAME" => "localhost",
//     "HTTP_HOST" => "localhost"
// ];
// if($_SERVER["REQUEST_METHOD"] == "POST") {
    

//     echo "{$_SERVER["REQUEST_METHOD"]}\n<br>";   //POST
//     echo "{$_SERVER["SERVER_NAME"]}\n<br>";    //localhost
//     echo "{$_SERVER["HTTP_HOST"]}\n<br>";    //localhost


//     // $name = $_POST["name"];
//     // $email = $_POST["email"];
//     // $password = $_POST["password"];
    
//     // echo (empty($name))? "<p style = 'color : red;'>Your name is required.</p>\n<br>" : "<p style = 'color : green;'>Welcome {$name}</p>\n<br>";

//     // echo "Your email is {$_POST["email"]}\n<br>";
// }

$name = $_POST["name"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo (empty($name)) ? "<p style = 'color: red;'>Your name is required</p>" : "<p style = 'color : green;'>Welcome {$name} </p>";
}
else {
    echo "Welcome {$_GET["name"]}\n<br>";
   echo "Your email is {$_GET["email"]}\n<br>";
}
?>