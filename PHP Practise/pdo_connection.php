<?php 

//the default username of PHPMYADMIN is root and the password is blank

$servername = "localhost";
$username = "root";
$password = "";

try {
                  //this part must be enclosed within double quotes
    $conn = new PDO("mysql:host=$servername;dbname=laravelbasicdemo", $username, $password);
    //set PDO error module execption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfullly";
 } catch (PDOException $e) {
    echo "Connection Failed: ".$e->getMessage();
 }

 $conn = null;