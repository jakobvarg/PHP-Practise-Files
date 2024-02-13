<?php 

function myPrintable(iterable $iterable) {
    foreach($iterable as $item) {
        echo $item;
    }
}


$arr = ["R", "O", "H", "A", "N"];
myPrintable($arr);

echo "<br><br>";

//return an iterable

function myIterable() : Iterable  {
    return ["R", "O", "H", "A", "N", " ", "J", "A", "C", "O", "B"];
}

$newIterable = myIterable();
foreach($newIterable as $item) {
    echo $item;
}