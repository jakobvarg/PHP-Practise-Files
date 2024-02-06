<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop Example</title>
</head>
<body>
    <h2>This is an example for PHP do while loop</h2>
    <?php 
        $count = 1;
        do {
            echo "10 x $count => ".($count*10)." <br>";
            $count++;
        } while ($count <= 10)
    ?>

    <br><br>
    <h2>This is an example of while loop</h2>
    <?php
        $counter = 1;
        while($counter <= 10){
            echo "20 x $counter => ".($counter*20)." <br>";
            $counter++;
        }
    ?>
</body>
</html>