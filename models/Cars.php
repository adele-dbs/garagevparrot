<?php

require_once('models/Model.php');

class Cars 
{
    use Model;

    public function getCars ()
    {
      $cars = $this->pdo->query('SELECT cars.id carid, cars.picture1 p1, cars.price price, cars.year year, cars.mileage mileage, cars.brand_id, cars.model_id, brands.id, cars_models.id, brands.name brandname, cars_models.name modelname
        FROM cars
        INNER JOIN brands ON brands.id = cars.brand_id 
        INNER JOIN cars_models ON cars_models.id = cars.model_id');
      return $cars;
    }  
}