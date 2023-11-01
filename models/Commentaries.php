<?php

require_once('models/Model.php');

class Commentaries
{
    use Model;

    public function getCommentaries ()
    {
      $commentaries = $this->pdo->query('SELECT commentaries.id id, commentaries.firstname name, commentaries.commentary commentary, commentaries.rating rating, commentaries.valid valid  
      FROM commentaries 
      WHERE valid=1');
      return $commentaries;
    }  
}