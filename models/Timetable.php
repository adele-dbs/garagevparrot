<?php

require_once('models/Model.php');

class Timetable
{
    use Model;

    private int $id;
    private string $hours;

    public function getId()
    {
        return $this->id;
    }

    public function getTimetableHours()
    {
        return $this->hours;
    }
}