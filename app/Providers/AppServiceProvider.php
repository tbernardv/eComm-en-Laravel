<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Importamos por el error
use Illuminate\Support\Facades\Schema;

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
        //Agregamos por el error de posible compatibilidad de versiones
        Schema::defaultStringLength(191);
    }
}
