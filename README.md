# projetTelecentre
Il s’agit d’une plate-forme qui fournit des services multiservices aux communautés rurales du Cameroun au moyen de télécentres.

### Local Environment Setup (Configuration de l'environnement local)

All shell commands require current folder to be project root.

- clone the repository
```
git clone https://github.com/bellatez/projetTelecentre.git
```

- Switch to the api directory
```
cd projetTelecentre

cd api
```
- Run the following commands

    -If you do not have composer: 
    
- Install Composer (http://getcomposer.org) and run
```
composer update
```
if composer is installed globally, or
```
php composer.phar update
```
if you simply downloaded composer.phar into project root.

- Create MySQL database

- Copy `.env.example` to `.env` and configure `.env` (`APP_URL`, `DB_*` settings). APP_KEY can be obtained by using this command:
```
php artisan key:generate
```

- Start your server with the command
```
php -S localhost:8000 -t public
```
