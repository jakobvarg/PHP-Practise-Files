<?php 

class Cars {
    public $brand;
    public $model;
    public $year;
    private static $category = "LIGHT SUV";

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_category() {
        return self::$category;
    }

    //we will create a protected functino
    protected function information() {
        echo "And, this message is from the class Cars Information function";
    }


    //__destruct() is called at the end of the script automatically by PHP and no need to call it.
    public function __destruct() {
        echo "<br><br>";
        echo "The brand is ". $this->brand." and the model is ". $this->model. ", and manufactured in ". $this->year. " Category: ".self::$category;
    }

}


class Showroom extends Cars {
    
    public function message() {
        echo "This is inside the showroom class which has inherited the properties of Cars class. ";
        //this is given here as the function information is protected type
        $this->information();
    }
}


$car = new Cars("Suzuki", "Fronx", 2024);

//need to create a new object then only can we display the method message from within Showroom Class else object not found error will arise
$showroom = new Showroom("Hyudai", "Creta", "2023");

echo $car->brand;

echo "<br><br>";

echo $car->get_category();

echo "<br><br>";

echo $showroom->message();

echo "<br><br>";

