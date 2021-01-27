<?php

class Animal {
    public $name;

    public function sleep() 
    {
        return $this->name . ' are sleepnig...';
    }
}


class Dog extends Animal 
{

    public $name = 'Doog';

    public function sleep()
    {

        //subcreveu e chamo metodo pai.
        print parent::sleep() . "<br>";
        return 'Dog are sleepnig';
    }
}

class Bird extends Animal 
{

}

$dog = new Dog();

print $dog->sleep();

print "<br>";

$bird = new Bird();
$bird->name = 'Chico';

print $bird->sleep();