<?php

Route::get('/products/recommended/{city}', 'WeatherController@index')->where('city', '[A-Za-z]+');;

