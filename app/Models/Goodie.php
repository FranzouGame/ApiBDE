<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goodie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'quantite_disponible',
        'cout_unitaire'
    ];
}
