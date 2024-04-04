<?php

namespace App\Providers;

use App\Models\Carousel;
use Illuminate\Pagination\Paginator;
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
        $language = request()->language;
        app()->setLocale($language);


        Paginator::useBootstrap();
    }
}
