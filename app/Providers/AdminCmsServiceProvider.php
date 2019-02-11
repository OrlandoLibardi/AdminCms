<?php

namespace OrlandoLibardi\OlCms\AdminCms\app\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AdminCmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../views'   => resource_path('views/'),
            __DIR__.'/../../public' => public_path('assets/'),
        ], 'admincmsstart');

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}