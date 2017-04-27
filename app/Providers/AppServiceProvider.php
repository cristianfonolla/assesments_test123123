<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Laravel\Dusk\DuskServiceProvider;
=======
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
=======
        //
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08
    }
}
