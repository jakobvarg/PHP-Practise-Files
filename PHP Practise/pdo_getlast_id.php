<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbtest";

try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //initiating the multiple insertion transaction process
        $conn->beginTransaction();
        
        //to enter multiple records into the mysql table
        $conn->exec("INSERT INTO myguests (firstname, lastname, email) VALUES ('Usha', 'Xavier', 'ushaxavier@gmail.com')");
        $conn->exec("INSERT INTO myguests (firstname, lastname, email) VALUES ('Xavier', 'K K', 'xavierkk@gmail.com')");
  
        //get the last entered unique id
        $last_id = $conn->lastInsertId();

        //ending the transaction
        $conn->commit();


        echo "<br>New records is successfully created. The last inserted ID is: ".$last_id."<br>";


} catch(PDOException $e) {
        //rollback in case there is an error
        $conn->rollback();

        echo $sql."<br>".$e->getMessage();
}

$conn = null;
