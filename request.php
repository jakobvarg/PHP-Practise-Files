<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example for SERVER and REQUEST</title>
</head>
<body>
                  
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type="text" name="inputDetail">
        <button type="submit">Submit</button>
    </form>

    <?php 

    //$_REQUEST will be able to get details of both the $_GET and $_POST methods.
    
        if($_SERVER["REQUEST_METHOD"]=="POST") {
            $inputDetail = htmlspecialchars($_REQUEST["inputDetail"]);
            echo "This is using the REQUEST option: ".$inputDetail;
            //you can use $_POST method also here
            echo "<br>";
            $inputDetail = htmlspecialchars($_POST["inputDetail"]);
            echo "This is using the POST option: ".$inputDetail;
        }
    
    ?>

</body>
</html>