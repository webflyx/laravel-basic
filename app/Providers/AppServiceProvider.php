<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Share for all templates
        View::share('date', date('Y'));

        //Share for specify section templates
        View::composer('user*', function($view){
            $view->with('balance', 12345);
        });
    }
}
