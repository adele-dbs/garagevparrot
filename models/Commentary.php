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
        if($addfirstname !== "" && $addcommentary !== "" && $addrating !== "" ) {
            $stmt = $this->pdo->prepare('INSERT INTO commentaries (firstname, commentary, rating) 
                VALUES (:addfirstname, :addcommentary, :addrating)');
            $stmt->bindParam(':addfirstname', $addfirstname);
            $stmt->bindParam(':addcommentary', $addcommentary);
            $stmt->bindParam(':addrating', $addrating);
            if ($stmt->execute()) {
                echo 'Votre commentaire a bien été ajouté';
            } else {
                echo 'Impossible d\'ajouter le commentaire';
            }
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