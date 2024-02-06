<?php 

//parent class

abstract class Car {

    public $name;
    public $model;

    public function __construct($name, $model) {
        $this->name = $name;
        $this->model = $model;
    }

    abstract public function intro() : string;
}

//child class
class Citreon extends Car {
    public function intro() : string {
        return "My car is an $this->name made in $this->model";
    }
}


$citreon = new Citreon("C3 Citreon",2023);

echo $citreon->intro();