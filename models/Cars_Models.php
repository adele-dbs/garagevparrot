<?php

require_once('models/Model.php');

class Cars_Models 
{
    use Model;

    public function getCarsModels ()
    {
      $stmt = $this->pdo->query('SELECT * FROM cars_models');
      $carsmodels = [];
      while ($carsmodel = $stmt->fetchObject('Cars_Model')) {
          $carsmodels[] = $carsmodel;
      }
      return $carsmodels;
    }  
}