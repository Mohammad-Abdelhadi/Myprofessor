<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// تم استدعاء فنكشن البيجنيتور لترقيم الصفحات تبعت المعلمين
use Illuminate\Pagination\Paginator;

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
        //
    }
}
