<?php

require_once('models/Model.php');

class Timetable
{
    use Model;

    private int $id;
    private string $hours;

    public function getTimetableDetailById (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM timetables WHERE id = ?');
        $timetableById = null;
        if ($stmt->execute([$id])) {
          $timetableById = $stmt->fetchObject('Timetable');
          if(!is_object($timetableById)) {
              $timetableById = null;
          }
        return $timetableById;
        }
    }

    public function addTimetable (string $addtimetablehours)
    {
        function validAddTimetabledonnees($addonnees) {
            $addonnees = trim($addonnees);
            $addonnees = stripslashes($addonnees);
            $addonnees = htmlspecialchars($addonnees);
            return $addonnees;
        }
        
        $addtimetablehours = validAddTimetabledonnees($_POST["addtimetablehours"]);

        if($addtimetablehours !== "") {
                $stmt = $this->pdo->prepare('INSERT INTO timetables (hours) 
                    VALUES (:addtimetablehours)');
                $stmt->bindParam(':addtimetablehours', $addtimetablehours);
                $stmt->execute();
        } else {
            ?>
                <script type="text/javascript"> alert('Les informations du formulaire ne sont pas conformes') </script>
            <?php  
        } 
    }

    public function deleteTimetable (int $id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM timetables 
            WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateTimetable (int $updatetimetableid, string $updatetimetablehours)
    {
        function validUpdateTimetabledonnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
        $updatetimetablehours = validUpdateTimetabledonnees($_POST["updatetimetablehours"]);

        $stmt = $this->pdo->prepare('UPDATE timetables 
            SET 
            hours = :updatetimetablehours, 
            WHERE id = :updatetimetableid');
        $stmt->bindParam(':updatetimetableid', $updatetimetableid);
        $stmt->bindParam(':updatetimetablehours', $updatetimetablehours);
        $stmt->execute();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTimetableHours()
    {
        return $this->hours;
    }
}