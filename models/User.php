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
        if($email !== "" && $password !== "") {
            $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $stmt->bindValue(':email', $email);
            if ($stmt->execute()) {
                $user = $stmt->fetch();
                if ($user !== false && password_verify($password, $user->getPassword())) {
                    if ($user->getRightId() === 1 ) {
                        $_SESSION["autoriser"]="oui";
                        header('Location: ?page=user-interface-admin');
                    } else {
                        if ($user->getRightId() === 2 ) {
                            $_SESSION["autoriser"]="oui";
                            header('Location: ?page=user-interface-staff'); 
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