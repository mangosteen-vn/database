<?php

namespace Mangosteen\Database\Providers;

use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->publishes([
            __DIR__.'/../../database/seeders' => database_path('seeders'),
        ], 'mangosteen-seeders');

    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
    }
}
