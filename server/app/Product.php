<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'sku',
        'name',
        'price'
    ];
    public $timestamps = false;

    public function weathers(){
        return $this->belongsToMany(Weather::class);
    }
}
