<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Personalizar los verbos utilizados en los controladores de recursos (cambiar idioma)
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar'
        ]);

        // Establecer la longitud por defecto para campos de tipo String - SGDB no compatibles con utf8mb4
        Schema::defaultStringLength(191);
    }
}
