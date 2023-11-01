<?php

trait Model
{
    private $pdo = null;

    public function __construct()
    {
        //heroku
        //if (getenv('JAWSDB_URL') !== false) {
            //$url = getenv('JAWSDB_URL');
            //$dbparts = parse_url($url);
            
            $hostname = 'bv2rebwf6zzsv341.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
            $username = 'ibya8h8s5qr8suh1';
            $password = 'a5xhdbva9458148y';
            $database = 'zxt20twirf2ttd8i';

          //local  
         // } else {
                //$hostname = 'localhost';
                //$username = 'root'; 
                //$password = '';
                //$database = 'garage';
//} 

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