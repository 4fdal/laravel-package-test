<?php
namespace KodeIngatan\Mudahsenyo\Provider;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use KodeIngatan\Mudahsenyo\Facades\Mudahsenyo as FacadesMudahsenyo;
use Mudahsenyo;

class MudahsenyoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Mudahsenyo', FacadesMudahsenyo::class);

        // Register a class in the service container
        $this->app->bind('mudahsenyo', function ($app) {
            return new Mudahsenyo();
        });

        $this->app->singleton('mudahsenyo', function () {
            return new Mudahsenyo();
        });

        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');

    }

    public function boot()
    {
        // Register a macro, extending the Illuminate\Collection class


        // Register an authorization policy

    }
}
