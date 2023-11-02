<?php

require_once('models/Model.php');

class Right
{
    use Model;

    private int $id;
    private string $name;
    
    public function getRightId()
    {
        return $this->id;
    }

    public function getRightName()
    {
        return $this->name;
    }
}