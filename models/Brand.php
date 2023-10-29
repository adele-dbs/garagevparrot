<?php

require_once('models/Model.php');

class Brand
{
    use Model;

    private int $id;
    private string $name;

    public function getBrand (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM brands WHERE id = ?');
        $brand = null;
        if ($stmt->execute([$id])) {
          $brand = $stmt->fetchObject('Brand');
          if(!is_object($brand)) {
              $brand = null;
          }
        return $brand;
        }
    }
    
    public function getBrandId()
    {
        return $this->id;
    }

    public function getBrandName()
    {
        return $this->name;
    }
}