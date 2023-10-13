<?php

namespace App\Providers;

use App\Interfaces\IRolesRepositorio;
use App\Repositorios\RolesRepositorio;
use Illuminate\Support\ServiceProvider;

class RepositoriosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IRolesRepositorio::class, RolesRepositorio::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
