<?php

require_once('models/Model.php');

class Commentaries
{
    use Model;

    public function getCommentariesValid ()
    {
      $commentariesvalid = $this->pdo->query('SELECT commentaries.id id, commentaries.firstname name, commentaries.commentary commentary, commentaries.rating rating, commentaries.valid_id valid  
      FROM commentaries 
      WHERE valid_id=2');
      return $commentariesvalid;
    } 

    public function getCommentaries ()
    {
      $commentaries = $this->pdo->query('SELECT commentaries.id id, commentaries.firstname name, 
      commentaries.commentary commentary, commentaries.rating rating, commentaries.valid_id valid, 
      validations.id validid, validations.valid validname  
      FROM commentaries
      INNER JOIN validations ON validations.id = commentaries.valid_id');
      return $commentaries;
    }

    public function getCommentariesList ()
    {
      $stmt = $this->pdo->query('SELECT * FROM commentaries');
      $commentarieslist = [];
      while ($commentary = $stmt->fetchObject('Commentary')) {
          $commentarieslist[] = $commentary;
      }
      return $commentarieslist;
    }
}