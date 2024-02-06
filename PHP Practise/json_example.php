<?php 
//JSON - JavaScript Object Notation
//json_encode() - convert an array into a json file

$age = array("Jakob" => 48, "Seena" => 45, "Rohan" => 19);

$age_to_json = json_encode($age);

echo $age_to_json;

echo "<br><br>";

var_dump($age_to_json);

echo "<br><br>";
//json_decode - syntax json_decode(json_file, true) - Conversts JSON object into PHP associative array

$json_object = '{"Anitha": 30, "Arya": 35, "Ligi": 37}';
$phpassoc_array = json_decode($json_object, true);

//accessing decoded values
echo "Arya is ".$phpassoc_array["Arya"]." years old.";

echo "<br><br>";

foreach($phpassoc_array as $key => $value) {
    echo "$key is aged ".$value."<br>";
}

echo "<br><br>";

var_dump($phpassoc_array);


