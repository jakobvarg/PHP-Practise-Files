<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbtest";
$dbtable = "myguests";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO myguests (firstname, lastname, email) VALUES ('Jakob', 'Vargis', 'jakob@360medicare.com')";

    $conn->exec($sql);

    echo "Record successfully added to myGuest Table";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$conn = null;