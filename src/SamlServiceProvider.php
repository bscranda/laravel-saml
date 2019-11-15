<?php

namespace Bscranda\Saml;

use Illuminate\Support\ServiceProvider;

class SamlServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register controller
        $this->app->make('Bscranda\Saml\SamlController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
