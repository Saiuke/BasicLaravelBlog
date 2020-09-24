<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        //Makes the 'archives' varible avaible globally
        view()->composer('layouts.sidebar', function($view){
            $tags = \App\Tag::has('posts')->pluck('name');
            $archives = \App\Post::archives();
            $view->with(compact('archives', 'tags'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
