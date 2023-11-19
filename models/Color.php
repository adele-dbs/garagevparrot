<?php

require_once('models/Model.php');

class Color
{
    use Model;

    private int $id;
    private string $name;

    public function getColor (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM colors WHERE id = ?');
        $color = null;
        if ($stmt->execute([$id])) 
        {
            $color = $stmt->fetchObject('Color');
            if(!is_object($color)) 
            {
              $color = null;
            }
        return $color;
        }
    }
    
    public function getColorId()
    {
        return $this->id;
    }

    public function getColorName()
    {
        return $this->name;
    }
}