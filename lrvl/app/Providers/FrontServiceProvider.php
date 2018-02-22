<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 22.02.18
 * Time: 16:55
 */

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\UrlGenerator;
//use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers\Front';

    public function boot()
    {
        $this->setRootControllerNamespace();
        $this->loadRoutes();
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    public function map()
    {
          Route::namespace($this->namespace)
            ->group(base_path('routes/front.php'));
    }

    protected function loadRoutes()
    {
        $this->app->call([$this, 'map']);
    }

    protected function setRootControllerNamespace()
    {
        if (! is_null($this->namespace)) {
            $this->app[UrlGenerator::class]->setRootControllerNamespace($this->namespace);
        }
    }
}