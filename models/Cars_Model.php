<?php

require_once('models/Model.php');

class Cars_Model
{
    use Model;

    private int $id;
    private string $name;

    public function getModel (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM cars_models WHERE id = ?');
        $model = null;
        if ($stmt->execute([$id])) {
          $model = $stmt->fetchObject('Cars_Model');
          if(!is_object($model)) {
              $model = null;
          }
        return $model;
        }
    }

    public function getModelId()
    {
        return $this->id;
    }

    public function getModelName()
    {
        return $this->name;
    }
}