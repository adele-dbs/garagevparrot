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

    
   /*public function getUserDetailById (int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id = ?');
        $userById = null;
        if ($stmt->execute([$id])) {
          $userById = $stmt->fetchObject('User');
          if(!is_object($userById)) {
              $userById = null;
          }
        return $userById;
        }
    }*/

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

    /*public function updateUser (int $updatestaffid, string $updatestafffirstname, string $updatestafflastname, string $updatestaffemail, string $updatestaffpassword, int $updatestaffright)
    {
        function validUpdateUserdonnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }
        
        $updatestafffirstname = validUpdateUserdonnees($_POST["updatestafffirstname"]);
        $updatestafflastname = validUpdateUserdonnees($_POST["updatestafflastname"]);
        $updatestaffemail = validUpdateUserdonnees($_POST["updatestaffemail"]);
        $updatestaffpassword = validUpdateUserdonnees($_POST["updatestaffpassword"]);

        $encrypted_password = password_hash($updatestaffpassword, PASSWORD_BCRYPT);

        $stmt = $this->pdo->prepare('UPDATE users 
            SET 
            firstname = :updatestafffirstname, 
            lastname = :updatestafflastname,
            email = :updatestaffemail,
            password = :updatestaffpassword,
            right_id = :updatestaffright 
            WHERE id = :updatestaffid');
        $stmt->bindParam(':updatestaffid', $updatestaffid);
        $stmt->bindParam(':updatestafffirstname', $updatestafffirstname);
        $stmt->bindParam(':updatestafflastname', $updatestafflastname);
        $stmt->bindParam(':updatestaffemail', $updatestaffemail);
        $stmt->bindParam(':updatestaffpassword', $encrypted_password);
        $stmt->bindParam(':updatestaffright', $updatestaffright);
        $stmt->execute();
    }*/

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
    
    public function getQuestionCarId()
    {
        return $this->car_id;
    }

    public function getQuestionReply()
    {
        return $this->reply_id;
    }
  
}