<?php

namespace App\Providers;

use App\Http\Controllers\testContracts\DatabaseData;
use App\Http\Controllers\testContracts\FileData;
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
        $this->app->singleton('App\Http\Controllers\testContracts\FileData', function($app)
        {
            return new FileData(['muslim' => 'brother']);
        });

//        $this->app->singleton('App\Http\Controllers\testContracts\DatabaseData', function($app)
//        {
//            return new DatabaseData(['akim' => 'brother']);
//        });

        $this->app->bind(
            'App\Http\Controllers\testContracts\Contracts\DataInterface',
            'App\Http\Controllers\testContracts\FileData');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
