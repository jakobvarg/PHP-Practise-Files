<?php 

class Table {
    public $title;
    public $num_rows = 0;
    
    public function message() {
        echo "<p>This {$this->title} table has {$this->num_rows} rows</p>";
    }
}

$table = new Table();
$table->num_rows = 5;
$table->title = "MY SPECIAL TABLE";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $table->message();

    ?>

</body>
</html>