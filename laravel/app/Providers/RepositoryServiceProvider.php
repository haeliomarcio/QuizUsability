<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\HeuristicaRepository::class, \App\Repositories\HeuristicaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProjetoRepository::class, \App\Repositories\ProjetoRepositoryEloquent::class);
        //:end-bindings:
    }
}
