<?php

require_once('models/Model.php');

class Cars 
{
    use Model;

    public function getCars ()
    {
      $stmt = $this->pdo->query('SELECT cars.id, cars.picture1, cars.price, cars.year, cars.mileage, cars.brand_id, cars.model_id, brands.id, model.id
        FROM cars
        INNER JOIN brands ON brands.id = cars.brand_id 
        INNER JOIN models ON models.id = cars.model_id');
      $cars = [];
      while ($car = $stmt->fetchObject('Car')) {
          $cars[] = $car;
      }
      return $cars;
    }  
}