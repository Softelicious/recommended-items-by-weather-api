# Restful API made with laravel

This service returns product recommendations depending on current weather at chosen Lithuanian city.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

PHP 7.1, Docker and Composer

### Installing

Clone container

```
git clone https://github.com/Softelicious/meteo.git
```

Navigate to cloned container

```
cd ~/Projects/meteo
```

Execute docker-compose.yml

```
docker-compose up -d
```

Enter the bash

```
docker-compose exec php-fpm bash
```

Install composer dependencies

```
composer install
```

Copy and rename .env.example file

```
cp .env.example .env
```

Generate app key

```
php artisan key:generate
```

Create and seed database

```
php artisan migrate --seed
```

That's it, check it out http://localhost:8081/api/products/recommended/rokiskis

## Built With

* [Laravel](https://laravel.com) - used framework 
* [Meteo](https://api.meteo.lt/) - used API
* [Guzzle](http://docs.guzzlephp.org/) - used HTTP client
* [Docker](https://docs.docker.com/) - used local server


