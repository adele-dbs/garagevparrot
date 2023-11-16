<?php

require_once('models/Model.php');

class Cars 
{
    use Model;

    public function getCars ()
    {
      $cars = $this->pdo->query('SELECT cars.id carid, cars.picture1 p1, cars.picture2 p2, cars.picture3 p3, cars.picture4 p4, cars.picture5 p5, cars.price price, cars.year year, cars.mileage mileage, cars.brand_id, cars.model_id, brands.id, cars_models.id, brands.name brandname, cars_models.name modelname
        FROM cars
        INNER JOIN brands ON brands.id = cars.brand_id 
        INNER JOIN cars_models ON cars_models.id = cars.model_id');
      return $cars;
    }  

    public function getFilterCars (int $filterpricemin, int $filterpricemax, int $filteryearmin, int $filteryearmax, int $filtermileagemin, int $filtermileagemax)
    {
      if($filterpricemin !== "" && $filterpricemax !== "" && $filteryearmin !== "" && $filteryearmax !== "" && $filtermileagemin !== "" && $filtermileagemax !== "") {
        $carsFound = $this->pdo->query("SELECT cars.id carid, cars.picture1 p1, cars.picture2 p2, cars.picture3 p3, cars.picture4 p4, cars.picture5 p5, cars.price price, cars.year year, cars.mileage mileage, cars.brand_id, cars.model_id, brands.id, cars_models.id, brands.name brandname, cars_models.name modelname
          FROM cars
          INNER JOIN brands ON brands.id = cars.brand_id 
          INNER JOIN cars_models ON cars_models.id = cars.model_id 
          WHERE price BETWEEN '$filterpricemin' AND '$filterpricemax'
          AND year BETWEEN '$filteryearmin' AND '$filteryearmax'
          AND mileage BETWEEN '$filtermileagemin' AND '$filtermileagemax'
          ");
        return $carsFound;
      }
    }
}
