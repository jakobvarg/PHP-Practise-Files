<?php 

class Greeting {
    public static $value = 999.99; 
    static public function welcome() {
        echo "Hello All <br>";
    }

    public function __construct() {
        echo self::welcome();
    }

}

//if construct is not created then the syntax below is sufficient
//Greeting::welcome();

//if construct is created then the syntax below is used
new Greeting();


class NewGreeting {
    public function swagatham() {
        Greeting::welcome();
    }
}

$newgreeting = new NewGreeting();

$newgreeting->swagatham();

echo Greeting::$value;

