<?php
class car{
    public $color;//property
    public function setColor($c) {
        return 'Car is : '.$this->color=$c;
    }
    public function sayHello() {
        return 'Sey Hello';
    }
}


$newcar=new car;

$test=$newcar->setColor('red');
echo $test;
echo '<hr>';

echo $newcar->sayHello();

