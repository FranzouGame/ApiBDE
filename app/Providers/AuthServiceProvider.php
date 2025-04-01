<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Ici, tu peux ajouter des règles pour la gestion de l'authentification
        // Par exemple : 
        // Auth::viaRequest('custom', function ($request) {
        //     return User::where('api_token', $request->api_token)->first();
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Si tu as des services à enregistrer, tu peux les ajouter ici
    }
}
