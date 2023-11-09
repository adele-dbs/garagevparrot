<?php

trait Model
{
    private $pdo = null;

    public function __construct()
    {
            $hostname = 'localhost';
            $username = 'user_garage'; 
            $password = 'Dlfelkf9Za';
            $database = 'garage';
        try {
            //SQL Injection
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            $this->pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password, $options);
        } catch (PDOException $PDOException) {
            echo 'Impossible de se connecter à la base de donnée';
            exit('Erreur : '.$PDOException->getMessage());
        }
    }
}