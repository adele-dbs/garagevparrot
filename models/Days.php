<?php

require_once('models/Model.php');

class Days 
{
    use Model;

    public function getDays ()
    {
      $stmt = $this->pdo->query('SELECT days.id, days.name, days.timetable_id, timetables.id, timetables.hours
        FROM days
        INNER JOIN timetables ON timetables.id = days.timetable_id');
      $days = [];
      while ($day = $stmt->fetchObject('Day')) {
          $days[] = $day;
      }
      return $days;
    }  
}