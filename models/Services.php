<?php

require_once('models/Model.php');

class Services 
{
    use Model;

    public function getServices ()
    {
      $stmt = $this->pdo->query('SELECT * FROM services');
      $services = [];
      while ($service = $stmt->fetchObject('Service')) {
          $services[] = $service;
      }
      return $services;
    }  
}