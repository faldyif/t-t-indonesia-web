<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        App::setLocale(config(config('app.locale')));
        \Carbon\Carbon::setLocale(config('app.locale'));

        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create(config('app.locale'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
