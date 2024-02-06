<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examples of Include and Require</title>
</head>
<body>
    <h2>An example of include using PHP</h2>

    <?php 
        include "./footer.php";


        echo "<br><br>";
        echo "Developed by $developer";

        //include "./noFile.php";
        //require "./noFile.php";

        echo "<br>";
        echo "This message is still displayed if we use include even if noFile.php exists but if require is used this line is not executed";
        echo "<br><br>";

        echo readfile("./webtext.txt");
        echo "<br>";

        $myFile = fopen("./webtext.txt","r");
        echo fread($myFile, filesize("./webtext.txt"));
        //always close an opened file
        fclose($myFile);
        echo "<br>";
    
    ?>
    
</body>
</html>