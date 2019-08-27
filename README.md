# projetTelecentre
Il s’agit d’une plate-forme qui fournit des services multiservices aux communautés rurales du Cameroun au moyen de télécentres.

# Installation Process(Processus d'installation)

Ensure you have composer

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

- Copy `.env.example` to `.env` and configure `.env` (`DB_*`). APP_KEY can be obtained by using this command:
```
php artisan key:generate
```

- Create database tables
```
php artisan migrate:fresh --seed
```

- Install all node node_modules
```
npm install
```
   
