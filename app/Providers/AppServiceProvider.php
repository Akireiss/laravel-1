<?php

namespace App\Providers;

use App\Models\Students;
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
        //
        View::share('title', 'Student System');


        //othe shortcut to show data from the database:
        // view()->composer('student.index', function ($view) {
        //     $view->with('data', Students::all());
        // });
    }
}
