<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        'condition'
    ];
    public $timestamps = false;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
