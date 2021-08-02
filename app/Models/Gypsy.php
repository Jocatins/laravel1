<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gypsy extends Model
{
    use HasFactory;

    //Cast to transform array into json
    protected $casts = [
        'toppings' => 'array'
    ];
}
