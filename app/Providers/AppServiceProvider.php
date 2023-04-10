<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
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
        $data['option'] = DB::table('settings')->first();
        $data['title_section'] = DB::table('section_titles')->first();

        view()->composer('*', function ($view) use ($data) {

             view()->share('data',$data);

             $view->with($data);

         });
    }
}
