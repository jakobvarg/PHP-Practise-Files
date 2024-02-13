<?php 

trait message1 {
    public function message1() {
        echo "This is from message 1. <br>";
    }
}

trait message2 {
    public function message2() {
        echo "This is from message 2. <br>";
    }
}


class Welcome {
    use message1, message2;
}

$welcome = new Welcome();

$welcome->message1();
$welcome->message2();