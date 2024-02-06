<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An example to set a cookie</title>
</head>
    <!-- The cookie is being set here -->
    <!-- setcookie(name, value, expire, path, domain, secure, httponly) here only name is mandatory parameter rest are optional -->
    
<body>

    <?php 
        $cookie_name = "user"; $cookie_value = "Jakob_Vargis";
        setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
    ?>

    <h2>Check if the cookie has been created or not</h2>

    <?php 

        if(!isset($_COOKIE[$cookie_name])) {
            echo "<h3> The cookie ".$cookie_name." has not been set. </h3>";
        } else {
            echo "<h3> The cookie ".$cookie_name." has a value of ".$cookie_value." and is set.</h3>";
        }

    ?>

    <h2>Check if the cookies are enabled</h2>

    <?php

        if(count($_COOKIE) > 0) {
            echo "<h3>The cookies are enabled</h3>";
        } else {
            echo "<h3>The cookies are not enabled</h3>";
        }

    ?>

</body>
</html>