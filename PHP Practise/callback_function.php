<?php

function exclaim($str) {
    return $str." !!!";
}


function print_formatted($str, $call_func) {
    echo $call_func($str);
}

print_formatted("Jakob Vargis", "exclaim");