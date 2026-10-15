<!DOCTYPE html>
<html>
<head>
    <title>PDO Demo</title>
</head>
<body>

<h1>PHP Data Objects (PDO)</h1>

<?php

/*
    قبل التشغيل: نفذ الأوامر دي مرة واحدة في phpMyAdmin (تبويب SQL)

    CREATE DATABASE testdb;
    USE testdb;
    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100)
    );
*/


// =====================================================
// 3-2  الاتصال بقاعدة البيانات
// =====================================================
echo "<h2>1) Connecting to the Database</h2>";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


// =====================================================
// 3-5  إدخال بيانات (Prepared Statement)
// =====================================================
echo "<h2>2) Inserting Data</h2>";

$stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');

$stmt->execute([
    'name'  => 'Asmaa El-hadad',
    'email' => 'asmaa@example.com'
]);

echo "User inserted successfully";


// =====================================================
// 3-3  تنفيذ استعلام بسيط
// =====================================================
echo "<h2>3) Executing a Simple Query</h2>";

$stmt = $pdo->query('SELECT * FROM users');

while ($row = $stmt->fetch()) {
    echo $row['name'] . "<br>";
}


// =====================================================
// 3-4  استعلام باستخدام Prepared Statement
// =====================================================
echo "<h2>4) Using Prepared Statements</h2>";

$user_id = 1;

$stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
$stmt->execute(['id' => $user_id]);
$user = $stmt->fetch();

echo "Name: "  . $user['name']  . "<br>";
echo "Email: " . $user['email'];

?>

</body>
</html>
