<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "mydbtest";

 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":email", $email);

    //inserting a new record
    $firstname = "Nimmy"; 
    $lastname = "Nirmal";
    $email = "nimmy@accenture.com";
    $stmt->execute();

    $firstname = "Nithya";
    $lastname = "Vipin";
    $email = "nithya@startup.com";
    $stmt->execute();

    echo "Record(s) are created using prepare and bind.<br>";
 } catch(PDOException $e) {
    echo "There is and error of ".$e->getMessage();
 }

 $conn = null;