<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

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
    public function boot(UrlGenerator $url)
    {
        //
        // \URL::forceScheme('https');
        // if (in_array(config('app.env'), ['prd', 'stg'])) {
        //     $url->forceScheme('https');
        //   }
        $bool = $_SERVER['SSL'];
        if ($bool == "true") {
            $url->forceScheme('https');
        }
    }
}
