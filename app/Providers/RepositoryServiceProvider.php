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
<<<<<<< HEAD
        $this->app->bind(\App\Repositories\AssesmentsRepository::class, 
            \App\Repositories\AssesmentsRepositoryEloquent::class);
=======
        $this->app->bind(\App\Repositories\AssesmentRepository::class, \App\Repositories\AssesmentRepositoryEloquent::class);
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
        //:end-bindings:
    }
}
