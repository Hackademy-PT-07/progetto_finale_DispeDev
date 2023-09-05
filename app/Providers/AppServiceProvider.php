<?php

namespace App\Providers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            View::share(['categories' => $categories]);
        }

        /* Implementa lo style di bootstrap per i links */
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
