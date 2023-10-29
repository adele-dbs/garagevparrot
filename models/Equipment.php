<?php

require_once('models/Model.php');

class Equipment
{
    use Model;

    private int $id;
    private string $name;
    
    public function getEquipmentId()
    {
        return $this->id;
    }

    public function getEquipmentName()
    {
        return $this->name;
    }
}