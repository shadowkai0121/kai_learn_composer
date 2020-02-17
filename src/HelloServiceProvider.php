<?php

namespace Kai\Test1;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(HelloController::class);
        require __DIR__ . './routes.php';
        $this->loadViewsFrom(__DIR__ . '/views', 'test1');
    }
}
