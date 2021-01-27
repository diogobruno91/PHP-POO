<?php 

class Car {

    public $color;
    public $year;
    public $model;

    public function __construct($color, $year, $model)
    {
        $this->color = $color;
        $this->year = $year;
        $this->model = $model;
    }
    
    public function run()
    {
        return $this->model . ' car is running...';
    }

    public function stop()
    {
        return $this->model . ' car is stopping...';
    }
    
    public function __destruct()
    {
        print ' Removing Object';
    }
}

$car = new Car("white", 1990, "Corsa");

print $car->model;
