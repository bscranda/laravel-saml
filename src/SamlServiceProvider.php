<?php

namespace Bscranda\Saml;

use Illuminate\Support\ServiceProvider;
use Bscranda\Saml\Services\OneLoginBuilder;

class SamlServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SamlAuth::class, function ($app) {
            $oneLoginAuth = OneLoginBuilder::createAuthFromConfig();
            return new SamlAuth($oneLoginAuth);
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->publishes([
            __DIR__.'/config/saml_settings.php' => config_path('saml_settings.php'),
        ]);
    }

}
