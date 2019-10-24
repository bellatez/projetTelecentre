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


- swtich to the Dev branch of the repository
```
git checkout Dev
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

- Copy `.env.example` to `.env` and configure `.env` (`APP_URL`, `DB_*` settings).

- Migrate tables to the database with the command

```
php artisan migrate
```

- Seed The tables using the command

```
php artisan db:seed
```

- Start your server with the command
```
php -S localhost:8000 -t public
```


-WARNING
-PLEASE DO NOT PUSH TO THE MASTER BRANCH. BEFORE PUSHING CHECK WHICH BRANCH YOU ARE ON WITH THE COMMAND

```
git branch
```

-THE STARRED BRANCH IS THE WORKING BRANCH. MAKE SURE IT IS  Dev before you push.


-HOW TO PUSH YOUR WORK TO THE DEV BRANCH
 
-First you do a git commit with the command:

```
git commit -m "summarize what you have done here in quotes like this"

```

- Then perform a git pull:

```
git pull
```

- Then Merge the branches together

```
git merge
```

-Finally you can push your changes

```
git push
```
