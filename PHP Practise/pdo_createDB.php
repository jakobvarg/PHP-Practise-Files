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
    echo $sql."<br>".$e->getMessage();
}

$conn = null;







