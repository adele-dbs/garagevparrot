<?php

require_once('models/Model.php');

class Validation
{
    use Model;

    private int $id;
    private string $valid;
    
    public function getValidationtId()
    {
        return $this->id;
    }

    public function getValid()
    {
        return $this->valid;
    }
}