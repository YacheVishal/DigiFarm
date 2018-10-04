<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class search extends Model
{
    protected $fillable = [
        'categories', 'location', 'city', 'farmer_name',
    ];

}
