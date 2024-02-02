<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Banners;
use App\Models\Footer;
use App\Models\Products;
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
        View::composer('*', function ($view) {
            $homePage = Banners::orderBy('id', 'desc')->get();
            $view->with('homePage', $homePage);
        });
        View::composer('*', function ($view) {
            $about = About::orderBy('id', 'desc')->get();
            $view->with('about', $about);
        });
        View::composer('*', function ($view) {
            $product = Products::orderBy('id', 'desc')->get();
            $view->with('product', $product);
        });
        View::composer('*', function ($view) {
            $footer = Footer::orderBy('id', 'desc')->get();
            $view->with('footer', $footer);
        });
    }
}
