<?php 

interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow...<br>";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo "Bow Bow...<br>";
    }
}


$cat = new Cat();
$dog = new Dog();

$cat->makeSound();
$dog->makeSound();

