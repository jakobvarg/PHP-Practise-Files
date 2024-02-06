<?php 

//parent class
abstract class ParentClass {
    //abstract medthod with an argument
    abstract protected function prefixName($name);
}


//child class
class ChildClass extends ParentClass {
    public function prefixName($name) {
      if($name == "Jakob") {
        $prefix = "Mr.";
      } elseif($name == "Seena") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "<br> {$prefix} {$name}";
    }
}

$childclass = new ChildClass;

echo $childclass->prefixName("Jakob");

$childclass = new ChildClass;

echo $childclass->prefixName("Seena");