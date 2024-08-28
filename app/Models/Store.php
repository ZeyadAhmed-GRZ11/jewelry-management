<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'jewelry_name',
        'material_caliber',
        'description',
        'material_type',
        'price',
        'image',
    ];

    protected $table = 'store';

}
