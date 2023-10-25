Installer WampServer (ou Xamp, ....)
Créer un répertoire dans C:\wamp64\www pour le projet

Installer Git avec Git Bash
Git Clone sur Dossier sur Github

Lancer Wamp : Cliquer sur Localhost dans le menu
Ajouter un VirtualHost
Redémarrer DNS
Puis cliquer sur le dossier dans VirtualHost

git push -u origin main

Déployer sur Heroku
heroku login
heroku create nomdevotreapplication
git push heroku master

Fichier Procfile : 
web: heroku-php-apache2

Ajouter BDD : 
ajouter un add-on
lien bdd : heroku config
Ajouter lien dbb dans fichier config

Créer une BDD : 
cd C:\wamp64\bin\mysql
cd C:\wamp64\bin\mysql\mysql8.0.31\bin
mysql -u root -p