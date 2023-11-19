<?php

require_once('models/Model.php');

class Questions
{
    use Model;
    
    public function getQuestions ()
    {
      $questions = $this->pdo->query('SELECT questions.id questionsid, questions.firstname firstname, questions.lastname lastname, questions.email email, questions.phone_number phone, questions.message message, questions.car_id questioncarid, questions.reply_id replyid, validations.id validid, validations.valid valid 
      FROM questions
      JOIN validations ON validations.id = questions.reply_id
      ');
      return $questions;
    }  
}