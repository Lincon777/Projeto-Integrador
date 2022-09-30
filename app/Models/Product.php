<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'description',
    'price_cents',
    'is_available',
    'establishment_id',
    'image_path'
];
}
