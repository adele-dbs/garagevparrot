<?php

require_once('models/Model.php');

class Commentary
{
    use Model;

    private int $id;
    private string $firstname;
    private string $commentary;
    private int $rating;
    private int $valid_id;

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

    public function getCommentaryDetailById (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM commentaries WHERE id = ?');
        $commentaryById = null;
        if ($stmt->execute([$id])) {
          $commentaryById = $stmt->fetchObject('Commentary');
          if(!is_object($commentaryById)) {
              $commentaryById = null;
          }
        return $commentaryById;
        }
    }

    public function validCommentary (int $validecommentid, int $validecomment)
    {
        $stmt = $this->pdo->prepare('UPDATE commentaries 
            SET 
            valid_id = :validecomment 
            WHERE id = :validecommentid');
        $stmt->bindParam(':validecommentid', $validecommentid);
        $stmt->bindParam(':validecomment', $validecomment);
        $stmt->execute();
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

    public function getCommentaryValid()
    {
        return $this->valid_id;
    }
}