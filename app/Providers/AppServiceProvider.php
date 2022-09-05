<?php

namespace App\Providers;

use App\View\Composers\UserNameComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer('Home.home', UserNameComposer::class);
//        View::composer('Home.text', UserNameComposer::class);
        //View::composer('*', UserNameComposer::class);
        View::composer([
            'Home.home',
            'Home.text'
        ], UserNameComposer::class);
    }
}
