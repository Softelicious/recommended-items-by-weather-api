# Restful API made with laravel

This service returns product recommendations depending on current weather at chosen Lithuanian city.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

PHP 7.1, Docker and Composer

### Installing

<<<<<<< HEAD
<<<<<<< HEAD
Navigate to cloned container
=======
Clone container
>>>>>>> master
=======
Clone container
>>>>>>> master

```
git clone https://github.com/Softelicious/meteo.git
```

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> master
Navigate to cloned container

```
cd ~/Projects/meteo
```

<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
Execute docker-compose.yml

```
docker-compose up -d
```

Enter the bash

<<<<<<< HEAD
<<<<<<< HEAD
## Built With

* [Laravel](https://laravel.com) - used framework 
* [Meteo](https://api.meteo.lt/) - used API
* [Guzzle](http://docs.guzzlephp.org/) - used HTTP client
=======
```
docker-compose exec php-fpm bash
```

=======
```
docker-compose exec php-fpm bash
```

>>>>>>> master
Install composer dependencies

```
composer install
```

Copy and rename .env.example file

```
cp .env.example .env
```

Generate app key
<<<<<<< HEAD

```
php artisan key:generate
```

Create and seed database

```
php artisan migrate --seed
```

=======

```
php artisan key:generate
```

Create and seed database

```
php artisan migrate --seed
```

>>>>>>> master
That's it, check it out http://localhost:8081/api/products/recommended/rokiskis

## Built With

* [Laravel](https://laravel.com) - used framework 
* [Meteo](https://api.meteo.lt/) - used API
* [Guzzle](http://docs.guzzlephp.org/) - used HTTP client
* [Docker](https://docs.docker.com/) - used local server
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master



