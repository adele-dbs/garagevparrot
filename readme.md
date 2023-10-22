Installer WampServer (ou Xamp, ....)
Copier le dossier dans C:\wamp64\www
Lancer Wamp
Ajouter un VirtualHost
Redémarrer DNS
Puis cliquer sur le dossier dans VirtuelHost

git push -u origin main

heroku login

Déployer sur Heroku
heroku create nomdevotreapplication
heroku addons:add heroku-postgresql:hobby-dev //créer bdd
heroku config // pour voir le chemin de la bdd
indiquer le chemin de la bdd dans le fichier de config
Installer la librairie pour utiliser la bdd : pip install psycopg2
Fichier Procfile : 
web: gunicorn fbapp:app : gunicor = serveur web d'Heroku
init: GARAGE_APP=index.php garage init_db
Installer gunicorn :  pip install gunicorn
Créer le fichier requirements.txt :  pip freeze > requirements.txt //liste les librairies
git push heroku master
heroku run init pour ajouter du contenu dans la bdd