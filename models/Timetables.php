<?php

require_once('models/Model.php');

class Timetables 
{
    use Model;

    public function getTimetables ()
    {
      $stmt = $this->pdo->query('SELECT timetables.id timeid, timetables.hours hours, days.id dayid, days.name dayname, days.timetable_id daytimeid FROM timetables
      INNER JOIN days ON days.timetable_id = timetables.id');
      $timetables = [];
      while ($timetable = $stmt->fetchObject('Timetable')) {
          $timetables[] = $timetable;
      }
      return $timetables;
    }  
}