<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soiree;
use App\Models\Reservation;
use App\Models\Goodie;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Création de soirées
        $soiree1 = Soiree::create([
            'nom' => 'Soirée Fluo',
            'lieu' => 'Club 54',
            'date_heure' => Carbon::now()->addDays(7),
            'prix' => 10.00,
            'capacite_max' => 100,
            'theme' => 'Fluo'
        ]);

        $soiree2 = Soiree::create([
            'nom' => 'Bal de Promo',
            'lieu' => 'Salle des fêtes',
            'date_heure' => Carbon::now()->addDays(14),
            'prix' => 20.00,
            'capacite_max' => 200,
            'theme' => 'Chic'
        ]);

        // Création de goodies
        $goodie1 = Goodie::create([
            'nom' => 'Bracelet',
            'description' => 'Bracelet lumineux',
            'quantite_disponible' => 50,
            'cout_unitaire' => 2.00
        ]);

        $goodie2 = Goodie::create([
            'nom' => 'T-shirt',
            'description' => 'T-shirt édition spéciale',
            'quantite_disponible' => 30,
            'cout_unitaire' => 10.00
        ]);

        // Création d'une réservation avec goodies
        Reservation::create([
            'nom_etudiant' => 'Jean Dupont',
            'email_etudiant' => 'jean@example.com',
            'telephone_etudiant' => '0612345678',
            'soiree_id' => $soiree1->id,
            'date_reservation' => Carbon::now(),
            'statut' => 'confirmée',
            'goodies_attribues' => json_encode([
                ['nom' => 'Bracelet', 'quantite' => 2],
                ['nom' => 'T-shirt', 'quantite' => 1]
            ])
        ]);
    }
}
