<?php

require_once('models/Model.php');

class Timetable
{
    use Model;

    private int $id;
    private string $hours;

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

    public function getTimetableId()
    {
        return $this->id;
    }

    public function getTimetableHours()
    {
        return $this->hours;
    }
}