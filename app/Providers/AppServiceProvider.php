<?php

namespace App\Providers;

use App\Project;
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
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('sidebar',function($view){
            $view->with('post', Project::latest()->take(3)->get());
        });

        View::composer('leftsidebar',function($view){
            $view->with('time', 
                Project::selectRaw('year(created_at) year, monthname(created_at) month , count(*) published')->groupBy('year','month')->orderByRaw('min(created_at) desc')->get());
        });

        View::composer('leftsidebar',function($view){
                $view->with('popular',Project::get()->sortByDesc('click')->take(3));
            });
    }
}
