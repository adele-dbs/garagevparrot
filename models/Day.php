<?php

require_once('models/Model.php');

class Day
{
    use Model;

    private int $id;
    private string $name;
    private string $timetable_id;

    public function getDayDetailById (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM days WHERE id = ?');
        $dayById = null;
        if ($stmt->execute([$id])) {
          $dayById = $stmt->fetchObject('Day');
          if(!is_object($dayById)) {
              $dayById = null;
          }
        return $dayById;
        }
    }

    public function updateDay (int $updatedayid, int $updatedaytimetable)
    {
        $stmt = $this->pdo->prepare('UPDATE days 
            SET 
            timetable_id = :updatedaytimetable
            WHERE id = :updatedayid');
        $stmt->bindParam(':updatedayid', $updatedayid);
        $stmt->bindParam(':updatedaytimetable', $updatedaytimetable);
        $stmt->execute();
    }

    public function getDayId()
    {
        return $this->id;
    }

    public function getDayName()
    {
        return $this->name;
    }

    public function getDayTimetableId()
    {
        return $this->timetable_id;
    }
}