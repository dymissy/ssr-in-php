<?php

namespace App\Providers;

use App\Services\ApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(GuzzleClient::class, fn(Application $app) => new GuzzleClient(
            ['base_uri' => $app->get('config')->get('app.api_base_uri')]
        ));

        $this->app->singleton(ApiClient::class, fn(Application $app) => new ApiClient($app->make(GuzzleClient::class)));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
