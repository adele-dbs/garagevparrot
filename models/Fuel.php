<?php

require_once('models/Model.php');

class Fuel
{
    use Model;

    private int $id;
    private string $name;

    public function getFuel (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM fuels WHERE id = ?');
        $fuel = null;
        if ($stmt->execute([$id])) 
        {
            $fuel = $stmt->fetchObject('Fuel');
            if(!is_object($fuel)) 
            {
              $fuel = null;
            }
        return $fuel;
        }
    }
    
    public function getFuelId()
    {
        return $this->id;
    }

    public function getFuelName()
    {
        return $this->name;
    }
}