<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Basics</title>
</head>
<body>
    <h2>Arrays</h2>
    <?php 

        echo "<h3><i>Using foreach loop to display the fruit names</i></h3>";
        $fruits = array("Banana", "Grapes", "Orange", "Pineapple");

        foreach($fruits as $name) {
            echo "$name."."<br>";
        }

    ?>

    <h3><i>Arrays with Keys and Values</i></h3>

    <?php
        $employee = array("Jakob" => "48", "Seena" => "47", "Rohan" => "19");

        foreach($employee as $name=>$age){
            echo "Name: $name, Age: $age <br>";
        }

    ?>

    <h3><i>Change value of array using foreach</i></h3>

    <?php 
        $colors = array("Red", "Blue", "Green", "Black");

        var_dump($colors);

        echo "<br><h4><i>Here in foreach the '&' indicates that the value can be changed</i></h4>";
        foreach($colors as &$colorName) {
            if($colorName == "Blue") {
                $colorName = "Yellow";
            }
        }

        var_dump($colors);

        echo "<br><h4><i>Use array_push() to add a new element into an array</i></h4>";
        array_push($colors, "Blue");
        var_dump($colors);

        echo "<br><h4><i>Storing a function in a array</i></h4>";

        function myFunction() {
            echo "Hi!, i an echoing from inside of a function";
        }

        $cars = ["volvo", "mustang", myFunction()];
        
        $cars[2];
    ?>
    

</body>
</html>