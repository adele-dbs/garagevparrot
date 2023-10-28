<?php

require_once('models/Model.php');

class Car 
{
    use Model;

    private int $id;
    private string $picture1;
    private string $picture2;
    private string $picture3;
    private string $picture4;
    private string $picture5;
    private int $price;
    private int $year;
    private int $mileage;
    private int $brand_id;
    private int $model_id;

    public function getCarId()
    {
        return $this->id;
    }

    public function getCarPicture1()
    {
        return $this->picture1;
    }

    public function getCarPicture2()
    {
        return $this->picture2;
    }

    public function getCarPicture3()
    {
        return $this->picture3;
    }

    public function getCarPicture4()
    {
        return $this->picture4;
    }

    public function getCarPicture5()
    {
        return $this->picture5;
    }

    public function getCarPrice()
    {
        return $this->price;
    }

    public function getCarYear()
    {
        return $this->year;
    }

    public function getCarMileage()
    {
        return $this->mileage;
    }

    public function getCarBrandId()
    {
        return $this->brand_id;
    }

    public function getCarModelId()
    {
        return $this->model_id;
    }
}