<?php 

class Fruits {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }

}

Class Strawberry extends Fruits {
    public $weight;

    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro() {
        echo "The name of the fruit is {$this->name} and the color of the fruit is {$this->color} and it weighs {$this->weight}.";
    }
}

$strawberry = new Strawberry("Strawberry", "Pink", 100);

$strawberry->intro();

//class constants
class Goodbye {
    const LEAVING_MESSAGE = "GOODBYE and GOOD LUCK";

    public function bye() {
        echo "<br>".self::LEAVING_MESSAGE;
    }
}


$goodbye = new Goodbye;

$goodbye->bye();
