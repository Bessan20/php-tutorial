<?php
//$conn save connection object
$conn =new mysqli("localhost" , "root" , "" , "we");


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//print the connection object
print_r($conn);
echo "{$conn->connect_error}\n<br>";
echo "{$conn->affected_rows}\n<br>";

echo "{$conn->server_info}\n<br>";
echo "$conn->host_info\n<br>";
echo "$conn->client_info\n<br>";

print_r([1 , 2 , 3 , 4]);
echo "\n<br>Connected successfully\n<br>";

//create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }


//insert users
// $sql = "INSERT INTO MyGuests (firstname , lastname ,email)
// VALUES
// ('bessan' , 'mohamed' , 'bessan@gmail.com'),
// ('Sara' , 'Ali' , 'sara@gmail.com'),
// ('Rowan','Elsadat','rowan@hmail.com')
// ";

// if($conn->query($sql) === TRUE ) {
//   echo "Users inserted successfully\n<br>";
//   echo $conn->affected_rows."\n<br>";
//   echo $conn->insert_id."\n<br>";
// }
// else {
//   echo "ERROR : ".$conn->error."\n<br>"; 
// }

//get all users
$sql = "SELECT * FROM MyGuests";
$results = $conn->query($sql);

echo $results->num_rows."\n<br>";
print_r($results->fetch_all());
echo "\n<br>";

/*

<?php

// 1. CONNECT TO DATABASE
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=testdb;charset=utf8mb4",
        "username",
        "password"
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "Connected successfully<br>";

    // 2. SELECT DATA
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row["name"] . "<br>";
    }

    // 3. INSERT DATA
    $sql = "INSERT INTO users (name, email)
            VALUES (:name, :email)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "name" => "Asmaa El-hadad",
        "email" => "asmaa@example.com"
    ]);

    echo "User inserted successfully";

} catch (PDOException $e) {

    // 4. HANDLE ERRORS
    echo "Database error occurred.";

}
?>

*/


?>