<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbtest";


try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM myguests";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_NUM);

        foreach($stmt as $val) {
            echo "First Name: ".$val[1]."<br>Last Name: ".$val[2]."<br>Email: ".$val[3]."<br><br>";
        }
} catch(PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$conn = null;

