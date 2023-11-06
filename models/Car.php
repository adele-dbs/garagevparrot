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
    private int $brand_id;
    private int $model_id;

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

    public function addService (string $addname, string $adddescription)
    {
        function validAddServicedonnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
        $addname = validAddServicedonnees($_POST["addname"]);
        $adddescription = validAddServicedonnees($_POST["adddescription"]);
        
        if($addname !== "" && $adddescription !== "" ) {
                $stmt = $this->pdo->prepare('INSERT INTO services (name, description) 
                    VALUES (:addname, :adddescription)');
                $stmt->bindParam(':addname', $addname);
                $stmt->bindParam(':adddescription', $adddescription);
                $stmt->execute();
        } else {
            ?>
                <script type="text/javascript"> alert('Les informations du formulaire ne sont pas conformes') </script>
            <?php  
        } 
    }

    public function deleteservice (int $id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM services 
            WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateCar (int $updatecarid, string $updatename, string $updatedescription)
    {
        function validUpdateCardonnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
        $updatename = validUpdateCardonnees($_POST["updatename"]);
        $updatename = validUpdateCardonnees($_POST["updatename"]);
        $updatedescription = validUpdateCardonnees($_POST["updatedescription"]);

        $stmt = $this->pdo->prepare('UPDATE services 
            SET 
            name = :updatename, 
            name = :updatename,
            name = :updatename,
            name = :updatename,
            name = :updatename,
            name = :updatename,
            name = :updatename,
            name = :updatename,
            name = :updatename,
            description = :updatedescription 
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

    public function getCarBrandId()
    {
        return $this->brand_id;
    }

    public function getCarModelId()
    {
        return $this->model_id;
    }
}