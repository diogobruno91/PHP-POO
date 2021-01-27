<?php 

class Car {
    public $color;
    public $year;
    public $model;

    public function run()
    {
        return $this->model . ' car is running...';
    }

    public function stop()
    {
        return $this->model . ' car is stopping...';
    }    
}

$car = new Car();
$car->color = 'White';
$car->year = 1990;
$car->model = 'Corsa';

print $car->run();
print $car->stop();

// $car2 = new Car();
// $car2->color = 'red';
// $car2->year = 2009;
// $car->$model = 'Cedan';


// $car2->run();
// $car2->stop();

