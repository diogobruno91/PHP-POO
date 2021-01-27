<?php
//public
//protected
//private

class Person 
{
    public $name;
    private $age = 30;

    public function showName()
    {
        return $this->name;
    }

    public function showAge()
    {
        return $this->age;
    }
}

class Woman extends Person
{
    // public function showWomanAge()
    // {
    //     return $this->age;
    // }
}

$person = new Person();
$person->name = 'Diogo';
//$person->age = 29;

print $person->showName();
print "<br>";
print $person->showAge();

print "<br>";
// $woman = new Woman();
// print $woman->showWomanAge();