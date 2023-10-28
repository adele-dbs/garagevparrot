<?php

require_once('models/Model.php');

class Service
{
    use Model;

    private int $id;
    private string $name;
    private string $description;

    public function getId()
    {
        return $this->id;
    }

    public function getServiceName()
    {
        return $this->name;
    }

    public function getServiceDescription()
    {
        return $this->description;
    }
}