<?php

require_once('models/Model.php');

class Option
{
    use Model;

    private int $id;
    private string $name;
    
    public function getOptionId()
    {
        return $this->id;
    }

    public function getOptionName()
    {
        return $this->name;
    }
}