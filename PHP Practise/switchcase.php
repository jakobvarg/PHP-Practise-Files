<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case PHP</title>
</head>
<body>
    <h2>This is an example for the switch case conditional</h2>
    <?php
        $favColor = "Blck";
        switch($favColor) {
            case "Red":
                echo "Red is my favorite color";
                break;
            case "Black":
                echo "Black is my favorite color";
                break;
            case "Blue":
                echo "Blue is my favorite color";
                break;
            default:
                echo "My favorite colors is not not known to anyone<br>";
                echo '<i>*Hint correct the spelling of favorite color assigned to variable.</i>';
                break;
        }
    ?>
</body>
</html>