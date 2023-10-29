<?php

require_once('models/Model.php');


class CarEquipments
{
    use Model;

    public function getCarEquipmentList (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM equipments 
        INNER JOIN car_equipment ON equipments.id = car_equipment.equipment_id 
        WHERE car_id = ?');
        $carEquipments = null;
        if ($stmt->execute([$id])) {
            $carEquipments = [];
            while ($equipment = $stmt->fetchObject('Equipment')) {
                $carEquipments[] = $equipment;

                if(!is_object($equipment)) {
                    $equipment = null;
                }
            }
        return $carEquipments;
        }
    }
}