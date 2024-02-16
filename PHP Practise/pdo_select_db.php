<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbtest";


try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //we are limiting the output to the first 3 records (if it has more records it will be not selected and displayed)
        $sql = "SELECT * FROM myguests LIMIT 3";
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

