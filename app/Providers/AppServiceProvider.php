<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;   //para traducir al español en las rutas

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //para traducir al español en las rutas
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar',

        ]);
    }
}
