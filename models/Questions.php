<?php

require_once('models/Model.php');

class Questions
{
    use Model;

    public function getQuestions ()
    {
      $questions = $this->pdo->query('SELECT questions.id questionsid, questions.firstname firstname, questions.lastname lastname, questions.email email, questions.phone_number phone, questions.car_id, cars.id carid, cars.name rightname 
      FROM questions
      INNER JOIN cars ON cars.id = questions.car_id');
      return $questions;
    }  
}