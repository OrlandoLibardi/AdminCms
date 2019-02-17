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

        //Rotas
        Route::namespace('OrlandoLibardi\OlCms\AdminCms\app\Http\Controllers\Admin')
        ->middleware(['web', 'auth'])
        ->prefix('admin')
        ->group(__DIR__. '/../../routes/web.php');

        //registrar a views
        $this->loadViewsFrom( __DIR__.'/../../resources/views/admin/', 'viewAdminCms');

        $this->publishes([
            __DIR__.'/../../resources'   => resource_path('/'),
            __DIR__.'/../../public' => public_path('/'),
            __DIR__.'/../../database/migrations/' => database_path('migrations'),
            __DIR__.'/../../database/seeds/' => database_path('seeds'),
        ], 'config');
   
        
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