<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Ocorrencia;
use App\Observers\OcorrenciaObserver;

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

public function boot()
{
    Ocorrencia::observe(OcorrenciaObserver::class);
}

}
