<?php 

$servername = "localhost";
$username = "root";
$password = "";

try {
    //we are creating a connection, we dont specify a DB name as we are going to create a new one
    $conn = new PDO("mysql:host=$servername", $username, $password);

    //set the PDO errormode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SQL command to create database
    $sql = "CREATE DATABASE myDBTEST";

    //use exec() to execute the SQL as no results are returned
    $conn->exec($sql);

    echo "Database created successfully: <br>";

} catch (PDOException $e) {
    //in case the DB already exists
    echo $sql."<br>".$e->getMessage()."<br>";
}

$conn = null;

$dbname = "myDBTEST";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE myGuests (id INT AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    $conn->exec($sql);

    echo "Table is successfully created";

} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage()."<br>";
}

$conn = null;





