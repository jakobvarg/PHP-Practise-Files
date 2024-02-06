<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - 2 Dimensional</title>
</head>
<body>
    <h2>Using For Loop to lopp through a two dimensional array</h2>

    <?php 
        $file_name = $_SERVER['PHP_SELF'];
        echo $file_name."<br><br>";
        $cars = [["Volvo", 12, 10], ["Benz",10,8], ["BMW",10,10]];

        for( $i = 0; $i < count($cars); $i++ ) {
            echo "Car: ". $cars[$i][0] ." Stock: ". $cars[$i][1]." Sold: ".$cars[$i][2]. "<br>";
        }


    ?>



</body>
</html>