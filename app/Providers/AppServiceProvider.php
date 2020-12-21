<?php

namespace App\Providers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

          session_start();
          $_SESSION["cart_temp_id"] = unixtojd();
//        $data =  DB::table('types')->where('parent_id',0)->limit(8)->get();
//        View::share('categories', $data);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
