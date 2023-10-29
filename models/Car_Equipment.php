<?php

require_once('models/Model.php');

class CarEquipment
{
    use Model;

    private int $car_id; 
    private string $equipment_id;

    public function getCarId()
    {
        return $this->car_id;
    }

    public function getEquipmentId()
    {
        return $this->equipment_id;
    }
}
