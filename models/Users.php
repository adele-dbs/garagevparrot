<?php

require_once('models/Model.php');

class Users 
{
    use Model;

    public function getUsers ()
    {
      $stmt = $this->pdo->query('SELECT users.id, users.firstname, users.lastname, users.email, users.password, users.right_id, rights.id rightid, rights.name FROM users
      INNER JOIN rights ON rights.id = users.right_id');
      $users = [];
      while ($user = $stmt->fetchObject('User')) {
          $users[] = $user;
      }
      return $users;
    }  
}