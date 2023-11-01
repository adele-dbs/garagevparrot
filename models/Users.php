<?php

require_once('models/Model.php');

class Users 
{
    use Model;

    public function getUsers ()
    {
      $stmt = $this->pdo->query('SELECT * FROM users');
      $users = [];
      while ($user = $stmt->fetchObject('User')) {
          $users[] = $user;
      }
      return $users;
    }  
}