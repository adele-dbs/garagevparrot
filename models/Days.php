<?php

require_once('models/Model.php');

class Days 
{
    use Model;

    public function getDays ()
    {
      $days = $this->pdo->query('SELECT days.id daysid, days.name daysname, days.timetable_id daystimeid, timetables.id timetablesid, timetables.hours dayshours
        FROM days
        INNER JOIN timetables ON timetables.id = days.timetable_id');
      return $days;
    }  
}