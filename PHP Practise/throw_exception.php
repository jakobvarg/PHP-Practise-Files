<?php

function divide($dividend, $divisor) {
    if($divisor==0) {
        throw new Exception("Cannot divide by Zero");
    } else {
        return $dividend / $divisor;
    }
    
}


try {
    echo divide(100,0);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "<br>The process has been completed";
}

