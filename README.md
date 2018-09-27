# e-Progest Exercice PHP

J'ai utilisé le framework Symfony pour concevoir l'exercice en PHP. 

### Les outils
* PHP 7.2
* MySQL 
* Composer

### Installation du projet

```php
$ git clone git://github.com/Poniav/eProgestExo.git
$ cd eProgestExo

// Editer le fichier .env pour la connexion SQL

$ composer install

$ php bin/console doctrine:database:create
$ php bin/console make:migration ( development )
$ php bin/console doctrine:migrations:migrate

$ php bin/console server:run

```

## Base de données

Il y a deux façons de récupérer les utilisateurs dans la base de données. Soit en chargeant les fixtures avec la commande ci-dessous ou alors en récupérant le fichier SQL à la racine du projet dans DB.

```php
$ php bin/console doctrine:fixtures:load
```

## Infos

J'ai pas configuré la protection CSRF sur les formulaires.

