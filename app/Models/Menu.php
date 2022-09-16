<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'description',
    'password',
    'is_active',
    'establishment_id',
];
}
