# Restful API made with laravel

This service returns product recommendations depending on current weather at chosen Lithuanian city.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Docker and Composer

### Installing


Clone container


```
git clone https://github.com/Softelicious/recommended-items-by-weather-api.git
```


Navigate to cloned container

```
cd ~/recommended-items-by-weather-api
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

## More info
**_City goes to {city}_**
 localhost:8081/api/products/recommended/**{city}**
 
 **_And response for example will be_**
 
 ```json
{
    "city": "vilnius",
    "current_weather": "light-rain",
    "recommended_products": [
        {
          "sku": "a-46",
          "name": "Red a",
          "price": 25
        },
        {
          "sku": "pla-7",
          "name": "LightGoldenRodYellow placeat",
          "price": 24
        }
     ]
 }
 ```

## Built With

* [Laravel](https://laravel.com) - used framework 
* [Meteo](https://api.meteo.lt/) - used API
* [Guzzle](http://docs.guzzlephp.org/) - used HTTP client
* [Docker](https://docs.docker.com/) - used local server




