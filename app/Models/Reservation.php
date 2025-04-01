<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_etudiant',
        'email_etudiant',
        'telephone_etudiant',
        'soiree_id',
        'date_reservation',
        'statut',
        'goodies_attribues'
    ];

    protected $casts = [
        'goodies_attribues' => 'array',
    ];

    public function soiree()
    {
        return $this->belongsTo(Soiree::class);
    }
}
