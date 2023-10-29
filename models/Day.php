<?php

require_once('models/Model.php');

class Day
{
    use Model;

    private int $id;
    private string $name;
    private string $timetable_id;

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