<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Definir los campos que desea rellenar en la base de datos
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];
}
