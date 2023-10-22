Installer WampServer (ou Xamp, ....)
Copier le dossier dans C:\wamp64\www
Lancer Wamp
Ajouter un VirtualHost
Redémarrer DNS
Puis cliquer sur le dossier dans VirtuelHost

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
