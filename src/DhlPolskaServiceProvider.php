<?php
namespace Kerogos\DhlPolska;

use Illuminate\Support\ServiceProvider;

class DhlPolskaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/dhl.php' => config_path('dhl.php')
        ], 'config');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/dhl.php' => config_path('dhl.php'),
        ]);
    }
}
