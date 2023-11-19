<?php

require_once('models/Model.php');

class Car 
{
    use Model;

    private int $id;
    private string $picture1;
    private string $picture2;
    private string $picture3;
    private string $picture4;
    private string $picture5;
    private int $price;
    private int $year;
    private int $mileage;
    private string $description;
    private int $brand_id;
    private int $model_id;
    private int $color_id;
    private int $door_id;
    private int $fuel_id;

    public function getcarsDetail (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM cars WHERE id = ?');
        $car = null;
        if ($stmt->execute([$id])) {
          $car = $stmt->fetchObject('Car');
          if(!is_object($car)) {
              $car = null;
          }
        return $car;
        }
    }

    public function getcarDetailById (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM cars WHERE id = ?');
        $carById = null;
        if ($stmt->execute([$id])) {
          $carById = $stmt->fetchObject('Car');
          if(!is_object($carById)) {
              $carById = null;
          }
        return $carById;
        }
    }

    public function addCar (string $addpicture1, string $addpicture2, string $addpicture3, string $addpicture4, string $addpicture5, int $addcarprice, int $addcaryear, int $addcarmileage, int $addcarbrand, int $addcarmodel,)
    {
        function validAddCardonnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
        $addpicture1 = validAddCardonnees($_POST["addpicture1"]);
        $addpicture2 = validAddCardonnees($_POST["addpicture2"]);
        $addpicture3 = validAddCardonnees($_POST["addpicture3"]);
        $addpicture4 = validAddCardonnees($_POST["addpicture4"]);
        $addpicture5 = validAddCardonnees($_POST["addpicture5"]);
        $addcarprice = validAddCardonnees($_POST["addcarprice"]);
        $addcaryear = validAddCardonnees($_POST["addcaryear"]);
        $addcarmileage = validAddCardonnees($_POST["addcarmileage"]);
        $addcarbrand = validAddCardonnees($_POST["addcarbrand"]);
        $addcarmodel = validAddCardonnees($_POST["addcarmodel"]);

        $addpicture1 ="views/pictures/$addpicture1";
        $addpicture2 ="views/pictures/$addpicture2";
        $addpicture3 ="views/pictures/$addpicture3";
        $addpicture4 ="views/pictures/$addpicture4";
        $addpicture5 ="views/pictures/$addpicture5";
        
        if($addpicture1 !== "" 
            && $addpicture2 !== "" 
            && $addpicture3 !== "" 
            && $addpicture4 !== "" 
            && $addpicture5 !== "" 
            && $addcarprice !== "" 
            && $addcaryear !== "" 
            && $addcarmileage !== "" 
            && $addcarbrand !== "" 
            && $addcarmodel !== "" ) {
                $stmt = $this->pdo->prepare('INSERT INTO cars (picture1, picture2, picture3, picture4, picture5, price, year, mileage, brand_id, model_id) 
                    VALUES (:addpicture1, :addpicture2, :addpicture3, :addpicture4, :addpicture5, :addcarprice, :addcaryear, :addcarmileage, :addcarbrand, :addcarmodel)');
                $stmt->bindParam(':addpicture1', $addpicture1);
                $stmt->bindParam(':addpicture2', $addpicture2);
                $stmt->bindParam(':addpicture3', $addpicture3);
                $stmt->bindParam(':addpicture4', $addpicture4);
                $stmt->bindParam(':addpicture5', $addpicture5);
                $stmt->bindParam(':addcarprice', $addcarprice);
                $stmt->bindParam(':addcaryear', $addcaryear);
                $stmt->bindParam(':addcarmileage', $addcarmileage);
                $stmt->bindParam(':addcarbrand', $addcarbrand);
                $stmt->bindParam(':addcarmodel', $addcarmodel);
                $stmt->execute();
        } else {
            ?>
                <script type="text/javascript"> alert('Les informations du formulaire ne sont pas conformes') </script>
            <?php  
        } 
    }

    public function deleteCar (int $id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM cars 
            WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateCar (int $updatecarid, string $updatecarp1, string $updatecarp2, string $updatecarp3, string $updatecarp4, string $updatecarp5, int $updatecarpyear, int $updatecarprice, int $updatecarpmileage, int $updatecarbrand, int $updatecarmodel,)
    {
        function validUpdateCardonnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
        $updatecarp1 = validUpdateCardonnees($_POST["updatecarp1"]);
        $updatecarp2 = validUpdateCardonnees($_POST["updatecarp2"]);
        $updatecarp3 = validUpdateCardonnees($_POST["updatecarp3"]);
        $updatecarp4 = validUpdateCardonnees($_POST["updatecarp4"]);
        $updatecarp5 = validUpdateCardonnees($_POST["updatecarp5"]);
        $updatecarpyear = validUpdateCardonnees($_POST["updatecarpyear"]);
        $updatecarprice = validUpdateCardonnees($_POST["updatecarprice"]);
        $updatecarpmileage = validUpdateCardonnees($_POST["updatecarpmileage"]);
        $updatecarbrand = validUpdateCardonnees($_POST["updatecarbrand"]);
        $updatecarmodel = validUpdateCardonnees($_POST["updatecarmodel"]);

        $stmt = $this->pdo->prepare('UPDATE cars 
            SET 
            picture1 = :updatecarp1, 
            picture2 = :updatecarp2,
            picture3 = :updatecarp3,
            picture4 = :updatecarp4,
            picture5 = :updatecarp5,
            year = :updatecarpyear,
            price = :updatecarprice,
            mileage = :updatecarpmileage,
            brand_id = :updatecarbrand,
            model_id = :updatecarmodel 
            WHERE id = :updatecarid');
        $stmt->bindParam(':updatecarid', $updatecarid);
        $stmt->bindParam(':updatecarp1', $updatecarp1);
        $stmt->bindParam(':updatecarp2', $updatecarp2);
        $stmt->bindParam(':updatecarp3', $updatecarp3);
        $stmt->bindParam(':updatecarp4', $updatecarp4);
        $stmt->bindParam(':updatecarp5', $updatecarp5);
        $stmt->bindParam(':updatecarpyear', $updatecarpyear);
        $stmt->bindParam(':updatecarprice', $updatecarprice);
        $stmt->bindParam(':updatecarpmileage', $updatecarpmileage);
        $stmt->bindParam(':updatecarbrand', $updatecarbrand);
        $stmt->bindParam(':updatecarmodel', $updatecarmodel);
        $stmt->execute();
    }


    public function getCarId()
    {
        return $this->id;
    }

    public function getCarPicture1()
    {
        return $this->picture1;
    }

    public function getCarPicture2()
    {
        return $this->picture2;
    }

    public function getCarPicture3()
    {
        return $this->picture3;
    }

    public function getCarPicture4()
    {
        return $this->picture4;
    }

    public function getCarPicture5()
    {
        return $this->picture5;
    }

    public function getCarPrice()
    {
        return $this->price;
    }

    public function getCarYear()
    {
        return $this->year;
    }

    public function getCarMileage()
    {
        return $this->mileage;
    }

    public function getCarDescription()
    {
        return $this->description;
    }

    public function getCarBrandId()
    {
        return $this->brand_id;
    }

    public function getCarModelId()
    {
        return $this->model_id;
    }

    public function getCarColorId()
    {
        return $this->color_id;
    }

    public function getCarDoorId()
    {
        return $this->door_id;
    }

    public function getCarFuelId()
    {
        return $this->fuel_id;
    }
}