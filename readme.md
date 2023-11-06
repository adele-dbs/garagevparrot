Installer WampServer (ou Xamp, ....)
Créer un répertoire dans C:\wamp64\www pour le projet

Installer Git avec Git Bash : 
??Git Clone sur Dossier sur Github

Lancer Wamp : Cliquer sur Localhost dans le menu
Ajouter un VirtualHost
Redémarrer DNS
Puis cliquer sur le projet dans VirtualHost

Accéder à la BDD : 
cd C:\wamp64\bin\mysql\mysql8.0.31\bin
mysql -u root -p

Créer un Administrateur : 
INSERT INTO garage.rights (name) VALUES
('ADMIN'),
('STAFF');
INSERT INTO garage.users (right_id, firstname, lastname, email, password) VALUE
('1', 'Vincent', 'Parrot', 'vincent.parrot@garagevparrot.com', '$2y$10$Oz6iUzWHBD5y68h6zsQPo.TaJjS2D6BAyzNMZDaGEbbFuTrbsge4W');

vincent.parrot@garagevparrot.com : p4$$w0rd - Admin
marie.luun@garagevparrot.com : P&ssW&rd4 - User

Pour connaitre le mot de passe haché : 
Créer un pouveau porjet sur Replit coller le code et cliquer sur Run : 
<?php
$password = 'P&ssW&rd4';
$encrypted_password = password_hash($password, PASSWORD_BCRYPT);
echo $encrypted_password;
?>

Modifier les données de connexion dans le fichier models/Model.php

Déployer sur Heroku : 
heroku login
heroku create nomdevotreapplication
git push heroku main

https://garagevparrot2023-b77d5bb6833a.herokuapp.com/

Ajouter BDD sur Heroku : 
ajouter un add-on : heroku addons:create jawsdb:kitefin
lien bdd : heroku config
JAWSDB_URL: mysql://ibya8h8s5qr8suh1:a5xhdbva9458148y@bv2rebwf6zzsv341.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/zxt20twirf2ttd8i
Ajouter lien dbb dans fichier Model
Faire un sauvegarde de la BDD :mysqldump.exe -u root -p garage > garage.sql
Importer la BDD : mysql -u ibya8h8s5qr8suh1 -h bv2rebwf6zzsv341.cbetxkdyhwsb.us-east-1.rds.amazonaws.com -pa5xhdbva9458148y zxt20twirf2ttd8i < db_garage.sql

//Fichier Procfile : 
web: heroku-php-apache2

//git push -u origin main

//--app garagevparrot2023


 


