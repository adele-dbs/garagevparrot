<?php

require_once('models/Model.php');

class Question
{
    use Model;

    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $phone_number;
    private string $message;
    private int $car_id;
    private int $reply_id;

    
   public function getQuestionDetailById (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM questions WHERE id = ?');
        $questionById = null;
        if ($stmt->execute([$id])) {
          $questionById = $stmt->fetchObject('Question');
          if(!is_object($questionById)) {
              $questionById = null;
          }
        return $questionById;
        }
    }

    function addQuestion (string $addquestionfirstname, string $addquestionlastname, string $addquestionemail, string $addquestionphone, string $addquestionmessage)
    {
        function validContactFormdonnees($addonnees) {
            $addonnees = trim($addonnees);
            $addonnees = stripslashes($addonnees);
            $addonnees = htmlspecialchars($addonnees);
            return $addonnees;
        }
        
        $addquestionfirstname = validContactFormdonnees($_POST["addquestionfirstname"]);
        $addquestionlastname = validContactFormdonnees($_POST["addquestionlastname"]);
        $addquestionemail = validContactFormdonnees($_POST["addquestionemail"]);
        $addquestionphone = validContactFormdonnees($_POST["addquestionphone"]);
        $addquestionmessage = validContactFormdonnees($_POST["addquestionmessage"]);

        if($addquestionfirstname !== "" && $addquestionlastname !== "" && $addquestionemail !== "" && $addquestionphone !== "" && $addquestionmessage !== "" ) {
                $stmt = $this->pdo->prepare('INSERT INTO questions (firstname, lastname, email, phone_number, message ) 
                    VALUES (:addquestionfirstname, :addquestionlastname, :addquestionemail, :addquestionphone, :addquestionmessage)');
                $stmt->bindParam(':addquestionfirstname', $addquestionfirstname);
                $stmt->bindParam(':addquestionlastname', $addquestionlastname);
                $stmt->bindParam(':addquestionemail', $addquestionemail);
                $stmt->bindParam(':addquestionphone', $addquestionphone);
                $stmt->bindParam(':addquestionmessage', $addquestionmessage);
                $stmt->execute();
        } else {
            ?>
                <script type="text/javascript"> alert('Les informations du formulaire ne sont pas conformes') </script>
            <?php  
        } 
    }

    function addQuestionWithSubject (string $addquestionfirstname, string $addquestionlastname, string $addquestionemail, string $addquestionphone, string $addquestionmessage, int $addquestioncarid )
    {
        function validContactFormdonnees2($addonnees) {
            $addonnees = trim($addonnees);
            $addonnees = stripslashes($addonnees);
            $addonnees = htmlspecialchars($addonnees);
            return $addonnees;
        }
        
        $addquestionfirstname = validContactFormdonnees2($_POST["addquestionfirstname"]);
        $addquestionlastname = validContactFormdonnees2($_POST["addquestionlastname"]);
        $addquestionemail = validContactFormdonnees2($_POST["addquestionemail"]);
        $addquestionphone = validContactFormdonnees2($_POST["addquestionphone"]);
        $addquestionmessage = validContactFormdonnees2($_POST["addquestionmessage"]);

        if($addquestionfirstname !== "" && $addquestionlastname !== "" && $addquestionemail !== "" && $addquestionphone !== "" && $addquestionmessage !== "" && $addquestioncarid !== "") {
                $stmt = $this->pdo->prepare('INSERT INTO questions (firstname, lastname, email, phone_number, message, car_id) 
                    VALUES (:addquestionfirstname, :addquestionlastname, :addquestionemail, :addquestionphone, :addquestionmessage, :addquestioncarid)');
                $stmt->bindParam(':addquestionfirstname', $addquestionfirstname);
                $stmt->bindParam(':addquestionlastname', $addquestionlastname);
                $stmt->bindParam(':addquestionemail', $addquestionemail);
                $stmt->bindParam(':addquestionphone', $addquestionphone);
                $stmt->bindParam(':addquestionmessage', $addquestionmessage);
                $stmt->bindParam(':addquestioncarid', $addquestioncarid);
                $stmt->execute();
        } else {
            ?>
                <script type="text/javascript"> alert('Les informations du formulaire ne sont pas conformes') </script>
            <?php  
        } 
    }

    public function validQuestionReply (int $validquestionid, int $validreply)
    {
        $stmt = $this->pdo->prepare('UPDATE questions 
            SET 
            reply_id = :validreply 
            WHERE id = :validquestionid');
        $stmt->bindParam(':validquestionid', $validquestionid);
        $stmt->bindParam(':validreply', $validreply);
        $stmt->execute();
    }

    public function getQuestionId()
    {
        return $this->id;
    }

    public function getQuestionFirstname()
    {
        return $this->firstname;
    }

    public function getQuestionLastname()
    {
        return $this->lastname;
    }

    public function getQuestionEmail()
    {
        return $this->email;
    }

    public function getQuestionPhone()
    {
        return $this->phone_number;
    }

    public function getQuestionMessage()
    {
        return $this->message;
    }
    
    public function getQuestionCarId()
    {
        return $this->car_id;
    }

    public function getQuestionReply()
    {
        return $this->reply_id;
    }
  
}