<?php

require_once('models/Model.php');

class Brands 
{
    use Model;

    public function getBrands ()
    {
        $stmt = $this->pdo->query('SELECT * FROM brands');
        $brands = [];
        while ($brand = $stmt->fetchObject('Brand')) 
        {
            $brands[] = $brand;
        }
        return $brands;
    }  
}