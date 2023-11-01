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

Ajouter BDD sur Heroku : 
ajouter un add-on : heroku addons:create jawsdb:kitefin
lien bdd : heroku config
Ajouter lien dbb dans fichier config

//Fichier Procfile : 
web: heroku-php-apache2

//git push -u origin main





 


