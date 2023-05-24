<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        // Allow mass assigment for the elocuent models. 
        // it's recommended to follow Laravel's default approach of using 
        // $fillable or $guarded to explicitly allow or restrict mass assignment 
        // for your model attributes, as it provides an additional layer of security.
        Model::unguard();
    }
}
