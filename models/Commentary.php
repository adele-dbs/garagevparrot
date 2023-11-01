<?php

require_once('models/Model.php');

class Commentary
{
    use Model;

    private int $id;
    private string $firstname;
    private string $commentary;
    private int $rating;

    public function addCommentary (string $addfirstname, string $addcommentary, int $addrating )
    {
        function valid_donnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
            $addfirstname = valid_donnees($_POST["addfirstname"]);
            $addcommentary = valid_donnees($_POST["addcommentary"]);
            $addrating = valid_donnees($_POST["addrating"]);
            
            if($addfirstname !== "" && $addcommentary !== "" && $addrating !== "" ) {
                try{
                    $stmt = $this->pdo->prepare('INSERT INTO commentaries (firstname, commentary, rating) 
                        VALUES (:addfirstname, :addcommentary, :addrating)');
                    $stmt->bindParam(':addfirstname', $addfirstname);
                    $stmt->bindParam(':addcommentary', $addcommentary);
                    $stmt->bindParam(':addrating', $addrating);
                    $stmt->execute();
                }
                catch(PDOException $e){
                    echo 'Erreur : '.$e->getMessage();
                }
            } else {
                ?>
                    <script type="text/javascript"> alert('Les informations du formulaire ne sont pas conformes') </script>
                <?php  
            } 
    }
    
    public function getCommentaryId()
    {
        return $this->id;
    }

    public function getCommentaryFirstame()
    {
        return $this->firstname;
    }

    public function getCommentary()
    {
        return $this->commentary;
    }

    public function getCommentaryRating()
    {
        return $this->rating;
    }
}