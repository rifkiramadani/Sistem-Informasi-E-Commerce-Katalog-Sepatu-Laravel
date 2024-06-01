<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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

        Paginator::useBootstrap();

        Gate::define('admin', function(User $user) { //definisikan sebuah gate yang bernama admin
            return $user->is_admin; ////yang hanya dapat di akses oleh kolom is_admin di table users yang bernilai true atau 1
        });
    }
}
