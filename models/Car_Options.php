<?php

require_once('models/Model.php');


class CarOptions
{
    use Model;

    public function getCarOptionList (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM options 
        INNER JOIN car_option ON options.id = car_option.option_id 
        WHERE car_id = ?');
        $carOptions = null;
        if ($stmt->execute([$id])) 
        {
            $carOptions = [];
            while ($option = $stmt->fetchObject('Option')) 
            {
                $carOptions[] = $option;

                if(!is_object($option)) 
                {
                    $option = null;
                }
            }
            return $carOptions;
        }
    }
}