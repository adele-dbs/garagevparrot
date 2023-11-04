<?php

require_once('models/Model.php');

class Users 
{
    use Model;

    public function getUsers ()
    {
      $users = $this->pdo->query('SELECT users.id userid, users.firstname firstname, users.lastname lastname, users.email email, users.password, users.right_id, rights.id rightid, rights.name rightname 
      FROM users
      INNER JOIN rights ON rights.id = users.right_id');
      return $users;
    }  
}