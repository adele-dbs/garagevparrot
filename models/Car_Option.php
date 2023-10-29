<?php

require_once('models/Model.php');

class CarOption
{
    use Model;

    private int $car_id; 
    private string $option_id;

    public function getCarId()
    {
        return $this->car_id;
    }

    public function getOptionId()
    {
        return $this->option_id;
    }
}