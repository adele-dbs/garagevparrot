<?php

require_once('models/Model.php');

class Brand
{
    use Model;

    private int $id;
    private string $name;

    public function getId()
    {
        return $this->id;
    }

    public function getBrandName()
    {
        return $this->name;
    }
}