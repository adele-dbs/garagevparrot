<?php

require_once('models/Model.php');

class Validations 
{
    use Model;

    public function getValidations ()
    {
      $stmt = $this->pdo->query('SELECT * FROM validations');
      $validations = [];
      while ($validation = $stmt->fetchObject('Validation')) {
          $validations[] = $validation;
      }
      return $validations;
    }  
}