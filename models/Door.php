<?php

require_once('models/Model.php');

class Door
{
    use Model;

    private int $id;
    private string $name;

    public function getDoor (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM doors WHERE id = ?');
        $door = null;
        if ($stmt->execute([$id])) 
        {
            $door = $stmt->fetchObject('Door');
            if(!is_object($door)) 
            {
              $door = null;
            }
        return $door;
        }
    }
    
    public function getDoorId()
    {
        return $this->id;
    }

    public function getDoorName()
    {
        return $this->name;
    }
}