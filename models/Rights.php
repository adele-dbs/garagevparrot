<?php

require_once('models/Model.php');

class Rights 
{
    use Model;

    public function getRights ()
    {
      $stmt = $this->pdo->query('SELECT * FROM rights');
      $rights = [];
      while ($right = $stmt->fetchObject('Right')) {
          $rights[] = $right;
      }
      return $rights;
    }  
}