<?php

require_once('models/Model.php');

class Cars_Model
{
    use Model;

    private int $id;
    private string $name;

    public function getId()
    {
        return $this->id;
    }

    public function getModelName()
    {
        return $this->name;
    }
}