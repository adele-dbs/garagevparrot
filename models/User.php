<?php

require_once('models/Model.php');

class User
{
    use Model;

    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private int $right_id;

    public function getLogin (string $email, string $password)
    {
        function validUserdonnees($donnees) {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }

        $email = validUserdonnees($_POST["email"]);
        $password = validUserdonnees($_POST["password"]);

        if($email !== "" && $password !== "") {
            $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $stmt->bindValue(':email', $email);
            if ($stmt->execute()) {
                $user = $stmt->fetch();
                if ($user !== false && password_verify($password, $user->getPassword())) {
                    if ($user->getRightId() === 1 ) {
                        $_SESSION["autoriser"]="oui";
                        header('Location: ?page=admin');
                    } else {
                        if ($user->getRightId() === 2 ) {
                            $_SESSION["autoriser"]="oui";
                            header('Location: ?page=staff'); 
                        } else {
                            require_once 'views/login.php';
                            ?>
                                <script type="text/javascript"> alert('Vous n\' être pas autorisé à vous connecter') </script>
                            <?php   
                        } 
                    }
                } else {
                    require_once 'views/login.php';
                    ?>
                        <script type="text/javascript"> alert('Identifiant ou Mot de passe invalide') </script>
                    <?php   
                }
            }  
        } 
    }

    public function getUserDetailById (int $id)
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
    }

    public function addUser (string $addstafffirstname, string $addstafflastname, string $addstaffemail, string $addstaffpassword, int $addstaffright )
    {
        function validAddUserdonnees($addonnees) {
            $addonnees = trim($addonnees);
            $addonnees = stripslashes($addonnees);
            $addonnees = htmlspecialchars($addonnees);
            return $addonnees;
        }
        
        $addstafffirstname = validAddUserdonnees($_POST["addstafffirstname"]);
        $addstafflastname = validAddUserdonnees($_POST["addstafflastname"]);
        $addstaffemail = validAddUserdonnees($_POST["addstaffemail"]);
        $addstaffpassword = validAddUserdonnees($_POST["addstaffpassword"]);
        $addstaffright = validAddUserdonnees($_POST["addstaffright"]);

        $encrypted_password = password_hash($addstaffpassword, PASSWORD_BCRYPT);

        
        if($addstafffirstname !== "" && $addstafflastname !== "" && $addstaffemail !== "" && $addstaffpassword !== "" && $addstaffright !== "" ) {
                $stmt = $this->pdo->prepare('INSERT INTO users (firstname, lastname, email, password, right_id ) 
                    VALUES (:addstafffirstname, :addstafflastname, :addstaffemail, :addstaffpassword, :addstaffright)');
                $stmt->bindParam(':addstafffirstname', $addstafffirstname);
                $stmt->bindParam(':addstafflastname', $addstafflastname);
                $stmt->bindParam(':addstaffemail', $addstaffemail);
                $stmt->bindParam(':addstaffpassword', $encrypted_password);
                $stmt->bindParam(':addstaffright', $addstaffright);
                $stmt->execute();
        } else {
            ?>
                <script type="text/javascript"> alert('Les informations du formulaire ne sont pas conformes') </script>
            <?php  
        } 
    }

    public function deleteUser (int $id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM users 
            WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateUser (int $updatestaffid, string $updatestafffirstname, string $updatestafflastname, string $updatestaffemail, string $updatestaffpassword, int $updatestaffright)
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
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    public function getRightId()
    {
        return $this->right_id;
    }
  
}