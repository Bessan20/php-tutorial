<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "sessionsAndCookies.php" method = "POST" >
        name : <input type = "text" name = "name" >
        <input type = "submit">
    </form>
</body>
</html>

<?php
$cookie_name = "username";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {

    $cookie_value = $_POST["name"];

    setcookie(
        $cookie_name,
        $cookie_value,
        time() + (86400 * 30),
        "/"
    );

    echo "Cookie created successfully!";
    echo "<br>Username: " . htmlspecialchars($cookie_value);

} elseif (isset($_COOKIE[$cookie_name])) {

    echo "Cookie is set!";
    echo "<br>Value: " . htmlspecialchars($_COOKIE[$cookie_name]);

} else {
    echo "Cookie is not set yet!";
}
?>